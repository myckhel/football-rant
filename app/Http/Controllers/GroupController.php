<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Group;
use App\Member;
use DB;
use App\Club;
use App\Discussions;
use Auth;
use App\Events\NewMessage;

class GroupController extends Controller
{
    //
    public function index($club){
      $club = Club::toName($club);
      $groups = Group::selectRaw('groups.name, groups.id, COUNT(members.id) AS number_members, clubs.id AS club_id')
      ->join('members','groups.id','members.group_id')->join('clubs','groups.club_id','clubs.id')
      ->where('clubs.name', $club)->groupby('groups.name', 'groups.id', 'clubs.id')->get();
      return view('club.groups', compact('groups'));
    }

    public function join(Request $request){
      $group = $request->group;      $user = $request->user;      $club = $request->club;
      //check if joined already
      if($member = Member::where('group_id',$group)->where('club_id',$club)->where('user_id',$user)->first()){
        return response()->json(['status' => false, 'reason' => 'Already a member of this group']);
      }
      Member::create(['group_id' => $group, 'user_id' => $user, 'club_id' => $club,]);
      $name = Club::toLink(Group::where('id',$group)->where('club_id',$club)->first()->name);
      return response()->json(['status' => true, 'name' => $name]);
    }

    public function leave(Request $request){
      $group = $request->group;      $user = $request->user;      $club = $request->club;
      //check if left already
      $member = 0;
      if(!($member = Member::where('group_id',$group)->where('club_id',$club)->where('user_id', $user)->first())){
        return response()->json(['status' => false, 'reason' => 'You have already left this group']);
      }
      //remove member
      Member::destroy($member->id);
      $name = Group::where('id',$group)->where('club_id',$club)->first()->name;
      return response()->json(['status' => true, 'name' => $name, 'member' => $member->id]);
    }

    public function create(Request $request){
      $name = $request->name;      $user = $request->user;      $club = $request->club;
      $group = Group::create(['name' => $name, 'user_id' => $user, 'club_id' => $club,]);
      if($group){
        $id = Group::where('name',$name)->where('user_id',$user)->where('club_id',$club)->first()->id;
        Member::create(['group_id' => $id, 'user_id' => $user, 'club_id' => $club,]);
        return response()->json(['status' => true, 'id' => $id]);
      }
      else{return response()->json(['status' => false]);}
    }

    public function view($club,$group){
      $group = Club::toName($group);
      $club = Club::toName($club);
      //group
      $group = Group::selectRaw('groups.name, groups.id, groups.user_id, groups.club_id, clubs.name AS club, users.name AS creator, COUNT(members.id) AS number_members')
      ->join('users','groups.user_id','users.id')->join('members','groups.id','members.group_id')
      ->join('clubs','groups.club_id','clubs.id')->where('groups.name',$group)
      ->groupby('groups.name', 'groups.id', 'groups.user_id', 'groups.club_id', 'users.name', 'clubs.name')->first();
      //group members
      $members = Member::selectRaw('users.name')->join('users','members.user_id','users.id')
      ->where('members.group_id',$group->id)->get();
      // if($user = \Auth::user()){
      //   //joined groups
      //   // $jgroups
      //   return view('club.group', compact('group', 'members', 'jgroups'));
      // }
      return view('club.group', compact('group', 'members'));
    }

    public function store()
    {
        $group = Group::create(['name' => request('name')]);

        $users = collect(request('users'));
        $users->push(auth()->user()->id);

        $group->users()->attach($users);

        return $group;
    }

    public function getMsg(Request $request){
      $club = Club::find($request->club)->id;
      $group = Group::find($request->group)->id;
      $user = Auth::user();

      $msg = Discussions::selectRaw('users.name as user_name, users.avatar as avatar, users.id as user_id, discussions.msg as msg ')
      ->join('users', 'users.id', 'discussions.user_id')
      ->where('group_id', $group)->where('club_id', $club)->get();
      return $msg;
      // return Discussions::with('user')->with('group')->get();
    }

    public function getList(){
      return Group::selectRaw('groups.name, clubs.badge')
      ->join('members', 'members.group_id', 'groups.id')->join('clubs', 'clubs.id', 'groups.club_id')
      ->where('members.user_id', Auth::user()->id)->get();
      // Group::with('user')->with('club')->with('member')->get();
    }

    public function saveMsg(){
      $user = Auth::user();
      $club = Club::find(1)->id;
      $group = Group::find(4)->id;

      $message = Discussions::create([
        'msg' => request()->get('msg'),
        'club_id' => $club,
        'group_id' => $group,
        'user_id' => $user->id,
      ]);

      broadcast(New NewMessage($message, $user))->toOthers();

      return ['status' => 'OK'];
    }
}
