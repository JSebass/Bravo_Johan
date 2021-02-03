<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeederLibros extends Seeder
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
                'isbn'=>'00982',
                'titulo'=>'Cien años de soledad',
                'precio'=>80200,
                'stock'=>100,
                'editorial_fk'=>1
            ],
            [
                'isbn'=>'1235',
                'titulo'=>'¿Quien se ha llevado mi queso?',
                'precio'=>25000,
                'stock'=>5,
                'editorial_fk'=>2
            ],
            [
                'isbn'=>'22578',
                'titulo'=>'Harry Potter',
                'precio'=>60500,
                'stock'=>25,
                'editorial_fk'=>3
            ],
            [
                'isbn'=>'77832',
                'titulo'=>'Cosmos',
                'precio'=>90200,
                'stock'=>100,
                'editorial_fk'=>4
            ],
            [
                'isbn'=>'55478',
                'titulo'=>'Necronomicon',
                'precio'=>100200,
                'stock'=>0,
                'editorial_fk'=>5
            ]
        ];
        DB::table('libro')->insert($datos);
    }
}
