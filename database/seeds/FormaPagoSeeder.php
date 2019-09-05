<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FormaPagoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('forma_pagos')->insert([
            'nombre' => 'Transferencia',
            'descripcion' => 'Cuenta Banco de Pichincha 456789765464 A Nombre de Dogsi Mascotas'
        ]);   
        DB::table('forma_pagos')->insert([
            'nombre' => 'Pago en tienda',
            'descripcion' => 'Se hace un pedido y el personal se pondra en contacto con usted para fijar el horario de entrega en la tienda.'
        ]);
        DB::table('forma_pagos')->insert([
            'nombre' => 'Pago contra entrega',
            'descripcion' => 'Se hace un pedido y se paga cuando llegue a su domicilio'
        ]);
    }
}
