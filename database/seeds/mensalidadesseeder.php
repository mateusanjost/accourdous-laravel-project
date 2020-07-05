<?php

use Illuminate\Database\Seeder;

class mensalidadesseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $mensa = [
            0 => [
                'name' => 'Mateus',
                'email' => 'mateus@gmail.com',
                'mensalidade' => 'mmmmm',
                'filtro' => '1'
            ]
                 ];
                  DB::table('mensalidade')->insert($mensa);
                  dd($mensa);
    }
}
