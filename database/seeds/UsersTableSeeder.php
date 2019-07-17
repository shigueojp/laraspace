<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'email' => 'admin@finnet.com.br',
            'name' => 'Admin',
            'role' => 'admin',
            'password' => bcrypt('finnet10@')
        ]);

        User::create([
            'email' => 'okuhamail@gmail.com',
            'name' => 'Victor Okuhama',
            'role' => 'user',
            'password' => bcrypt('finnet10@')
        ]);

        User::create([
            'email' => 'victorokuhama@hotmail.com',
            'name' => 'Naruto Uzumaki',
            'role' => 'user',
            'password' => bcrypt('finnet10@')
        ]);
    }
}
