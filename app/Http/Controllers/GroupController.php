<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Group;
use DB;

class GroupController extends Controller
{
    //
    public function index(){
      $groups = Group::all();
      return view('club.groups', compact('groups'));
    }

    public function create(Request $request){
      $name = $request->name;
      $user = $request->user;
      $club = $request->club;
      $group =
      Group::create([
            'name' => $name,
            'creator' => $user,
            'club' => $club,
          ]);
      if($group){
        $id = Group::where('name',$name)->where('creator',$user)->where('club',$club)->first()->id;
        return response()->json(['status' => true, 'id' => $id]);
      }
      else{return response()->json(['status' => false]);}
    }

    public function view($group,Request $request){
      $group = implode(' ', explode('-', $group));
      $group = Group::where('name',$group)->first();
      return view('club.group', compact('group'));
    }
}
