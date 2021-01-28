<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = "user";

    public function getAverageEventUser(){
      return $this->hasOne("App\Models\AverageEventUser", "user_id", "user_id");
    }

    public function getAverageGroup(){
      return $this->hasOne("App\Models\AverageGroup", "group_id", "group_id");
    }

    public function getAverageUser(){
      return $this->hasOne("App\Models\AverageUser", "user_id", "user_id");
    }

    public function getScore(){
      return $this->hasOne("App\Models\UserEvent", "user_id", "user_id");
    }
}
