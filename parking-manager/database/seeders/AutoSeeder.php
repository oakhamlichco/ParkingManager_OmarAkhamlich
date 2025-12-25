<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Autoa;

class AutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //AutoaFactory erabili datuak sortzeko (Fluxua: migrate:fresh --seed -> seeder-a deitu -> seeder-a factory erabili).
        //Autoa::factory(40)->create();
        
        //truncate datuak eta id autoinkrementala berriz hasteko.
        Autoa::truncate();
    }
}
