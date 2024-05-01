<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'label' => 'Italiano',
                'img' => '',
            ],
            [
                'label' => 'Cinese',
                'img' => '',
            ],
            [
                'label' => 'Giapponese',
                'img' => '',
            ],
            [
                'label' => 'Indiano',
                'img' => '',
            ],
            [
                'label' => 'Messicano',
                'img' => '',
            ],
            [
                'label' => 'Siriano',
                'img' => '',
            ],
            [
                'label' => 'Africano',
                'img' => '',
            ],
            [
                'label' => 'Thailandese',
                'img' => '',
            ],
            [
                'label' => 'Brasiliano',
                'img' => '',
            ],
            [
                'label' => 'Turco',
                'img' => '',
            ],
            [
                'label' => 'Carne',
                'img' => '',
            ],
            [
                'label' => 'Pesce',
                'img' => '',
            ],
            [
                'label' => 'Gelato',
                'img' => '',
            ],
            [
                'label' => 'Pizza',
                'img' => '',
            ],
            [
                'label' => 'Poke',
                'img' => '',
            ],
        ];
        foreach ($categories as $category) {
            $new_category = new Category();
            $new_category->label = $category['label'];
            $new_category->slug = Str::slug($category['label']);
            $new_category->save();
        }
    }
}
