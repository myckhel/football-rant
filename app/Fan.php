<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fan extends Model
{
  //
  protected $fillable = [
      'id', 'user', 'club',
  ];

  public static function isFan($club = false){
    if($club){
      if((!$guest = !($user = \Auth::user())) && (Fan::where('user', $user->id)->where('club', $club)->first())){
        return true;
      }else{
        return false;
      }
    }
    else{
      //return club or false
      return Fan::where('user', \Auth::user()->id)->join('clubs', 'clubs.id', 'fans.club')->first();
    }
  }
}
