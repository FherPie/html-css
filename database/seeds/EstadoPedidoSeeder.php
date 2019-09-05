<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstadoPedidoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('estado_pedidos')->insert([
            'nombre' => 'Nuevo'
        ]);
        DB::table('estado_pedidos')->insert([
            'nombre' => 'Enviado'
        ]);
        DB::table('estado_pedidos')->insert([
            'nombre' => 'Entregado'
        ]);
    }
}
