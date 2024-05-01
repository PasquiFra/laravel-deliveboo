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
        $labels = [
            'Italiano',
            'Cinese',
            'Giapponese',
            'Indiano',
            'Messicano',
            'Siriano',
            'Africano',
            'Thailandese',
            'Brasiliano',
            'Turco',
            'Carne',
            'Pesce',
            'Gelato',
            'Pizza',
            'Poke'
        ];
        foreach ($labels as $label) {
            $category = new Category();
            $category->label = $label;
            $category->slug = Str::slug($label);
            $category->save();
        }
    }
}
