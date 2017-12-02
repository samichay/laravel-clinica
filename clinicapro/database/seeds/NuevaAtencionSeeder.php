<?php

use Illuminate\Database\Seeder;
use App\Models\Atencion;
use App\Models\Usuario;
use App\Models\Tipo_Atencion;
use App\Models\Paciente;

class NuevaAtencionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Atencion::create([
    		'fecha_atencion'=> '2017-11-12',
        	'hora_atencion' => '16:09:19',
        	'precio'=>'15',
        	'id_tipo' => Tipo_Atencion::where('descripcion','Papanicolao')->value('id_tipo'),
        	'id_paciente'=> Paciente::where('nombres','Mayra Villavicencio')->value('id_paciente'),
        	'id_usuario'=> Usuario::where('nick','usuario1')->value('id_usuario'),
    	]);

/*        DB::table('atencion')->insert([
        	'fecha_atencion'=> '2017-11-12',
        	'hora_atencion' => '16:09:19',
        	'precio'=>'15',
        	'id_tipo' => DB::table('tipo_atencion')->wheredescripcion('Papanicolao')->value('id_tipo'),
        	'id_paciente'=> DB::table('paciente')->wherenombres('Mayra Villavicencio')->value('id_paciente'),
        	'id_usuario'=> DB::table('usuario')->wherenick('usuario1')->value('id_usuario') ,
        ]);
*/    }
}
