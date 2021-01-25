<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function show($user_id){
      $user = User::where('user_id','=',$user_id)->first();
      $average_user = $user->getAverageUser;
      $average_group = $user->getAverageGroup;
      $average_event_user = $user->getAverageEventUser;
      return $user;
    }
}
