<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'Tomo & Yosh',
            'features' => 'Or sablé
							Lapis Lazulis – Diamants
							10mm x 23mm',
            'description' => 'Tomo & Yosh vont de paire. Elles ont été créées à partir du même coeur d’un Lapis Lazulis.
Cette pierre provient de gisements d’Afghanistan. Ce bleu intense incrusté de Pyrites était utilisé pour décorer les plafonds de certains monuments historiques. Il symbolise un ciel étoilé.',
        ]);
    }
}
