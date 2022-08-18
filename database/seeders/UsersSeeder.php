<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
               'name'=>'user',
               'email'=>'user@user.com',
               'type'=>0,
               'password'=> bcrypt('12345678'),
            ],
            [
               'name'=>'admin',
               'email'=>'admin@admin.com',
               'type'=>1,
               'password'=> bcrypt('12345678'),
            ],
            [
               'name'=>'other',
               'email'=>'other@other.com',
               'type'=> 2,
               'password'=> bcrypt('12345678'),
            ],
        ];
    
        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}
