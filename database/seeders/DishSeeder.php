<?php

namespace Database\Seeders;

use App\Models\Dish;
use Faker\Generator;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DishSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Generator $faker): void
    {

        // Piatti Italiani
        $dishes = [
            [
                'restaurant_id' => 1,
                'name' => 'Supplì',
                'availability' => 1,
                'ingredient' => 'Pomodoro, Basilico, Riso',
                'price' => 4
            ],
            [
                'restaurant_id' => 1,
                'name' => 'Patatine fritte',
                'availability' => 0,
                'diet' => 'Vegano',
                'price' => 4.50
            ],
            [
                'restaurant_id' => 1,
                'name' => 'Amatriciana vegana',
                'availability' => 1,
                'ingredient' => 'Pasta, Basilico, Pecorino vegano',
                'diet' => 'Vegano',
                'price' => 13
            ],


            // 2
            [
                'restaurant_id' => 2,
                'name' => 'Supplì',
                'availability' => 0,
                'ingredient' => 'Pomodoro, Basilico, Riso',
                'price' => 4
            ],
            [
                'restaurant_id' => 2,
                'name' => 'Patatine fritte',
                'availability' => 1,
                'diet' => 'Vegano',
                'price' => 4.50
            ],
            [
                'restaurant_id' => 2,
                'name' => 'Amatriciana vegana',
                'availability' => 1,
                'ingredient' => 'Pasta, Basilico, Pecorino vegano',
                'diet' => 'Vegano',
                'price' => 13
            ],

            // 3
            [
                'restaurant_id' => 3,
                'name' => 'Supplì',
                'availability' => 1,
                'ingredient' => 'Pomodoro, Basilico, Riso',
                'price' => 4
            ],
            [
                'restaurant_id' => 3,
                'name' => 'Patatine fritte',
                'availability' => 1,
                'diet' => 'Vegano',
                'price' => 4.50
            ],
            [
                'restaurant_id' => 3,
                'name' => 'Amatriciana vegana',
                'availability' => 1,
                'ingredient' => 'Pasta, Basilico, Pecorino vegano',
                'diet' => 'Vegano',
                'price' => 13
            ],

            // 4
            [
                'restaurant_id' => 4,
                'name' => 'Supplì',
                'availability' => 1,
                'ingredient' => 'Pomodoro, Basilico, Riso',
                'price' => 4
            ],
            [
                'restaurant_id' => 4,
                'name' => 'Patatine fritte',
                'availability' => 1,
                'diet' => 'Vegano',
                'price' => 4.50
            ],
            [
                'restaurant_id' => 4,
                'name' => 'Amatriciana vegana',
                'availability' => 1,
                'ingredient' => 'Pasta, Basilico, Pecorino vegano',
                'diet' => 'Vegano',
                'price' => 13
            ],


        ];

        foreach ($dishes as $dish) {

            $new_dish = new Dish();
            $new_dish->image = $faker->imageUrl(null, 350, 350);
            $new_dish->slug = Str::slug($dish['name']);
            $new_dish->fill($dish);
            $new_dish->save();
        }
    }
}
