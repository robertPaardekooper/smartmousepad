<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class UserEventTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('user_event')->insert([
          "user_id" => 1,
          "event_id" => 2,
          "datetime" => "2017-06-07 09:39:31",
      ]);
      DB::table('user_event')->insert([
          "user_id" => 2,
          "event_id" => 1,
          "datetime" => "2017-06-07 09:39:31",
      ]);
      DB::table('user_event')->insert([
          "user_id" => 3,
          "event_id" => 3,
          "datetime" => "2017-06-07 09:39:31",
      ]);
    }
}
