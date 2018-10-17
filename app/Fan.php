<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fan extends Model
{
  //
  protected $fillable = [
      'id', 'user_id', 'club_id',
  ];

  public static function isFan($club = false){
    if($club){
      if((!$guest = !($user = \Auth::user())) && (Fan::where('user_id', $user->id)->where('club_id', $club)->first())){
        return true;
      }else{
        return false;
      }
    }
    else{
      //return club or false
      return Fan::where('user_id', \Auth::user()->id)->join('clubs', 'clubs.id', 'fans.club_id')->first();
    }
  }
}
