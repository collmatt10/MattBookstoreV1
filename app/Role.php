<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
  public function users(){
    return $this->belongstoMany('app\User', 'user_role'); //creating he mant to many releationship between users and roles
  }
}
