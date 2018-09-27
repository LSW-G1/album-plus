<?php

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    public function run()
    {
        User::create([
            'name'              => 'Durand',
            'email'             => 'durand@chezlui.fr',
            'role'              => 'admin',
            'password'          => bcrypt('admin'),
            'settings'          => '{"pagination": 8, "adult": true}',
            'email_verified_at' => Carbon::now(),
        ]);

        User::create([
            'name'              => 'Dupont',
            'email'             => 'dupont@chezlui.fr',
            'password'          => bcrypt('user'),
            'settings'          => '{"pagination": 8, "adult": true}',
            'email_verified_at' => Carbon::now(),
        ]);

        User::create([
            'name'              => 'Martin',
            'email'             => 'martin@chezlui.fr',
            'password'          => bcrypt('user'),
            'settings'          => '{"pagination": 8, "adult": true}',
            'email_verified_at' => Carbon::now(),
        ]);

        User::create([
            'name'              => 'Kevin',
            'email'             => 'root@root.root',
            'password'          => bcrypt('root'),
            'role'              => 'admin',
            'settings'          => '{"pagination": 20, "adult": true}',
            'email_verified_at' => Carbon::now(),
        ]);
    }
}
