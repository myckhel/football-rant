<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fan extends Model
{
    //
    protected $fillable = [
        'id', 'user', 'club',
    ];

    public static function isFan($id, $club = false){
      if($club){
        if(Fan::where('user', $id)->where('club', $club)->first()){
          return true;
        }else{
          return false;
        }
      }
      else{
        //return club or false
        return Fan::where('user', $id)->join('clubs', 'clubs.id', 'fans.club')->first();
      }
    }
}
