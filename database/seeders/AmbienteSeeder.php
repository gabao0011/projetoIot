<?php

namespace Database\Seeders;

use App\Models\Ambiente;
use Illuminate\Database\Seeder;

class AmbienteSeeder extends Seeder
{
    public function run(): void
    {
        foreach ([
            ['nome' => 'Sala de Estar', 'descricao' => 'Monitoramento da sala de estar.', 'status' => true],
            ['nome' => 'Cozinha', 'descricao' => 'Monitoramento da cozinha.', 'status' => true],
            ['nome' => 'Quarto', 'descricao' => 'Monitoramento do quarto.', 'status' => false],
        ] as $dados) {
            Ambiente::updateOrCreate(['nome' => $dados['nome']], $dados);
        }
    }
}
