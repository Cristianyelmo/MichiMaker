<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
class Userseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            
            'name'=>'admin',
            'email'=>'admin@gmail.com',
            'password'=> bcrypt('123'),
            'rol_id'=>1
           
           ],[
            
            'name'=>'user',
            'email'=>'user@gmail.com',
            'password'=> bcrypt('123'),
            'rol_id'=>1
           
           ]); 
    }
}
