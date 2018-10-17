<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    //
    protected $fillable = [
        'name', 'user_id', 'club_id',
    ];

    public function discussions(){
      return $this->hasMany(Discussions::class);
    }

    public function user(){
      return $this->belongsTo(User::class);
    }

    public function member(){
      return $this->hasMany(Member::class);
    }

    public function club(){
      return $this->belongsTo(Club::class);
    }
}
