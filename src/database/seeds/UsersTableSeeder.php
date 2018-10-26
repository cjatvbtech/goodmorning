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
        DB::table('users')->insert([
            'name'=>'Super Admin',
            'email'=>'admin@goodmorning.dev',
            'password'=>bcrypt('goodmorning!!!')
        ]);
    }
}
