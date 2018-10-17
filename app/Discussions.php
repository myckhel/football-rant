<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discussions extends Model
{
  protected $fillable = [
      'msg', 'club_id', 'group_id', 'user_id',
  ];
    //
    public function user(){
      return $this->belongsTo(User::class);
    }

    public function group(){
      return $this->belongsTo(Group::class);
    }
}
