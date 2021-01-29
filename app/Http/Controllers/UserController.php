<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function store(Request $request){
      return User::create($request->all);
    }

    public function show($user_id){
      $user = User::where('user_id','=',$user_id)->first();
      $average_event_user = $user->getAverageEventUser;
      $average_group = $user->getAverageGroup;
      $average_user = $user->getAverageUser;
      $user_event = $user->getScore;
      return $user;
    }
}
