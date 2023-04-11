<?php

namespace Database\Seeders;

use App\Models\Cliente;
use Illuminate\Database\Seeder;

class ClientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cliente::create([
            'cpf' => '33167890712',
            'nome' =>'Thiago',
            'data_nascimento' => '1989-01-09',
            'sexo' => 'M',
        ]);
    }
}
