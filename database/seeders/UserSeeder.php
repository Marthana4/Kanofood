<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
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
        User::truncate();
        User::create([
            'name' => 'dafid bayu',
            'no_hp'=> '08456838',
            'gender'=> 'L',
            'tanggal_lahir'=> '2000-07-12',
            'level'=> 'customer',
            'email'=> 'dafid@gmail.com',
            'password'=> bcrypt('123456'),
            'remember_token'=> Str::random(60),
        ]);
    }
}
