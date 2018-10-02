<?php

namespace App\Http\Controllers;
use App\Club;
use App\Fan;

use Illuminate\Http\Request;

class ClubController extends Controller
{
    //
    public function index($club){
      $club = Club::where('name', $club)->first();
      return view('club.index', compact('club'));
    }

    public function teams(){
      $teams = Club::selectRaw('clubs.id, clubs.name, (SELECT COUNT(fans.id) From fans) AS number_fans, COUNT(groups.id) AS number_groups')
      ->leftjoin('fans', 'fans.club', 'clubs.id')->leftjoin('groups', 'groups.club', 'clubs.id')
      ->groupby('clubs.id', 'clubs.name')->get();
      return view('teams', compact('teams'));
    }

    public function join(Request $request){
      $user = $request->user;      $club = $request->club;
      //check if joined already
      if($member = Fan::where('club',$club)->where('user',$user)->first()){
        return response()->json(['status' => false, 'reason' => 'Already a fan of this team']);
      }
      Fan::create(['user' => $user, 'club' => $club,]);
      $name = implode('-', explode(' ', Club::where('id',$club)->first()->name));
      return response()->json(['status' => true, 'name' => $name]);
    }

    public function leave(Request $request){
      $user = $request->user;      $club = $request->club;
      //check if left already
      $fan = 0;
      if(!($fan = Fan::where('club',$club)->where('user',$user)->first())){
        return response()->json(['status' => false, 'reason' => 'You have already left this team']);
      }
      Fan::destroy($fan->id);
      $name = Club::where('id',$club)->first()->name;
      return response()->json(['status' => true, 'name' => $name]);
    }
}
