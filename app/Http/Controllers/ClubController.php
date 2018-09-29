<?php

namespace App\Http\Controllers;
use App\Club;

use Illuminate\Http\Request;

class ClubController extends Controller
{
    //
    public function index($club){
      $club = Club::where('name', $club)->first();
      return view('club.index', compact('club'));
    }
}
