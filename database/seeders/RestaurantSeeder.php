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
                'categories' => [1],
                'name' => 'Rifugio Romano',
                'address' => 'Via Volturno 39/41',
            ],
            [
                'categories' => [1],
                'name' => 'Pasta Urbana',
                'address' => 'Via Urbana, 126',
            ],
            [
                'categories' => [1],
                'name' => 'Foodie GreenLab',
                'address' => 'Viale dei Quattro Venti, 150/c',
            ],
            [
                'categories' => [1],
                'name' => 'Tonnarello',
                'address' => 'Via del Governo Vecchio, 86',
            ],
            [
                'categories' => [1],
                'name' => 'Gelateria Bartocci',
                'address' => 'Via Alessandria, 145',
            ],
            [
                'categories' => [1],
                'name' => 'Nonna Agrippina',
                'address' => 'Vicolo del Cinque, 15',
            ],
            [
                'categories' => [1],
                'name' => 'Gelateria Giolitti',
                'address' => 'Via degli Uffici del Vicario, 40',
            ],
            [
                'categories' => [1],
                'name' => 'Il Pellicano',
                'address' => 'Via Ugo De Carolis, 26',
            ],
            [
                'categories' => [1],
                'name' => 'Tavola Rotonda',
                'address' => 'Via Pippo De Ciccio, 116',
            ],

            //Ristoranti Giapponesi e Cinesi
            [
                'categories' => [2, 3],
                'name' => 'Chinese Express',
                'address' => 'Viale Regina Margherita, 242'
            ],
            [
                'categories' => [2, 3],
                'name' => 'Your Sushi',
                'address' => 'Via dei Magazzini Generali, 2C'
            ],
            [
                'categories' => [2],
                'name' => 'Panda Market',
                'address' => 'Via della Meloria, 13'
            ],
            [
                'categories' => [2, 3],
                'name' => 'Ciao Zì',
                'address' => 'Via di Santa Maria Ausiliatrice, 16'
            ],
            [
                'categories' => [3],
                'name' => 'Zen Sushi',
                'address' => 'Via degli scipioni, 243'
            ],
            [
                'categories' => [2, 3],
                'name' => 'Zenzero Fleming',
                'address' => 'Via Flaminia L, 573'
            ],
            [
                'categories' => [2, 3],
                'name' => 'New Town',
                'address' => 'Via della Meloria, 15'
            ],
            [
                'categories' => [2, 3],
                'name' => 'Crudo Pokè',
                'address' => 'Via Salaria, 17'
            ],
            [
                'categories' => [2, 3],
                'name' => 'Temakinho',
                'address' => 'Via dei Serpenti, 16'
            ],
            [
                'categories' => [2, 3],
                'name' => 'Ravioleria Baozi',
                'address' => 'Via Giovan Battista Gandino, 44'
            ],

            // Ristoranti Indiani
            [
                'categories' => [4],
                'name' => 'Saravanaa Bhavan',
                'address' => 'Via Volturno, 1'
            ],
            [
                'categories' => [4],
                'name' => 'Himalaya\'s Kashmir',
                'address' => 'Via Principe Amedeo 325'
            ],
            [
                'categories' => [4],
                'name' => 'Tiger Tandoori',
                'address' => 'Via l\'Aquila, 50'
            ],
            [
                'categories' => [4],
                'name' => 'New Delhi',
                'address' => 'Via Milazzo, 25/25a'
            ],
            [
                'categories' => [4],
                'name' => 'Samoseria',
                'address' => 'Via dei Prati dei Papa, 16'
            ],

            // Ristoranti Messicani
            [
                'categories' => [5],
                'name' => 'Billy Tacos',
                'address' => 'Piazza Ippolito Nievo, 33'
            ],
            [
                'categories' => [5],
                'name' => 'Taco Libre',
                'address' => 'Via Tacito, 14'
            ],
            [
                'categories' => [5],
                'name' => 'The Mexican',
                'address' => 'Via Cappadocia 26, Roma'
            ],
            [
                'categories' => [5],
                'name' => 'Casa Quesadillas',
                'address' => 'Via Carlo Sereni, 14'
            ],
            [
                'categories' => [5],
                'name' => 'Tacos King',
                'address' => 'Via degli Equi, 56'
            ],

            // Ristoranti Siriani
            [
                'categories' => [6],
                'name' => 'Shawarma Express',
                'address' => 'Vicolo del Gallo, 11'
            ],
            [
                'categories' => [6],
                'name' => 'Damas Kebab',
                'address' => 'Viale Guglielmo Marconi, 415'
            ],

            // Ristoranti Africani
            [
                'categories' => [7],
                'name' => 'Blackalicious Afrofood',
                'address' => 'Via Giovanni De Calvi, box 19'
            ],
            [
                'categories' => [7],
                'name' => 'Afrik Cavour',
                'address' => 'Via Cavour, 254'
            ],

            // Ristoranti Thailandesi
            [
                'categories' => [8],
                'name' => 'Isola Puket',
                'address' => 'Via di Villa Chigi, 91'
            ],
            [
                'categories' => [8],
                'name' => 'Bussarakham',
                'address' => 'Via Emanuele Filiberto, 251'
            ],
            [
                'categories' => [8],
                'name' => 'Bin Hai',
                'address' => 'Via la Spezia 86'
            ],
            [
                'categories' => [8],
                'name' => 'Siam Cuisine',
                'address' => 'Via Toscana, 34'
            ],
            [
                'categories' => [8],
                'name' => 'Thai Inn',
                'address' => 'Via Brittania, 5'
            ],

            // Ristoranti Brasiliani
            [
                'categories' => [9],
                'name' => 'Brazilian Food',
                'address' => 'Via Tuscolana, 231/A'
            ],
            [
                'categories' => [9],
                'name' => 'Manioka',
                'address' => 'Viale Aventino, 40'
            ],

            // Ristoranti Turchi
            [
                'categories' => [10],
                'name' => 'Turkish Kebap',
                'address' => 'Via Cipro, 79'
            ],
            [
                'categories' => [10],
                'name' => 'Furious Kebab',
                'address' => 'Via di Acqua Bullicante, 43'
            ],
        ];

        // $restaurant_categories = [
        //     // Ristoranti Italiani
        //     [
        //         'restaurant' => 'Rifugio Romano',
        //         'categories' => [1],
        //     ],
        //     [
        //         'restaurant' => 'Pasta Urbana',
        //         'categories' => [1],
        //     ],
        //     [
        //         'restaurant' => 'Foodie GreenLab',
        //         'categories' => [1],
        //     ],
        //     [
        //         'restaurant' => 'Tonnarello',
        //         'categories' => [1],
        //     ],
        //     [
        //         'restaurant' => 'Gelateria Bartocci',
        //         'categories' => [1],
        //     ],
        //     [
        //         'restaurant' => 'Nonna Agrippina',
        //         'categories' => [1],
        //     ],
        //     [
        //         'restaurant' => 'Gelateria Giolitti',
        //         'categories' => [1],
        //     ],
        //     [
        //         'restaurant' => 'Il Pellicano',
        //         'categories' => [1],
        //     ],
        //     [
        //         'restaurant' => 'Tavola Rotonda',
        //         'categories' => [1],
        //     ],

        //     //Ristoranti Giapponesi e Cinesi
        //     [
        //         'restaurant' => 'Chinese Express',
        //         'categories' => [2, 3],
        //     ],
        //     [
        //         'restaurant' => 'Your Sushi',
        //         'categories' => [2, 3],
        //     ],
        //     [
        //         'restaurant' => 'Panda Market',
        //         'categories' => [2],
        //     ],
        //     [
        //         'restaurant' => 'Ciao Zì',
        //         'categories' => [2, 3],
        //     ],
        //     [
        //         'restaurant' => 'Zen Sushi',
        //         'categories' => [3],
        //     ],
        //     [
        //         'restaurant' => 'Zenzero Fleming',
        //         'categories' => [2, 3],
        //     ],
        //     [
        //         'restaurant' => 'New Town',
        //         'categories' => [2, 3],
        //     ],
        //     [
        //         'restaurant' => 'Crudo Pokè',
        //         'categories' => [2, 3],
        //     ],
        //     [
        //         'restaurant' => 'Temakinho',
        //         'categories' => [2,],
        //     ],
        //     [
        //         'restaurant' => 'Ravioleria Baozi',
        //         'categories' => [2, 3],
        //     ],

        //     // Ristoranti Indiani
        //     [
        //         'restaurant' => 'Saravanaa Bhavan',
        //         'categories' => [4],
        //     ],
        //     [
        //         'restaurant' => 'Himalaya\'s Kashmir',
        //         'categories' => [4],
        //     ],
        //     [
        //         'restaurant' => 'Tiger Tandoori',
        //         'categories' => [4],
        //     ],
        //     [
        //         'restaurant' => 'New Delhi',
        //         'categories' => [4],
        //     ],
        //     [
        //         'restaurant' => 'Samoseria',
        //         'categories' => [4],
        //     ],

        //     // Ristoranti Messicani
        //     [
        //         'restaurant' => 'Billy Tacos',
        //         'categories' => [5],
        //     ],
        //     [
        //         'restaurant' => 'Taco Libre',
        //         'categories' => [5],
        //     ],
        //     [
        //         'restaurant' => 'The Mexican',
        //         'categories' => [5],
        //     ],
        //     [
        //         'restaurant' => 'Casa Quesadillas',
        //         'categories' => [5],
        //     ],
        //     [
        //         'restaurant' => 'Tacos King',
        //         'categories' => [5],
        //     ],

        //     // Ristoranti Siriani
        //     [
        //         'restaurant' => 'Shawarma Express',
        //         'categories' => [6],
        //     ],
        //     [
        //         'restaurant' => 'Damas Kebab',
        //         'categories' => [6],
        //     ],

        //     // Ristoranti Africani
        //     [
        //         'restaurant' => 'Blackalicious Afrofood',
        //         'categories' => [7],
        //     ],
        //     [
        //         'restaurant' => 'Afrik Cavour',
        //         'categories' => [7],
        //     ],

        //     // Ristoranti Thailandesi
        //     [
        //         'restaurant' => 'Isola Puket',
        //         'categories' => [8],
        //     ],
        //     [
        //         'restaurant' => 'Bussarakham',
        //         'categories' => [8],
        //     ],
        //     [
        //         'restaurant' => 'Bin Hai',
        //         'categories' => [8],
        //     ],
        //     [
        //         'restaurant' => 'Siam Cuisine',
        //         'categories' => [8],
        //     ],
        //     [
        //         'restaurant' => 'Thai Inn',
        //         'categories' => [8],
        //     ],

        //     // Ristoranti Brasiliani
        //     [
        //         'restaurant' => 'Brazilian Food',
        //         'categories' => [9],
        //     ],
        //     [
        //         'restaurant' => 'Manioka',
        //         'categories' => [9],
        //     ],

        //     // Ristoranti Turchi
        //     [
        //         'restaurant' => 'Turkish Kebap',
        //         'categories' => [10],
        //     ],
        //     [
        //         'restaurant' => 'Furious Kebab',
        //         'categories' => [10],
        //     ],
        // ];


        foreach ($restaurants as $key => $restaurant) {

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
            $new_restaurant->user_id = $key + 1;
            $new_restaurant->image = $faker->imageUrl(null, 350, 350);
            $new_restaurant->vat = $new_vat;
            $new_restaurant->phone =  $new_phone;
            $new_restaurant->cap = '00187';
            $new_restaurant->city = 'Roma';
            $new_restaurant->email = $new_mail . '@libero.it';
            $new_restaurant->slug = Str::slug($restaurant['name']);
            $new_restaurant->name = $restaurant['name'];
            $new_restaurant->address = $restaurant['address'];



            $new_restaurant->save();
            $new_restaurant->categories()->attach($restaurant['categories']);
        }
    }
}
