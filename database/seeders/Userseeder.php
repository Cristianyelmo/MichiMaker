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
        $user1 = new User([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123'),
            'rol_id' => 1
        ]);
        $user1->save();
        
        $user2 = new User([
            'name' => 'user',
            'email' => 'user@gmail.com',
            'password' => bcrypt('123'),
            'rol_id' => 1
        ]);
        $user2->save();
    }
}
