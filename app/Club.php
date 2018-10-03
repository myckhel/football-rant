<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Fan;

class Club extends Model
{
    //
    public static function isFan($id, $club){
      if(Fan::where('user', $id)->where('club', $club)->first()){
        return true;
      }else{return false;}
    }

    public static function toLink($club){
      return implode('-', explode(' ', $club));
    }

    public static function toName($club){
      return implode(' ', explode('-', $club));
    }

    public static function getDefaultClub(){
      return Club::where('current',1)->first();
    }

    public static function findByName($name){
      $name = Club::toName($name);
      return Club::where('name', $name)->first();
    }
}
