<?php

namespace App\Http\Controllers;
use App\Club;
use App\Fan;

use Illuminate\Http\Request;

class ClubController extends Controller
{
    //
    //private $current;
    public function index($club){
      if($club = Club::where('name', Club::toName($club))->first()){
        //this->$current = Club::toLink($club->name);
        return view('club.index', compact('club'));
      }else{
        $message = 'Ooops! Club or Page Not Found';
        return view('club.404', compact('message'));
      }
    }

    public function teams(){
      $teams = Club::selectRaw('clubs.id, clubs.name, clubs.badge, (SELECT COUNT(fans.id) From fans where fans.club_id = clubs.id) AS number_fans,
      (SELECT COUNT(groups.id) From groups where groups.club_id = clubs.id) AS number_groups')
      //->leftjoin('fans', 'fans.club', 'clubs.id')->leftjoin('groups', 'groups.club', 'clubs.id')
      ->groupby('clubs.id', 'clubs.name', 'clubs.badge')->get();
      return view('teams', compact('teams'));
    }

    public function join(Request $request){
      $user = $request->user;      $club = $request->club;
      //check if joined already
      if($member = Fan::where('club_id',$club)->where('user_id',$user)->first()){
        return response()->json(['status' => false, 'reason' => 'Already a fan of this team']);
      }
      Fan::create(['user_id' => $user, 'club_id' => $club,]);
      $name = Club::toLink(Club::where('id',$club)->first()->name);
      return response()->json(['status' => true, 'name' => $name]);
    }

    public function leave(Request $request){
      $user = $request->user;      $club = $request->club;
      //check if left already
      $fan = 0;
      if(!($fan = Fan::where('club_id',$club)->where('user_id',$user)->first())){
        return response()->json(['status' => false, 'reason' => 'You have already left this team']);
      }
      Fan::destroy($fan->id);
      $name = Club::where('id',$club)->first()->name;
      return response()->json(['status' => true, 'name' => $name]);
    }
}
