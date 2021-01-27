<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = "user";

    public function getAverageUser(){
      return $this->hasMany("App\Models\AverageUser", "user_id", "user_id");
    }

    public function getAverageGroup(){
      return $this->hasMany("App\Models\AverageGroup", "group_id", "group_id");
    }

    public function getAverageEventUser(){
      return $this->hasMany("App\Models\AverageEventUser", "user_id", "user_id");
    }
}
