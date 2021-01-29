<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserEventController extends Controller
{

    public function store(Request $request){
      $user_event = UserEvent::create($request->all());

      return response()->json($user_event, 201);
    }
}
