<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GroupController extends Controller
{
    //
    public function create(Request $request){
      $name = $request->name;
      $creator = $request->user;
      $club = $request->club;

      $group_id;
      return response()->json(['success' => true, 'group_id' => $group_id]);
    }
}
