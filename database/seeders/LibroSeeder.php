<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LibroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('libro')->insert([
         'nombre'=> 'Programacion',
         'autor' => 'Luis joyanes',
       
       ]);
       DB::table('libro')->insert([
         'nombre'=> 'sistemas operativos',
         'autor' => 'Luis joyanes',
       
       ]);
    }
}
?>