<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    //
    protected $fillable = [
        'group_id', 'user_id', 'club_id',
    ];

    public static function isMember($id, $group = false){
      if($group){
        if((!$guest = !(\Auth::user())) && (Member::where('user_id', $id)->where('group_id', $group)->first())){
          return true;
        }else{return false;}
      }else{
        return Member::where('user_id', $id)->where('group_id', $group)->first();
      }
    }

    public function group(){
      return $this->belongsTo(Group::class);
    }
}
