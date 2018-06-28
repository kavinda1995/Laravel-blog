<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('users')->truncate();

        DB::table('users')->insert([
           [
               "name" => "John Doe",
               "email" => "johndoe@gmail.com",
               "password" => bcrypt('secret')
           ],
            [
                "name" => "Hey Doe",
                "email" => "heydoe@gmail.com",
                "password" => bcrypt('secret')
            ],
            [
                "name" => "Tyan Landerson",
                "email" => "tyan@gmail.com",
                "password" => bcrypt('secret')
            ],
        ]);
    }
}
