<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    //
    protected $fillable = [
        'groups', 'user', 'club',
    ];

    public static function isMember($id, $group){
      if(Member::where('user', $id)->where('groups', $group)->first()){
        return true;
      }else{return false;}
    }
}
