<?php

namespace Database\Seeders;

use App\Models\Ambiente;
use App\Models\Sensor;
use Illuminate\Database\Seeder;

class SensorSeeder extends Seeder
{
    public function run(): void
    {
        foreach ([
            ['ambiente' => 'Sala de Estar', 'codigo' => 'TEMP01', 'tipo' => 'Temperatura', 'descricao' => 'Mede a temperatura da sala.', 'status' => true],
            ['ambiente' => 'Cozinha', 'codigo' => 'UMID01', 'tipo' => 'Umidade', 'descricao' => 'Mede a umidade da cozinha.', 'status' => true],
            ['ambiente' => 'Quarto', 'codigo' => 'LUZ01', 'tipo' => 'Luminosidade', 'descricao' => 'Mede a luminosidade do quarto.', 'status' => false],
        ] as $item) {
            $ambiente = Ambiente::where('nome', $item['ambiente'])->firstOrFail();
            Sensor::updateOrCreate(
                ['codigo' => $item['codigo']],
                [
                    'ambiente_id' => $ambiente->id,
                    'tipo' => $item['tipo'],
                    'descricao' => $item['descricao'],
                    'status' => $item['status'],
                ]
            );
        }
    }
}
