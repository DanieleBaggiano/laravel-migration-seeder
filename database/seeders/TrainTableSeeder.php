<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Train;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $trains = [
            [
                'azienda' => 'Trenitalia',
                'stazione_partenza' => 'Milano',
                'stazione_arrivo' => 'Napoli',
                'orario_partenza' => '15:00:00',
                'orario_arrivo' => '21:00:00',
                'codice_treno' => 'gdeg45g6',
                'numero_carrozze' => 22,
                'in_orario' => false,
                'cancellato' => false,
            ],
            [
                'azienda' => 'Italo',
                'stazione_partenza' => 'Roma',
                'stazione_arrivo' => 'Firenze',
                'orario_partenza' => '08:30:00',
                'orario_arrivo' => '10:00:00',
                'codice_treno' => 'htyu54k9',
                'numero_carrozze' => 15,
                'in_orario' => true,
                'cancellato' => false,
            ],
        ];

        foreach ($trains as $train) {
            $newTrain = new Train();
            $newTrain->azienda = $train['azienda'];
            $newTrain->stazione_partenza = $train['stazione_partenza'];
            $newTrain->stazione_arrivo = $train['stazione_arrivo'];
            $newTrain->orario_partenza = $train['orario_partenza'];
            $newTrain->orario_arrivo = $train['orario_arrivo'];
            $newTrain->codice_treno = $train['codice_treno'];
            $newTrain->numero_carrozze = $train['numero_carrozze'];
            $newTrain->in_orario = $train['in_orario'];
            $newTrain->cancellato = $train['cancellato'];
            $newTrain->save();
        }
    }
}
