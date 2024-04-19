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
        //# Rifugio Romano

        // Piatti Italiani
        $dishes = [
            // Antipasti
            [
                'restaurant_id' => 1,
                'name' => 'Supplì',
                'availability' => 1,
                'ingredient' => 'Riso, pomodoro, mozzarella',
                'diet' => null,
                'price' => 4
            ],
            [
                'restaurant_id' => 1,
                'name' => 'Patatine fritte',
                'availability' => 1,
                'ingredient' => null,
                'diet' => 'Vegano',
                'price' => 4.50
            ],

            // Primi 
            [
                'restaurant_id' => 1,
                'name' => 'Amatriciana vegana',
                'availability' => 1,
                'ingredient' => 'Paccheri freschi, sugo all\'amatriciana, guanciale vegan, pecorino vegano leggermente piccante',
                'diet' => 'Vegano',
                'price' => 13
            ],
            [
                'restaurant_id' => 1,
                'name' => 'Risotto trionfo di asparagi',
                'availability' => 1,
                'ingredient' => 'Risotto agli asparagi, limone, burrata di anacardi',
                'diet' => 'Vegano',
                'price' => 14
            ],

            // Secondi
            [
                'restaurant_id' => 1,
                'name' => 'Pollo alla romana veg',
                'availability' => 1,
                'ingredient' => 'Pollo vegetale, pomodoro, olive, peperoni, patate arrosto',
                'diet' => 'Vegano',
                'price' => 15
            ],
            [
                'restaurant_id' => 1,
                'name' => 'Grigliata Beyond Meat',
                'availability' => 1,
                'ingredient' => 'Burger Beyond Meat, salsiccia Beyond Meat, pollo veg Planted, patate arrosto, maionese',
                'diet' => 'Vegano',
                'price' => 22
            ],
            // Dolci
            [
                'restaurant_id' => 1,
                'name' => 'Tiramisu vegan',
                'availability' => 1,
                'ingredient' => 'caffè, alcool, glutine',
                'diet' => 'Vegano',
                'price' => 6
            ],
            [
                'restaurant_id' => 1,
                'name' => 'Tozzetti artigianali',
                'availability' => 1,
                'ingredient' => 'nocciole, cioccolato',
                'diet' => 'Vegano',
                'price' => 4
            ],



            //# Pasta Urbana

            // Antipasti

            // ---------------- //

            // Primi 
            [
                'restaurant_id' => 2,
                'name' => 'Spaghetti con pomodoro e basilico',
                'availability' => 1,
                'ingredient' => 'Spaghetti, sugo di pomodoro, basilico',
                'diet' => 'Vegano',
                'price' => 13
            ],
            [
                'restaurant_id' => 2,
                'name' => 'Spaghetti alla carbonara',
                'availability' => 1,
                'ingredient' => 'Spaghetti, uova, pecorino, guanciale',
                'diet' => null,
                'price' => 14
            ],

            // Secondi
            [
                'restaurant_id' => 2,
                'name' => 'Saltimbocca alla romana con patate',
                'availability' => 1,
                'ingredient' => 'Fettine di vitello, prosciutto crudo, farina, salvia, patate arrosto,',
                'diet' => null,
                'price' => 15
            ],
            [
                'restaurant_id' => 2,
                'name' => 'Polpette al pomodoro con patate',
                'availability' => 1,
                'ingredient' => 'carne di vitello, carne di maiale, parmigiano, passata di pomodoro, patate arrosto',
                'diet' => null,
                'price' => 22
            ],
            // Dolci
            [
                'restaurant_id' => 2,
                'name' => 'Tiramisu',
                'availability' => 1,
                'ingredient' => 'caffè, mascarpone, alcool, polvere di cioccolato amaro',
                'diet' => null,
                'price' => 6
            ],
            [
                'restaurant_id' => 2,
                'name' => 'Cheesecake al pistacchio',
                'availability' => 1,
                'ingredient' => 'biscotti secchi, burro, panna, mascarpone, crema di pistacchio, farina di pistacchio',
                'diet' => null,
                'price' => 4
            ],

            //# Foodie GreenLab

            // Antipasti

            // ---------------- //

            // Primi 
            [
                'restaurant_id' => 3,
                'name' => 'Cous Cous Estivo dell\'orto',
                'availability' => 1,
                'ingredient' => 'Cous cous, carote, zucchine, melanzane e peperoni',
                'diet' => 'Vegano',
                'price' => 7.90
            ],
            [
                'restaurant_id' => 3,
                'name' => 'Riso Basmati non condito - 250gr',
                'availability' => 1,
                'ingredient' => null,
                'diet' => 'Vegano',
                'price' => 9.90
            ],

            // Secondi
            [
                'restaurant_id' => 3,
                'name' => 'Insalata di lenticchie - 250gr',
                'availability' => 1,
                'ingredient' => null,
                'diet' => 'Vegano',
                'price' => 7.50
            ],
            [
                'restaurant_id' => 3,
                'name' => 'Seitan in salsa thay 200gr',
                'availability' => 1,
                'ingredient' => 'Salsa di cocco, anacardi e curry',
                'diet' => null,
                'price' => 7.50
            ],
            // Dolci
            [
                'restaurant_id' => 3,
                'name' => 'Flapjack - 2 barrette energetiche',
                'availability' => 1,
                'ingredient' => 'barretta di cocco, cioccolato, datteri',
                'diet' => 'Vegano',
                'price' => 5.50
            ],
            [
                'restaurant_id' => 3,
                'name' => 'Muffin al cioccolato',
                'availability' => 1,
                'ingredient' => null,
                'diet' => null,
                'price' => 4
            ],

            //# Tonnarello

            // Antipasti

            [
                'restaurant_id' => 4,
                'name' => 'Cestino di suppli mignon - 8 pezzi',
                'availability' => 1,
                'ingredient' => 'All\'amatriciana, al ragù, cacio pepe e crocchetta di patate',
                'diet' => null,
                'price' => 19
            ],
            [
                'restaurant_id' => 4,
                'name' => 'Carciofo alla giudia',
                'availability' => 1,
                'ingredient' => null,
                'diet' => 'Vegano',
                'price' => 8.50
            ],

            // Primi 
            [
                'restaurant_id' => 4,
                'name' => 'Tonnarello carbonara',
                'availability' => 1,
                'ingredient' => null,
                'diet' => null,
                'price' => 12
            ],
            [
                'restaurant_id' => 4,
                'name' => 'Tonnarello all\'amatriciana',
                'availability' => 1,
                'ingredient' => null,
                'diet' => null,
                'price' => 12
            ],

            // Secondi
            [
                'restaurant_id' => 4,
                'name' => 'Abbacchio al forno',
                'availability' => 1,
                'ingredient' => null,
                'diet' => null,
                'price' => 22
            ],
            [
                'restaurant_id' => 4,
                'name' => 'Saltimbocca alla romana',
                'availability' => 1,
                'ingredient' => null,
                'diet' => null,
                'price' => 18
            ],
            // Dolci
            [
                'restaurant_id' => 4,
                'name' => 'Panna cotta con le fragole',
                'availability' => 1,
                'ingredient' => null,
                'diet' => null,
                'price' => 6
            ],
            [
                'restaurant_id' => 4,
                'name' => 'Salame di cioccolato',
                'availability' => 1,
                'ingredient' => null,
                'diet' => null,
                'price' => 6.50
            ],

            //# Gelateria Bartocci

            // Gelati
            [
                'restaurant_id' => 5,
                'name' => 'Vaschetta di gelato 350gr',
                'availability' => 1,
                'ingredient' => null,
                'diet' => null,
                'price' => 12
            ],
            [
                'restaurant_id' => 5,
                'name' => 'Vaschetta di gelato 500gr',
                'availability' => 1,
                'ingredient' => null,
                'diet' => null,
                'price' => 15
            ],
            [
                'restaurant_id' => 5,
                'name' => 'Vaschetta di gelato 750gr',
                'availability' => 1,
                'ingredient' => null,
                'diet' => null,
                'price' => 22
            ],
            [
                'restaurant_id' => 5,
                'name' => 'Vaschetta di gelato 1kg',
                'availability' => 1,
                'ingredient' => null,
                'diet' => null,
                'price' => 29
            ],

            //# Nonna Agrippina

            // Antipasti

            [
                'restaurant_id' => 6,
                'name' => 'Cicoria ripassata',
                'availability' => 1,
                'ingredient' => 'Cicoria, aglio, olio, peperoncino',
                'diet' => 'Vegano',
                'price' => 5
            ],
            [
                'restaurant_id' => 6,
                'name' => 'Patate al forno',
                'availability' => 1,
                'ingredient' => 'Patate, sale, olio, rosmarino',
                'diet' => 'Vegano',
                'price' => 4
            ],

            // Primi 
            [
                'restaurant_id' => 6,
                'name' => 'Bucatini all\'amatriciana',
                'availability' => 1,
                'ingredient' => 'Bucatini, guanciale, pomodoro, pecorino romano',
                'diet' => null,
                'price' => 5
            ],
            [
                'restaurant_id' => 6,
                'name' => 'Lasagna della domenica',
                'availability' => 1,
                'ingredient' => 'Cipolla rossa, riduzione di vino rosso, caponata di verdure, rucola, grana padano',
                'diet' => 'Vegano',
                'price' => 19
            ],

            // Secondi
            [
                'restaurant_id' => 6,
                'name' => 'Insalata di lenticchie - 250gr',
                'availability' => 1,
                'ingredient' => null,
                'diet' => 'Vegano',
                'price' => 7.50
            ],
            [
                'restaurant_id' => 6,
                'name' => 'Seitan in salsa thay 200gr',
                'availability' => 1,
                'ingredient' => 'Salsa di cocco, anacardi e curry',
                'diet' => null,
                'price' => 7.50
            ],
            // Dolci
            [
                'restaurant_id' => 6,
                'name' => 'Flapjack - 2 barrette energetiche',
                'availability' => 1,
                'ingredient' => 'barretta di cocco, cioccolato, datteri',
                'diet' => 'Vegano',
                'price' => 5.50
            ],
            [
                'restaurant_id' => 6,
                'name' => 'Muffin al cioccolato',
                'availability' => 1,
                'ingredient' => null,
                'diet' => null,
                'price' => 5
            ],

            //# Gelateria Giolitti

            // Gelati
            [
                'restaurant_id' => 7,
                'name' => 'Vaschetta di gelato 350gr',
                'availability' => 1,
                'ingredient' => null,
                'diet' => null,
                'price' => 12
            ],
            [
                'restaurant_id' => 7,
                'name' => 'Vaschetta di gelato 500gr',
                'availability' => 1,
                'ingredient' => null,
                'diet' => null,
                'price' => 15
            ],
            [
                'restaurant_id' => 7,
                'name' => 'Vaschetta di gelato 750gr',
                'availability' => 1,
                'ingredient' => null,
                'diet' => null,
                'price' => 22
            ],
            [
                'restaurant_id' => 7,
                'name' => 'Vaschetta di gelato 1kg',
                'availability' => 1,
                'ingredient' => null,
                'diet' => null,
                'price' => 29
            ],

            //# Il Pellicano

            // Antipasti
            [
                'restaurant_id' => 8,
                'name' => 'Supplì al telefono',
                'availability' => 1,
                'ingredient' => 'Riso, mozzarella, ragù di carne, pangrattato',
                'diet' => null,
                'price' => 6.50
            ],
            [
                'restaurant_id' => 8,
                'name' => 'Carciofi alla romana',
                'availability' => 1,
                'ingredient' => 'Carciofi, menta, prezzemolo, aglio, olio',
                'diet' => 'Vegetariano',
                'price' => 8
            ],

            // Primi 
            [
                'restaurant_id' => 8,
                'name' => 'Pasta alla carbonara',
                'availability' => 1,
                'ingredient' => 'Spaghetti, guanciale, uova, pecorino romano, pepe',
                'diet' => null,
                'price' => 12
            ],
            [
                'restaurant_id' => 8,
                'name' => 'Cacio e pepe',
                'availability' => 1,
                'ingredient' => 'Spaghetti, pecorino romano, pepe',
                'diet' => 'Vegetariano',
                'price' => 10
            ],

            // Secondi
            [
                'restaurant_id' => 8,
                'name' => 'Saltimbocca alla romana',
                'availability' => 1,
                'ingredient' => 'Fettine di vitello, prosciutto crudo, salvia',
                'diet' => null,
                'price' => 16.50
            ],
            [
                'restaurant_id' => 8,
                'name' => 'Trippa alla romana',
                'availability' => 1,
                'ingredient' => 'Trippa, pomodoro, menta, pecorino romano',
                'diet' => null,
                'price' => 14
            ],

            // Dolci
            [
                'restaurant_id' => 8,
                'name' => 'Tiramisù',
                'availability' => 1,
                'ingredient' => 'Savoiardi, mascarpone, caffè, cacao',
                'diet' => null,
                'price' => 7.50
            ],
            [
                'restaurant_id' => 8,
                'name' => 'Maritozzo con la panna',
                'availability' => 1,
                'ingredient' => 'Maritozzo, panna',
                'diet' => null,
                'price' => 6
            ],

            //# Tavola Rotonda

            // Antipasti
            [
                'restaurant_id' => 9,
                'name' => 'Bruschetta alla Tavola Rotonda',
                'availability' => 1,
                'ingredient' => 'Pane casareccio, pomodori freschi, basilico, aglio, olio extra vergine di oliva',
                'diet' => 'Vegetariano',
                'price' => 6.50
            ],
            [
                'restaurant_id' => 9,
                'name' => 'Fiori di zucca fritti',
                'availability' => 1,
                'ingredient' => 'Fiori di zucca, farina, acqua, sale',
                'diet' => 'Vegetariano',
                'price' => 9
            ],

            // Primi 
            [
                'restaurant_id' => 9,
                'name' => 'Pasta alla Ginevra',
                'availability' => 1,
                'ingredient' => 'Penne, pesto alla genovese, patate, fagiolini, pecorino romano',
                'diet' => 'Vegetariano',
                'price' => 11
            ],
            [
                'restaurant_id' => 9,
                'name' => 'Risotto ai funghi porcini',
                'availability' => 1,
                'ingredient' => 'Riso carnaroli, funghi porcini, cipolla, brodo vegetale, burro, parmigiano',
                'diet' => null,
                'price' => 14
            ],

            // Secondi
            [
                'restaurant_id' => 9,
                'name' => 'Saltimbocca alla Tavola Rotonda',
                'availability' => 1,
                'ingredient' => 'Fettine di vitello, prosciutto crudo, salvia, vino bianco',
                'diet' => null,
                'price' => 18.50
            ],
            [
                'restaurant_id' => 9,
                'name' => 'Filetto di branzino al cartoccio',
                'availability' => 1,
                'ingredient' => 'Branzino, pomodorini, olive nere, capperi, prezzemolo, limone, olio extra vergine di oliva',
                'diet' => null,
                'price' => 20
            ],

            // Dolci
            [
                'restaurant_id' => 9,
                'name' => 'Torta della Tavola Rotonda',
                'availability' => 1,
                'ingredient' => 'Pan di spagna, crema pasticcera, frutta fresca',
                'diet' => null,
                'price' => 8.50
            ],
            [
                'restaurant_id' => 9,
                'name' => 'Millefoglie alle fragole',
                'availability' => 1,
                'ingredient' => 'Pasta sfoglia, crema pasticcera, fragole, zucchero a velo',
                'diet' => null,
                'price' => 7
            ]


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
