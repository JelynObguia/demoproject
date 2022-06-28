<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
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
            'name' => 'Jelyn Obguia',
            'email' => 'jelyn_obguia@yahoo.com',
            'email_verified_at' => Carbon::now(),
            'password' => bcrypt('password123')
        ],
        [
            'name' => 'Steve Nojobs',
            'email' => 'steveN@gmail.com',
            'email_verified_at' => Carbon::now(),
            'password' => bcrypt('password123')
        ],
        [
            'name' => 'Marc Kos',
            'email' => 'marck@gmail.com',
            'email_verified_at' => Carbon::now(),
            'password' => bcrypt('password123')
        ],
        ];
        foreach($users as $user){
            User::create($user);
        }
    }
}
