<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Restaurant;
use Illuminate\Support\Str;
use Faker\Generator;


class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Generator $faker): void
    {
        $restaurants = [

            // Ristoranti Italiani
            [
                'name' => 'Rifugio Romano',
                'address' => 'Via Volturno 39/41',
            ],
            [
                'name' => 'Pasta Urbana',
                'address' => 'Via Urbana, 126',
            ],
            [
                'name' => 'Foodie GreenLab',
                'address' => 'Viale dei Quattro Venti, 150/c',
            ],
            [
                'name' => 'Trapizzino',
                'address' => 'Via Giovanni Branca, 88',
            ],
            [
                'name' => 'Bistrot NaturaSì',
                'address' => 'Piazza Farnese, 99',
            ],
            [
                'name' => 'Gelateria Bartocci',
                'address' => 'Via Alessandria, 145',
            ],
            [
                'name' => 'Nonna Agrippina',
                'address' => 'Vicolo del Cinque, 15',
            ],
            [
                'name' => 'Tonnarello',
                'address' => 'Via del Governo Vecchio, 86',
            ],
            [
                'name' => 'Gelateria Giolitti',
                'address' => 'Via degli Uffici del Vicario, 40',
            ],
            [
                'name' => 'Il Pellicano',
                'address' => 'Via Ugo De Carolis, 26',
            ],
            [
                'name' => 'Marco Lancellotti',
                'address' => 'Via Pippo De Ciccio, 116',
            ],

            // Ristoranti Giapponesi e Cinesi
            [
                'name' => 'Chinese Express',
                'address' => 'Viale Regina Margherita, 242'
            ],
            [
                'name' => 'Your Sushi',
                'address' => 'Via dei Magazzini Generali, 2C'
            ],
            [
                'name' => 'Panda Market',
                'address' => 'Via della Meloria, 13'
            ],
            [
                'name' => 'Ciao Zì',
                'address' => 'Via di Santa Maria Ausiliatrice, 16'
            ],
            [
                'name' => 'Zen Sushi',
                'address' => 'Via degli scipioni, 243'
            ],
            [
                'name' => 'Zenzero Fleming',
                'address' => 'Via Flaminia L, 573'
            ],
            [
                'name' => 'New Town',
                'address' => 'Via della Meloria, 15'
            ],
            [
                'name' => 'Crudo Pokè',
                'address' => 'Via Salaria, 17'
            ],
            [
                'name' => 'Temakinho',
                'address' => 'Via dei Serpenti, 16'
            ],
            [
                'name' => 'Ravioleria Baozi',
                'address' => 'Via Giovan Battista Gandino, 44'
            ],

            // Ristoranti
        ];


        foreach ($restaurants as $restaurant) {

            // Nuovo numero telefonico
            $phone_number = $faker->randomNumber(9, true);
            $new_phone = '+39 3' . $phone_number;

            // Nuova partitva IVA
            $random_number = $faker->randomNumber(2, true);
            $vat_number = $faker->randomNumber(9, true);
            $new_vat =  'IT' . $random_number . $vat_number;

            // Uso la funzione lower per rendere le parole minuscole e lo str_replace per unirle tramite il punto.
            $new_mail = Str::lower(str_replace(' ', '.', $restaurant['name']));

            $new_restaurant = new Restaurant();
            $new_restaurant->image = $faker->imageUrl(null, 350, 350);
            $new_restaurant->vat = $new_vat;
            $new_restaurant->phone =  $new_phone;
            $new_restaurant->cap = '00187';
            $new_restaurant->city = 'Roma';
            $new_restaurant->email = $new_mail . '@libero.it';
            $new_restaurant->slug = Str::slug($restaurant['name']);
            $new_restaurant->fill($restaurant);
            $new_restaurant->save();
        }
    }
}
