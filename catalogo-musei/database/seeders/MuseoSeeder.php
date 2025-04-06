<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Museo;

class MuseoSeeder extends Seeder
{
    public function run(): void
    {
        Museo::create([
            'nome' => 'Museo Archeologico Nazionale',
            'citta' => 'Napoli',
            'descrizione' => 'Uno dei più importanti musei archeologici al mondo.',
            'immagine' => 'https://upload.wikimedia.org/wikipedia/commons/2/2c/Museo_Archeologico_Nazionale_di_Napoli.jpg',
        ]);

        Museo::create([
            'nome' => 'Museo Egizio',
            'citta' => 'Torino',
            'descrizione' => 'Secondo museo egizio più importante al mondo.',
            'immagine' => 'https://upload.wikimedia.org/wikipedia/commons/6/6f/Museo_Egizio_Torino.jpg',
        ]);

        Museo::create([
            'nome' => 'Galleria degli Uffizi',
            'citta' => 'Firenze',
            'descrizione' => 'Una delle più celebri collezioni di arte rinascimentale al mondo.',
            'immagine' => 'https://upload.wikimedia.org/wikipedia/commons/9/9c/Uffizi_Gallery_Florence.jpg',
        ]);
        
    }
}
