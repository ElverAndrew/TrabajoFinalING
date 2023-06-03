<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'id' => '1',
            'nombre' => 'Cemento Sol | 42.5 kg',
            'descripcion_larga' => 'Preparación de concretos para cimientos, sobrecimientos, zapatas, vigas, columnas y techado.',
            'detalles' => 'Excelente desarrollo en resistencias a la compresión. Buena trabajabilidad.',
            'image' => 'ce_sol.png',
            'costo' => 29,
            'stock' => 100,
            'categoria' => 'Cementos',
            'id_categoria' => '1',
        ]);

        Product::create([
            'id' => '2',
            'nombre' => 'Cemento Andino Ultra 42.5kg',
            'descripcion_larga' => 'Muy requerido por los maestros de construcción por su desarrollo en un adecuado tiempo de fraguado y uno menor en el desencofrado.',
            'detalles' => 'Resistente a la humedad y al salitre. Alto desempeño con agregados álcali-reactivos. Contiene adiciones impermeabilizantes.',
            'image' => 'ce_andino.png',
            'costo' => 30.70,
            'stock' => 100,
            'categoria' => 'Cementos',
            'id_categoria' => '1',
        ]);

        Product::create([
            'id' => '3',
            'nombre' => 'Cemento Apu 42.5kg',
            'descripcion_larga' => 'Los mejores para tus obras de construcción',
            'detalles' => 'Óptimos resultados en el desarrollo de las resistencias a la compresión, trabajabilidad y acabado.',
            'image' => 'ce_apu.png',
            'costo' => 26.80,
            'stock' => 100,
            'categoria' => 'Cementos',
            'id_categoria' => '1',
        ]);

        Product::create([
            'id' => '4',
            'nombre' => 'Cemento Ares x 1 kg',
            'descripcion_larga' => 'Cemento usado para pequeños trabajos de albañilería mezclado con cemento gris para concretos y morteros.',
            'detalles' => 'Endurece al entrar en contacto con el agua. Cualidades aglutinantes. Alta resistencia.',
            'image' => 'ce_ares.png',
            'costo' => 3.90,
            'stock' => 100,
            'categoria' => 'Cementos',
            'id_categoria' => '1',
        ]);

        Product::create([
            'id' => '5',
            'nombre' => 'Piqueta 1.2 lbs madera Herragro',
            'descripcion_larga' => 'Ideal para romper superficies no muy duras y para eliminar rebabas de distinto tamaño y consistencia.',
            'detalles' => 'Forjado en una sola pieza en acero de alto carbono, son tratados térmicamente con temple y revenido garantizando un menor desgaste y mayor resistencia en ambos extremos.',
            'image' => 'pico.png',
            'costo' => 39.90,
            'stock' => 25,
            'categoria' => 'Piquetas',
            'id_categoria' => '2',
        ]);

        Product::create([
            'id' => '6',
            'nombre' => 'Plancha compactadora 125kg ',
            'descripcion_larga' => 'Plancha compactadora reversible, ideal para arena, ripio y suelos mixtos en zanjas estrechas.',
            'detalles' => 'Producto adecuado para la consolidación de terrenos, compactación de suelos, ideal para áreas amplias, de fácil manejo y versátil.',
            'image' => 'aplanar.png',
            'costo' => 3799,
            'stock' => 25,
            'categoria' => 'Planchas_Compactadoras',
            'id_categoria' => '3',
        ]);

        Product::create([
            'id' => '7',
            'nombre' => 'Carretilla Buggy 80 litros',
            'descripcion_larga' => 'Carretilla tipo Buggy de Werken especialmente diseñada para trabajos de construcción.',
            'detalles' => 'Estructura y bandeja metálica, fácil de transportar debido a su gran diseño.',
            'image' => 'carretilla_1.png',
            'costo' => 209,
            'stock' => 20,
            'categoria' => 'Carretillas',
            'id_categoria' => '4',
        ]);

        Product::create([
            'id' => '8',
            'nombre' => 'Carretilla CAT-50ND Truper',
            'descripcion_larga' => 'Carretilla de gran resistencia con capacidad de hasta 80 litros. Cuenta con un tacón estabilizador para un mayor control y una llanta neumática reforzada. Perfecta para tus trabajos de construcción y jardinería.',
            'detalles' => 'Estructura y bandeja metálica, fácil de transportar debido a su gran diseño.',
            'image' => 'carretilla_2.png',
            'costo' => 259,
            'stock' => 15,
            'categoria' => 'Carretillas',
            'id_categoria' => '4',
        ]);

        Product::create([
            'id' => '9',
            'nombre' => 'Comba 2Kg Tramontina',
            'descripcion_larga' => 'Podrás obtener esta comba de suma utilidad para trabajos de construcción que te permitirá dar golpes con la fuerza requerida.',
            'detalles' => 'Cabeza octavada forjada en acero especial y templada. Acabado jadeado y cabeza barnizada. Mango de madera fijado con cuña metálica. Máxima resistencia al desgaste, impacto y rotura. Alta calidad y mayor durabilidad.',
            'image' => 'comba.png',
            'costo' => 49.90,
            'stock' => 50,
            'categoria' => 'Combas',
            'id_categoria' => '5',
        ]);

        Product::create([
            'id' => '10',
            'nombre' => 'Mezcladora trompo 5P3 con motor 5.5HP',
            'descripcion_larga' => 'Mezcladora de concreto diseñada para satisfacer pequeñas obras de construcción. Muy fácil de instalar y puede ser armado por una persona.',
            'detalles' => 'Transmisión con polea de doble canal y fajas en A. Suspensión por muelles para un transporte suave.',
            'image' => 'mescladora.png',
            'costo' => 2599,
            'stock' => 35,
            'categoria' => 'Trompo_Mesclador',
            'id_categoria' => '6',
        ]);

        Product::create([
            'id' => '11',
            'nombre' => 'Badilejo para stucco',
            'descripcion_larga' => 'Un badilejo es una herramienta manual para construcción. Con un mango muy resistente, de alta durabilidad. Facilita las labores del albañil cuando trabaja con mortero y ladrillos especialmente.',
            'detalles' => 'Hoja de acero inoxidable. Mango de bimaterial.',
            'image' => 'badilejo_plano.png',
            'costo' => 12.90,
            'stock' => 15,
            'categoria' => 'Badilejos',
            'id_categoria' => '7',
        ]);

        Product::create([
            'id' => '12',
            'nombre' => 'Badilejo mango ergo',
            'descripcion_larga' => 'Un badilejo es una herramienta manual para construcción. Con un mango muy resistente, de alta durabilidad. Facilita las labores del albañil cuando trabaja con mortero y ladrillos especialmente.',
            'detalles' => 'Hoja de acero inoxidable. Mango de bimaterial.',
            'image' => 'ba_tri.png',
            'costo' => 17.90,
            'stock' => 25,
            'categoria' => 'Badilejos',
            'id_categoria' => '7',
        ]);

        Product::create([
            'id' => '13',
            'nombre' => 'Espatula esquinera',
            'descripcion_larga' => 'Chuquilluri trae esta espátula con esta herramienta le podrás dar una nueva vida a tus superficies, es indispensable para todo tipo de trabajo de pintura.',
            'detalles' => 'Hoja de acero inoxidable. Mango de bimaterial.',
            'image' => 'ba_esq.png',
            'costo' => 23.90,
            'stock' => 25,
            'categoria' => 'Badilejos',
            'id_categoria' => '7',
        ]);

        Product::create([
            'id' => '14',
            'nombre' => 'Llana económica mango plástica',
            'descripcion_larga' => 'Esta herramienta perfecta para trabajos de construcción, es muy resistente y durable, es una llana.',
            'detalles' => 'Cuerpo ABS. Espesor del tablero 3 mm.',
            'image' => 'plana.png',
            'costo' => 12.90,
            'stock' => 15,
            'categoria' => 'Badilejos',
            'id_categoria' => '7',
        ]);

        Product::create([
            'id' => '15',
            'nombre' => 'Cerradura para dormitorio Acero Inoxidable',
            'descripcion_larga' => 'Cerradura para dormitorio con acabado en acero inoxidable. Cuenta con un sistema de bloqueo desde el interior y picaporte reversible.',
            'detalles' => 'Cerradura cilíndrica de acero inoxidable 201, cuenta con doble roseta roscada de 75 mm, mecanismo interno de acero tropicalizado.',
            'image' => 'mango_1.png',
            'costo' => 49.90,
            'stock' => 14,
            'categoria' => 'Cerraduras',
            'id_categoria' => '8',
        ]);

        Product::create([
            'id' => '16',
            'nombre' => 'Cerradura Blindada Máxima 1000',
            'descripcion_larga' => 'Cerradura de máxima seguridad para puertas exteriores de madera.',
            'detalles' => 'Cuerpo de acero LAF de 1.9 mm de espesor de una sola pieza. Cuenta con 2 Pivotes de acero cromado de 19 mm de espesor.',
            'image' => 'mango_2.png',
            'costo' => 104.90,
            'stock' => 30,
            'categoria' => 'Cerraduras',
            'id_categoria' => '8',
        ]);

        Product::create([
            'id' => '17',
            'nombre' => 'Atornillador Einhell 18V',
            'descripcion_larga' => 'Ahorra en energía y costo con su tecnología POWER x-CHANGE de Einhell.',
            'detalles' => 'Atornillador de 18v liviano de batería extraíble.',
            'image' => 'atornillador.png',
            'costo' => 269.90,
            'stock' => 45,
            'categoria' => 'Atornilladores',
            'id_categoria' => '9',
        ]);

        Product::create([
            'id' => '18',
            'nombre' => 'Amoladora 5" Bosch 1700w',
            'descripcion_larga' => 'Con esta amoladora con la que podrás realizar mejor tus trabajos.',
            'detalles' => 'Con esta amoladora con la que podrás realizar mejor tus trabajos.',
            'image' => 'cortadora.png',
            'costo' => 649,
            'stock' => 48,
            'categoria' => 'Amoladoras',
            'id_categoria' => '10',
        ]);

        Product::create([
            'id' => '19',
            'nombre' => 'Fresadora Gkf 550 Bosch',
            'descripcion_larga' => 'Calidad de enrutamiento siempre bajo control y recorte rápido. Enrasado rápido y de calidad al alcance de la mano.',
            'detalles' => 'Calidad de enrutamiento siempre bajo control y recorte rápido. Sujeción robusta de la base. Carcasa delgada con empuñadura blanda.',
            'image' => 'fresadora.png',
            'costo' => 469,
            'stock' => 25,
            'categoria' => 'Fresadoras',
            'id_categoria' => '11',
        ]);

        Product::create([
            'id' => '20',
            'nombre' => 'Taladro 18V + Atornillador de impacto GDX',
            'descripcion_larga' => 'Taladro de diseño ergonómico, cómodo y de fácil de manejar.',
            'detalles' => 'Herramientas de 18v de batería extraíble. Empuñadura Softgrip de diseño ergonómico, cómodo y de fácil de manejar.',
            'image' => 'taladro.png',
            'costo' => 859,
            'stock' => 25,
            'categoria' => 'Taladros',
            'id_categoria' => '12',
        ]);

        Product::create([
            'id' => '21',
            'nombre' => 'Barra de construcción 1/2" x 9 metros',
            'descripcion_larga' => 'Fabricado de acero resistente.',
            'detalles' => 'Es el principal elemento en la construcción de una casa pues contribuye notablemente a darle la estabilidad a ésta cuando ocurre un sismo.',
            'image' => 'barra.png',
            'costo' => 41,
            'stock' => 50,
            'categoria' => 'Barras_Construccion',
            'id_categoria' => '13',
        ]);

    }
}
