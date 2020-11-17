<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin001',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('teste123'),
        ]);
        User::create([
            'name' => 'Luiz',
            'email' => 'luiz@gmail.com',
            'password' => bcrypt('teste123'),
        ]);
    }
}
