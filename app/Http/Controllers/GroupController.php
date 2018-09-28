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
      $group = //DB::tabel('groups')->insert(['name' => $name, 'creator' => $user, 'club' => $club]);
      Group::create([
            'name' => $name,
            'creator' => $user,
            'club' => $club,
          ]);
      if($group){return response()->json(['status' => true]);}
      else{return response()->json(['status' => false]);}
    }
}
