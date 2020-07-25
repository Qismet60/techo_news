<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('users')->insert([
           'name'=>'Admin',
           'email'=>'admin@gmail.com',
           'password'=>bcrypt('359263'),
        ]);
    }
}
