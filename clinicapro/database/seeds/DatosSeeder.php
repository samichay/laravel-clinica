<?php

use Illuminate\Database\Seeder;

class DatosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('muestra')->insert([
        	'nombre' => 'Examen de Secrecion Vaginal',
        ]);
        
        DB::table('muestra')->insert([
        	'nombre' => 'Papanicolao',
        ]);
        
        DB::table('muestra')->insert([
        	'nombre' => 'Otros',
        ]);

    }
}
