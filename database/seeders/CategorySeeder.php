<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $labels = ['Italiano', 'Cinese', 'Giapponese', 'Indiano', 'Messicano', 'Siriano', 'Africano', 'Thailandese', 'Brasiliano', 'Turco'];
        foreach ($labels as $label) {
            $type = new Category();
            $type->label = $label;
            $type->save();
        }
    }
}
