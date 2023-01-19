<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            [
                'name' => 'Informatica',
                'description' => 'Ordenadores, Smartphones'
            ],
            [
                'name' => 'Jardineria',
                'description' => 'herramientas, plantas'
            ],
            [
                'name' => 'Electrodomesticos',
                'description' => 'Productos para la casa'
            ],
            [
                'name' => 'Ropa',
                'description' => 'Camisetas, sudaderas'
            ],
        ];
        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
