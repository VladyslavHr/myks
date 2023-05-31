<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Vlad',
            'email' => 'admin@admin.com',
            'password' => bcrypt('GlorytotUkraine789'),
        ]);

        $user = User::create([
            'name' => 'Sofia',
            'email' => 'mykheicheva@gmail.com',
            'password' => bcrypt('S19021994m'),
        ]);
    }
}
