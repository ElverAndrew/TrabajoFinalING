<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\Categoria;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categoria::create([
            'id' => 1,
            'categoria' => 'Cementos',
        ]);

        Categoria::create([
            'id' => 2,
            'categoria' => 'Piquetas',
        ]);

        Categoria::create([
            'id' => 3,
            'categoria' => 'Planchas_Compactadoras',
        ]);

        Categoria::create([
            'id' => 4,
            'categoria' => 'Carretillas',
        ]);

        Categoria::create([
            'id' => 5,
            'categoria' => 'Combas',
        ]);

        Categoria::create([
            'id' => 6,
            'categoria' => 'Trompo_Mesclador',
        ]);


        Categoria::create([
            'id' => 7,
            'categoria' => 'Badilejos',
        ]);

        Categoria::create([
            'id' => 8,
            'categoria' => 'Cerraduras',
        ]);

        Categoria::create([
            'id' => 9,
            'categoria' => 'Atornilladores',
        ]);

        Categoria::create([
            'id' => 10,
            'categoria' => 'Amoladoras',
        ]);

        Categoria::create([
            'id' => 11,
            'categoria' => 'Fresadoras',
        ]);

        Categoria::create([
            'id' => 12,
            'categoria' => 'Taladros',
        ]);

        Categoria::create([
            'id' => 13,
            'categoria' => 'Barras_Construccion',
        ]);
    }
}
