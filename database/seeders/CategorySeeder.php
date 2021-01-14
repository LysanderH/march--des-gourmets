<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            'Boucherie',
            'Charcuterie',
            'Poissonnerie',
            'Épicerie',
            'Boulangerie',
            'Pâtisserie',
            'Confiserie',
            'Chocolaterie',
            'Brasserie',
            'Vigneron',
            'Apiculteur',
            'Bio'
        ];

        foreach ($categories as $category) {
            Category::create(['name' => $category]);
        }
    }
}
