<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Accesorio;
class Userseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user1 = new Accesorio([
            'nombre' => 'blanco',
            'email' => 'blanco.png',
            
        ]);
        $user1->save();


        $user2 = new Accesorio([
            'nombre' => 'manchitas',
            'email' => 'manchitas.png',
            
        ]);
        $user2->save();

        $user3 = new Accesorio([
            'nombre' => 'marron',
            'email' => 'marron.png',
            
        ]);
        $user3->save();

        $user3 = new Accesorio([
            'nombre' => 'marron',
            'email' => 'marron.png',
            
        ]);
        $user3->save();
        
        
    }
}
