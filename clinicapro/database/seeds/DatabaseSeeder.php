<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$this->truncateTables([
    		'muestra'
    	]);
        $this->call(DatosSeeder::class);
        $this->call(NuevaAtencionSeeder::class);
     	$this->call(UsuarioSeeder::class);   
    }

    protected function truncateTables(array $tablas)
    {
    	DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
    	foreach ($tablas as $tabla) {	
    		DB::table($tabla)->truncate();
    	}
    	DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    		
    }
}
