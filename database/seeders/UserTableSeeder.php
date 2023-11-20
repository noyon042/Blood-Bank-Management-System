<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use function Laravel\Prompts\password;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
         'name'=>'admin',
         'role'=>'admin',
         'blood_group'=>'A+',
         'contact'=>'08632',
         'email'=>'admin@gmail.com',
         'password'=>bcrypt('1234567'),
        ]);
    }
}
