<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeederEditorial extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $datos=[
            [
                'nombre'=>'Norma',
                'direccion'=>'Av. El Dorado 90-10',
                'ciudad'=>'Bogotá',
                'telefono'=>'426652'
            ],
            [
                'nombre'=>'Mc Graw Hill',
                'direccion'=>'Carrera 85 k #46a-66',
                'ciudad'=>'Bogotá',
                'telefono'=>'5566458'
            ],
            [
                'nombre'=>'Alfaomega Colombiana',
                'direccion'=>'Cl. 62 #20-46',
                'ciudad'=>'Bogotá',
                'telefono'=>'5446694'
            ],
            [
                'nombre'=>'Los Tres Editores S.A.S.',
                'direccion'=>'Cl. 48 #88-45',
                'ciudad'=>'Cali',
                'telefono'=>'558624'
            ],
            [
                'nombre'=>'La Santillana',
                'direccion'=>'Cl. 445 #54-78',
                'ciudad'=>'Medellín',
                'telefono'=>'4478923'
            ]
        ];
        DB::table('editorial')->insert($datos);
    }
}
