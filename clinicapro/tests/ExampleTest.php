<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    function test_UsuariosExample()
    {
        $this->visit('/usuario')
        ->assertResponseOk()   
        ->see('Samichay')
        ->see('ppk');
           
    }

    function test_Usuarios_datos_personalizados()
    {
        $this->visit('/usuario/id/jorge')
        ->assertResponseOk()   
        ->see('Aqui se mostraran los datos del usuario jorge');
    }
}
