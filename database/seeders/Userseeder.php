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
            'email' => 'admiin@gmail.com',
            'password' => bcrypt('vaqui'),
            'rol_id' => 1
        ]);
        $user1->save();
        
        
}
}