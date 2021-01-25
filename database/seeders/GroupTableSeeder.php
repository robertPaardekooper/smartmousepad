<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class GroupTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('group')->insert([
        "group_id" => 6,
        "group_name" => "Groep 6",
      ]);

    }
}
