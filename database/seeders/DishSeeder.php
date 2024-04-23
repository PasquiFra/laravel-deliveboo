<?php

namespace Database\Seeders;

use App\Models\Dish;
use Faker\Generator;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class DishSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Generator $faker): void
    {

        //~ Piatti Ristoranti Italiani

        //# Rifugio Romano#
        $dishes = [
            // Antipasti
            [
                'restaurant_id' => 1,
                'name' => 'Supplì',
                'availability' => true,
                'ingredient' => 'Riso, pomodoro, mozzarella',
                'diet' => null,
                'course' => 'Antipasto',
                'price' => 4,
                'image' => 'dish_images/suppli.jpg'
            ],
            [
                'restaurant_id' => 1,
                'name' => 'Patatine fritte',
                'availability' => true,
                'ingredient' => null,
                'diet' => 'Vegano',
                'course' => 'Antipasto',
                'price' => 4.50,
                'image' => 'dish_images/patatine-fritte.jpg'
            ],

            // Primi 
            [
                'restaurant_id' => 1,
                'name' => 'Amatriciana vegana',
                'availability' => true,
                'ingredient' => 'Paccheri freschi, sugo all\'amatriciana, guanciale vegan, pecorino vegano leggermente piccante',
                'diet' => 'Vegano',
                'course' => 'Primo',
                'price' => 13,
                'image' => 'dish_images/amatriciana-vegana.jpg'
            ],
            [
                'restaurant_id' => 1,
                'name' => 'Risotto trionfo di asparagi',
                'availability' => true,
                'ingredient' => 'Risotto agli asparagi, limone, burrata di anacardi',
                'diet' => 'Vegano',
                'course' => 'Primo',
                'price' => 14,
                'image' => 'dish_images/risotto-trionfo-di-asparagi.jpg'
            ],

            // Secondi
            [
                'restaurant_id' => 1,
                'name' => 'Pollo alla romana veg',
                'availability' => true,
                'ingredient' => 'Pollo vegetale, pomodoro, olive, peperoni, patate arrosto',
                'diet' => 'Vegano',
                'course' => 'Secondo',
                'price' => 15,
                'image' => 'dish_images/pollo-alla-romana-veg.jpg'
            ],
            [
                'restaurant_id' => 1,
                'name' => 'Grigliata Beyond Meat',
                'availability' => true,
                'ingredient' => 'Burger Beyond Meat, salsiccia Beyond Meat, pollo veg Planted, patate arrosto, maionese',
                'diet' => 'Vegano',
                'course' => 'Secondo',
                'price' => 22,
                'image' => 'dish_images/grigliata-beyond-meat.jpg'
            ],
            // Dolci
            [
                'restaurant_id' => 1,
                'name' => 'Tiramisu vegan',
                'availability' => true,
                'ingredient' => 'caffè, alcool, glutine',
                'diet' => 'Vegano',
                'course' => 'Dessert',
                'price' => 6,
                'image' => 'dish_images/tiramisu-vegan.jpg'
            ],
            [
                'restaurant_id' => 1,
                'name' => 'Tozzetti artigianali',
                'availability' => true,
                'ingredient' => 'nocciole, cioccolato',
                'diet' => 'Vegano',
                'course' => 'Dessert',
                'price' => 4,
                'image' => 'dish_images/tozzetti-artigianali.jpg'
            ],


            //# Pasta Urbana

            // Antipasti

            // ---------------- //

            // Primi 
            [
                'restaurant_id' => 2,
                'name' => 'Spaghetti con pomodoro e basilico',
                'availability' => true,
                'ingredient' => 'Spaghetti, sugo di pomodoro, basilico',
                'diet' => 'Vegano',
                'course' => 'Primo',
                'price' => 13,
                'image' => ''
            ],
            [
                'restaurant_id' => 2,
                'name' => 'Spaghetti alla carbonara',
                'availability' => true,
                'ingredient' => 'Spaghetti, uova, pecorino, guanciale',
                'diet' => null,
                'course' => 'Primo',
                'price' => 14,
                'image' => ''
            ],

            // Secondi
            [
                'restaurant_id' => 2,
                'name' => 'Saltimbocca alla romana con patate',
                'availability' => true,
                'ingredient' => 'Fettine di vitello, prosciutto crudo, farina, salvia, patate arrosto,',
                'diet' => null,
                'course' => 'Secondo',
                'price' => 15,
                'image' => ''
            ],
            [
                'restaurant_id' => 2,
                'name' => 'Polpette al pomodoro con patate',
                'availability' => true,
                'ingredient' => 'carne di vitello, carne di maiale, parmigiano, passata di pomodoro, patate arrosto',
                'diet' => null,
                'course' => 'Secondo',
                'price' => 22,
                'image' => ''
            ],
            // Dolci
            [
                'restaurant_id' => 2,
                'name' => 'Tiramisu',
                'availability' => true,
                'ingredient' => 'caffè, mascarpone, alcool, polvere di cioccolato amaro',
                'diet' => null,
                'course' => 'Dessert',
                'price' => 6,
                'image' => ''
            ],
            [
                'restaurant_id' => 2,
                'name' => 'Cheesecake al pistacchio',
                'availability' => true,
                'ingredient' => 'biscotti secchi, burro, panna, mascarpone, crema di pistacchio, farina di pistacchio',
                'diet' => null,
                'course' => 'Dessert',
                'price' => 4,
                'image' => ''
            ],

            //# Foodie GreenLab

            // Antipasti

            // ---------------- //

            // Primi 
            [
                'restaurant_id' => 3,
                'name' => 'Cous Cous Estivo dell\'orto',
                'availability' => true,
                'ingredient' => 'Cous cous, carote, zucchine, melanzane e peperoni',
                'diet' => 'Vegano',
                'course' => 'Primo',
                'price' => 7.90,
                'image' => ''
            ],
            [
                'restaurant_id' => 3,
                'name' => 'Riso Basmati non condito - 250gr',
                'availability' => true,
                'ingredient' => null,
                'diet' => 'Vegano',
                'course' => 'Primo',
                'price' => 9.90,
                'image' => ''
            ],

            // Secondi
            [
                'restaurant_id' => 3,
                'name' => 'Insalata di lenticchie - 250gr',
                'availability' => true,
                'ingredient' => null,
                'diet' => 'Vegano',
                'course' => 'Secondo',
                'price' => 7.50,
                'image' => ''
            ],
            [
                'restaurant_id' => 3,
                'name' => 'Seitan in salsa thay 200gr',
                'availability' => true,
                'ingredient' => 'Salsa di cocco, anacardi e curry',
                'diet' => null,
                'course' => 'Secondo',
                'price' => 7.50,
                'image' => ''
            ],
            // Dolci
            [
                'restaurant_id' => 3,
                'name' => 'Flapjack - 2 barrette energetiche',
                'availability' => true,
                'ingredient' => 'barretta di cocco, cioccolato, datteri',
                'diet' => 'Vegano',
                'course' => 'Dessert',
                'price' => 5.50,
                'image' => ''
            ],
            [
                'restaurant_id' => 3,
                'name' => 'Muffin al cioccolato',
                'availability' => true,
                'ingredient' => null,
                'diet' => null,
                'course' => 'Dessert',
                'price' => 4,
                'image' => ''
            ],

            //# Tonnarello

            // Antipasti

            [
                'restaurant_id' => 4,
                'name' => 'Cestino di suppli mignon - 8 pezzi',
                'availability' => true,
                'ingredient' => 'All\'amatriciana, al ragù, cacio pepe e crocchetta di patate',
                'diet' => null,
                'course' => 'Antipasto',
                'price' => 19,
                'image' => ''
            ],
            [
                'restaurant_id' => 4,
                'name' => 'Carciofo alla giudia',
                'availability' => true,
                'ingredient' => null,
                'diet' => 'Vegano',
                'course' => 'Antipasto',
                'price' => 8.50,
                'image' => ''
            ],

            // Primi 
            [
                'restaurant_id' => 4,
                'name' => 'Tonnarello carbonara',
                'availability' => true,
                'ingredient' => null,
                'diet' => null,
                'course' => 'Primo',
                'price' => 12,
                'image' => ''
            ],
            [
                'restaurant_id' => 4,
                'name' => 'Tonnarello all\'amatriciana',
                'availability' => true,
                'ingredient' => null,
                'diet' => null,
                'course' => 'Primo',
                'price' => 12,
                'image' => ''
            ],

            // Secondi
            [
                'restaurant_id' => 4,
                'name' => 'Abbacchio al forno',
                'availability' => true,
                'ingredient' => null,
                'diet' => null,
                'course' => 'Secondo',
                'price' => 22,
                'image' => ''
            ],
            [
                'restaurant_id' => 4,
                'name' => 'Saltimbocca alla romana',
                'availability' => true,
                'ingredient' => null,
                'diet' => null,
                'course' => 'Secondo',
                'price' => 18,
                'image' => ''
            ],
            // Dolci
            [
                'restaurant_id' => 4,
                'name' => 'Panna cotta con le fragole',
                'availability' => true,
                'ingredient' => null,
                'diet' => null,
                'course' => 'Dessert',
                'price' => 6,
                'image' => ''
            ],
            [
                'restaurant_id' => 4,
                'name' => 'Salame di cioccolato',
                'availability' => true,
                'ingredient' => null,
                'diet' => null,
                'course' => 'Dessert',
                'price' => 6.50,
                'image' => ''
            ],

            //# Gelateria Bartocci

            // Gelati
            [
                'restaurant_id' => 5,
                'name' => 'Vaschetta di gelato 350gr',
                'availability' => true,
                'ingredient' => null,
                'diet' => null,
                'course' => 'Dessert',
                'price' => 12,
                'image' => ''
            ],
            [
                'restaurant_id' => 5,
                'name' => 'Vaschetta di gelato 500gr',
                'availability' => true,
                'ingredient' => null,
                'diet' => null,
                'course' => 'Dessert',
                'price' => 15,
                'image' => ''
            ],
            [
                'restaurant_id' => 5,
                'name' => 'Vaschetta di gelato 750gr',
                'availability' => true,
                'ingredient' => null,
                'diet' => null,
                'course' => 'Dessert',
                'price' => 22,
                'image' => ''
            ],
            [
                'restaurant_id' => 5,
                'name' => 'Vaschetta di gelato 1kg',
                'availability' => true,
                'ingredient' => null,
                'diet' => null,
                'course' => 'Dessert',
                'price' => 29,
                'image' => ''
            ],

            //# Nonna Agrippina

            // Antipasti

            [
                'restaurant_id' => 6,
                'name' => 'Cicoria ripassata',
                'availability' => true,
                'ingredient' => 'Cicoria, aglio, olio, peperoncino',
                'diet' => 'Vegano',
                'course' => 'Antipasto',
                'price' => 5,
                'image' => ''
            ],
            [
                'restaurant_id' => 6,
                'name' => 'Patate al forno',
                'availability' => true,
                'ingredient' => 'Patate, sale, olio, rosmarino',
                'diet' => 'Vegano',
                'course' => 'Antipasto',
                'price' => 4,
                'image' => ''
            ],

            // Primi 
            [
                'restaurant_id' => 6,
                'name' => 'Bucatini all\'amatriciana',
                'availability' => true,
                'ingredient' => 'Bucatini, guanciale, pomodoro, pecorino romano',
                'diet' => null,
                'course' => 'Primo',
                'price' => 5,
                'image' => ''
            ],
            [
                'restaurant_id' => 6,
                'name' => 'Lasagna della domenica',
                'availability' => true,
                'ingredient' => 'Cipolla rossa, riduzione di vino rosso, caponata di verdure, rucola, grana padano',
                'diet' => 'Vegano',
                'course' => 'Primo',
                'price' => 19,
                'image' => ''
            ],

            // Secondi
            [
                'restaurant_id' => 6,
                'name' => 'Insalata di lenticchie - 250gr',
                'availability' => true,
                'ingredient' => null,
                'diet' => 'Vegano',
                'course' => 'Secondo',
                'price' => 7.50,
                'image' => ''
            ],
            [
                'restaurant_id' => 6,
                'name' => 'Seitan in salsa thay 200gr',
                'availability' => true,
                'ingredient' => 'Salsa di cocco, anacardi e curry',
                'diet' => null,
                'course' => 'Secondo',
                'price' => 7.50,
                'image' => ''
            ],
            // Dolci
            [
                'restaurant_id' => 6,
                'name' => 'Flapjack - 2 barrette energetiche',
                'availability' => true,
                'ingredient' => 'barretta di cocco, cioccolato, datteri',
                'diet' => 'Vegano',
                'course' => 'Dessert',
                'price' => 5.50,
                'image' => ''
            ],
            [
                'restaurant_id' => 6,
                'name' => 'Muffin al cioccolato',
                'availability' => true,
                'ingredient' => null,
                'diet' => null,
                'course' => 'Dessert',
                'price' => 5,
                'image' => ''
            ],

            //# Gelateria Giolitti

            // Gelati
            [
                'restaurant_id' => 7,
                'name' => 'Vaschetta di gelato 350gr',
                'availability' => true,
                'ingredient' => null,
                'diet' => null,
                'course' => 'Dessert',
                'price' => 12,
                'image' => ''
            ],
            [
                'restaurant_id' => 7,
                'name' => 'Vaschetta di gelato 500gr',
                'availability' => true,
                'ingredient' => null,
                'diet' => null,
                'course' => 'Dessert',
                'price' => 15,
                'image' => ''
            ],
            [
                'restaurant_id' => 7,
                'name' => 'Vaschetta di gelato 750gr',
                'availability' => true,
                'ingredient' => null,
                'diet' => null,
                'course' => 'Dessert',
                'price' => 22,
                'image' => ''
            ],
            [
                'restaurant_id' => 7,
                'name' => 'Vaschetta di gelato 1kg',
                'availability' => true,
                'ingredient' => null,
                'diet' => null,
                'course' => 'Dessert',
                'price' => 29,
                'image' => ''
            ],

            //# Il Pellicano

            // Antipasti
            [
                'restaurant_id' => 8,
                'name' => 'Supplì al telefono',
                'availability' => true,
                'ingredient' => 'Riso, mozzarella, ragù di carne, pangrattato',
                'diet' => null,
                'course' => 'Antipasto',
                'price' => 6.50,
                'image' => ''
            ],
            [
                'restaurant_id' => 8,
                'name' => 'Carciofi alla romana',
                'availability' => true,
                'ingredient' => 'Carciofi, menta, prezzemolo, aglio, olio',
                'diet' => 'Vegetariano',
                'course' => 'Antipasto',
                'price' => 8,
                'image' => ''
            ],

            // Primi 
            [
                'restaurant_id' => 8,
                'name' => 'Pasta alla carbonara',
                'availability' => true,
                'ingredient' => 'Spaghetti, guanciale, uova, pecorino romano, pepe',
                'diet' => null,
                'course' => 'Primo',
                'price' => 12,
                'image' => ''
            ],
            [
                'restaurant_id' => 8,
                'name' => 'Cacio e pepe',
                'availability' => true,
                'ingredient' => 'Spaghetti, pecorino romano, pepe',
                'diet' => 'Vegetariano',
                'course' => 'Primo',
                'price' => 10,
                'image' => ''
            ],

            // Secondi
            [
                'restaurant_id' => 8,
                'name' => 'Saltimbocca alla romana',
                'availability' => true,
                'ingredient' => 'Fettine di vitello, prosciutto crudo, salvia',
                'diet' => null,
                'course' => 'Secondo',
                'price' => 16.50,
                'image' => ''
            ],
            [
                'restaurant_id' => 8,
                'name' => 'Trippa alla romana',
                'availability' => true,
                'ingredient' => 'Trippa, pomodoro, menta, pecorino romano',
                'diet' => null,
                'course' => 'Secondo',
                'price' => 14,
                'image' => ''
            ],

            // Dolci
            [
                'restaurant_id' => 8,
                'name' => 'Tiramisù',
                'availability' => true,
                'ingredient' => 'Savoiardi, mascarpone, caffè, cacao',
                'diet' => null,
                'course' => 'Dessert',
                'price' => 7.50,
                'image' => ''
            ],
            [
                'restaurant_id' => 8,
                'name' => 'Maritozzo con la panna',
                'availability' => true,
                'ingredient' => 'Maritozzo, panna',
                'diet' => null,
                'course' => 'Dessert',
                'price' => 6,
                'image' => ''
            ],

            //# Tavola Rotonda

            // Antipasti
            [
                'restaurant_id' => 9,
                'name' => 'Bruschetta alla Tavola Rotonda',
                'availability' => true,
                'ingredient' => 'Pane casareccio, pomodori freschi, basilico, aglio, olio extra vergine di oliva',
                'diet' => 'Vegetariano',
                'course' => 'Antipasto',
                'price' => 6.50,
                'image' => ''
            ],
            [
                'restaurant_id' => 9,
                'name' => 'Fiori di zucca fritti',
                'availability' => true,
                'ingredient' => 'Fiori di zucca, farina, acqua, sale',
                'diet' => 'Vegetariano',
                'course' => 'Antipasto',
                'price' => 9,
                'image' => ''
            ],

            // Primi 
            [
                'restaurant_id' => 9,
                'name' => 'Pasta alla Ginevra',
                'availability' => true,
                'ingredient' => 'Penne, pesto alla genovese, patate, fagiolini, pecorino romano',
                'diet' => 'Vegetariano',
                'course' => 'Primo',
                'price' => 11,
                'image' => ''
            ],
            [
                'restaurant_id' => 9,
                'name' => 'Risotto ai funghi porcini',
                'availability' => true,
                'ingredient' => 'Riso carnaroli, funghi porcini, cipolla, brodo vegetale, burro, parmigiano',
                'diet' => null,
                'course' => 'Primo',
                'price' => 14,
                'image' => ''
            ],

            // Secondi
            [
                'restaurant_id' => 9,
                'name' => 'Saltimbocca alla Tavola Rotonda',
                'availability' => true,
                'ingredient' => 'Fettine di vitello, prosciutto crudo, salvia, vino bianco',
                'diet' => null,
                'course' => 'Secondo',
                'price' => 18.50,
                'image' => ''
            ],
            [
                'restaurant_id' => 9,
                'name' => 'Filetto di branzino al cartoccio',
                'availability' => true,
                'ingredient' => 'Branzino, pomodorini, olive nere, capperi, prezzemolo, limone, olio extra vergine di oliva',
                'diet' => null,
                'course' => 'Secondo',
                'price' => 20,
                'image' => ''
            ],

            // Dolci
            [
                'restaurant_id' => 9,
                'name' => 'Torta della Tavola Rotonda',
                'availability' => true,
                'ingredient' => 'Pan di spagna, crema pasticcera, frutta fresca',
                'diet' => null,
                'course' => 'Dessert',
                'price' => 8.50,
                'image' => ''
            ],
            [
                'restaurant_id' => 9,
                'name' => 'Millefoglie alle fragole',
                'availability' => true,
                'ingredient' => 'Pasta sfoglia, crema pasticcera, fragole, zucchero a velo',
                'diet' => null,
                'course' => 'Dessert',
                'price' => 7,
                'image' => ''
            ],

            // Piatti Ristoranti Giapponesi e Cinesi

            //# Chinese Express

            // Antipasti
            [
                'restaurant_id' => 10,
                'name' => 'Ravioli al vapore',
                'availability' => true,
                'ingredient' => 'Pasta di grano, maiale macinato, cavolo cinese, zenzero, salsa di soia',
                'diet' => null,
                'course' => 'Antipasto',
                'price' => 7.50,
                'image' => ''
            ],
            [
                'restaurant_id' => 10,
                'name' => 'Edamame',
                'availability' => true,
                'ingredient' => 'Fagioli di soia, sale',
                'diet' => 'Vegetariano',
                'course' => 'Antipasto',
                'price' => 5.50,
                'image' => ''
            ],
            [
                'restaurant_id' => 10,
                'name' => 'Gyoza',
                'availability' => true,
                'ingredient' => 'Pasta di grano, maiale macinato, cavolo cinese, aglio, zenzero',
                'diet' => null,
                'course' => 'Antipasto',
                'price' => 8,
                'image' => ''
            ],

            // Primi
            [
                'restaurant_id' => 10,
                'name' => 'Noodles saltati con verdure',
                'availability' => true,
                'ingredient' => 'Noodles, verdure miste, salsa di soia',
                'diet' => 'Vegetariano',
                'course' => 'Primo',
                'price' => 9,
                'image' => ''
            ],
            [
                'restaurant_id' => 10,
                'name' => 'Yakisoba',
                'availability' => true,
                'ingredient' => 'Noodles, carne, verdure, salsa yakisoba',
                'diet' => null,
                'course' => 'Primo',
                'price' => 12,
                'image' => ''
            ],

            // Secondi
            [
                'restaurant_id' => 10,
                'name' => 'Anatra all\'arancia',
                'availability' => true,
                'ingredient' => 'Anatra, salsa all\'arancia, verdure miste',
                'diet' => null,
                'course' => 'Secondo',
                'price' => 15,
                'image' => ''
            ],
            [
                'restaurant_id' => 10,
                'name' => 'Manzo in salsa piccante',
                'availability' => true,
                'ingredient' => 'Fettine di manzo, salsa piccante, peperoni, cipolla',
                'diet' => null,
                'course' => 'Secondo',
                'price' => 13,
                'image' => ''
            ],

            // Dolci
            [
                'restaurant_id' => 10,
                'name' => 'Biscotti della fortuna',
                'availability' => true,
                'ingredient' => 'Farina, zucchero, uova',
                'diet' => null,
                'course' => 'Dessert',
                'price' => 4,
                'image' => ''
            ],
            [
                'restaurant_id' => 10,
                'name' => 'Gelato fritto',
                'availability' => true,
                'ingredient' => 'Gelato, pastella, olio',
                'diet' => null,
                'course' => 'Dessert',
                'price' => 6.50,
                'image' => ''
            ],

            //# Your Sushi

            // Antipasti
            [
                'restaurant_id' => 11,
                'name' => 'Ravioli al vapore',
                'availability' => true,
                'ingredient' => 'Pasta di grano, maiale macinato, cavolo cinese, zenzero, salsa di soia',
                'diet' => null,
                'course' => 'Secondo',
                'price' => 7.50,
                'image' => ''
            ],
            [
                'restaurant_id' => 11,
                'name' => 'Gamberi saltati con peperoni',
                'availability' => true,
                'ingredient' => 'Gamberi, peperoni, salsa di soia, aglio',
                'diet' => null,
                'course' => 'Secondo',
                'price' => 9,
                'image' => ''
            ],

            // Primi
            [
                'restaurant_id' => 11,
                'name' => 'Tagliatelle con verdure',
                'availability' => true,
                'ingredient' => 'Tagliatelle, verdure miste, salsa di soia',
                'diet' => 'Vegetariano',
                'course' => 'Secondo',
                'price' => 10,
                'image' => ''
            ],
            [
                'restaurant_id' => 11,
                'name' => 'Riso cantonese',
                'availability' => true,
                'ingredient' => 'Riso, uova, piselli, carote, prosciutto cotto',
                'diet' => null,
                'course' => 'Secondo',
                'price' => 11,
                'image' => ''
            ],
            [
                'restaurant_id' => 11,
                'name' => 'Uramaki California',
                'availability' => true,
                'ingredient' => 'Riso, avocado, surimi, sesamo',
                'diet' => null,
                'course' => 'Secondo',
                'price' => 14,
                'image' => ''
            ],

            // Secondi
            [
                'restaurant_id' => 11,
                'name' => 'Anatra all\'arancia',
                'availability' => true,
                'ingredient' => 'Anatra, salsa all\'arancia, verdure miste',
                'diet' => null,
                'course' => 'Secondo',
                'price' => 15,
                'image' => ''
            ],
            [
                'restaurant_id' => 11,
                'name' => 'Pollo alle mandorle',
                'availability' => true,
                'ingredient' => 'Pollo, mandorle, peperoni, cipolla, salsa di soia',
                'diet' => null,
                'course' => 'Secondo',
                'price' => 13,
                'image' => ''
            ],

            // Dolci
            [
                'restaurant_id' => 11,
                'name' => 'Cheesecake al tè matcha',
                'availability' => true,
                'ingredient' => 'Biscotti digestive, formaggio cremoso, tè matcha, panna',
                'diet' => null,
                'course' => 'Secondo',
                'price' => 6,
                'image' => ''
            ],
            [
                'restaurant_id' => 11,
                'name' => 'Mochi alla fragola',
                'availability' => true,
                'ingredient' => 'Mochi, gelato alla fragola',
                'diet' => null,
                'course' => 'Secondo',
                'price' => 5.50,
                'image' => ''
            ],

            //# Panda Market

            // Antipasti
            [
                'restaurant_id' => 12,
                'name' => 'Tempura di verdure',
                'availability' => true,
                'ingredient' => 'Verdure miste, pastella leggera, salsa ponzu',
                'diet' => 'Vegetariano',
                'course' => 'Secondo',
                'price' => 8,
                'image' => ''
            ],
            [
                'restaurant_id' => 12,
                'name' => 'Involtini primavera',
                'availability' => true,
                'ingredient' => 'Verdure, gamberetti, involucro croccante, salsa agrodolce',
                'diet' => null,
                'course' => 'Secondo',
                'price' => 9,
                'image' => ''
            ],

            // Primi
            [
                'restaurant_id' => 12,
                'name' => 'Udon al pollo',
                'availability' => true,
                'ingredient' => 'Udon, pollo, verdure, brodo di pollo',
                'diet' => null,
                'course' => 'Secondo',
                'price' => 11,
                'image' => ''
            ],
            [
                'restaurant_id' => 12,
                'name' => 'Zuppa di miso',
                'availability' => true,
                'ingredient' => 'Tofu, alghe, miso, cipollotti',
                'diet' => 'Vegetariano',
                'course' => 'Secondo',
                'price' => 10,
                'image' => ''
            ],

            // Secondi
            [
                'restaurant_id' => 12,
                'name' => 'Anatra alla pechinese',
                'availability' => true,
                'ingredient' => 'Anatra, pancetta, salsa alla pechinese, verdure',
                'diet' => null,
                'course' => 'Secondo',
                'price' => 16,
                'image' => ''
            ],
            [
                'restaurant_id' => 12,
                'name' => 'Gamberoni alla griglia',
                'availability' => true,
                'ingredient' => 'Gamberoni, aglio, prezzemolo, olio d\'oliva',
                'diet' => null,
                'course' => 'Secondo',
                'price' => 15,
                'image' => ''
            ],

            // Dolci
            [
                'restaurant_id' => 12,
                'name' => 'Tiramisù al tè verde',
                'availability' => true,
                'ingredient' => 'Biscotti savoiardi, mascarpone, tè verde, cacao',
                'diet' => null,
                'course' => 'Secondo',
                'price' => 7.50,
                'image' => ''
            ],
            [
                'restaurant_id' => 12,
                'name' => 'Gelato al sesamo nero',
                'availability' => true,
                'ingredient' => 'Sesamo nero, latte, zucchero, panna',
                'diet' => null,
                'course' => 'Secondo',
                'price' => 6.50,
                'image' => ''
            ],

            //# Ciao Zì

            // Antipasti
            [
                'restaurant_id' => 13,
                'name' => 'Tempura di verdure',
                'availability' => true,
                'ingredient' => 'Verdure miste, pastella leggera, salsa ponzu',
                'diet' => 'Vegetariano',
                'course' => 'Secondo',
                'price' => 8,
                'image' => ''
            ],
            [
                'restaurant_id' => 13,
                'name' => 'Involtini primavera',
                'availability' => true,
                'ingredient' => 'Verdure, gamberetti, involucro croccante, salsa agrodolce',
                'diet' => null,
                'course' => 'Secondo',
                'price' => 9,
                'image' => ''
            ],

            // Primi
            [
                'restaurant_id' => 13,
                'name' => 'Udon al pollo',
                'availability' => true,
                'ingredient' => 'Udon, pollo, verdure, brodo di pollo',
                'diet' => null,
                'course' => 'Secondo',
                'price' => 11,
                'image' => ''
            ],
            [
                'restaurant_id' => 13,
                'name' => 'Zuppa di miso',
                'availability' => true,
                'ingredient' => 'Tofu, alghe, miso, cipollotti',
                'diet' => 'Vegetariano',
                'course' => 'Secondo',
                'price' => 10,
                'image' => ''
            ],

            // Secondi
            [
                'restaurant_id' => 13,
                'name' => 'Anatra alla pechinese',
                'availability' => true,
                'ingredient' => 'Anatra, pancetta, salsa alla pechinese, verdure',
                'diet' => null,
                'course' => 'Secondo',
                'price' => 16,
                'image' => ''
            ],
            [
                'restaurant_id' => 13,
                'name' => 'Gamberoni alla griglia',
                'availability' => true,
                'ingredient' => 'Gamberoni, aglio, prezzemolo, olio d\'oliva',
                'diet' => null,
                'course' => 'Secondo',
                'price' => 15,
                'image' => ''
            ],

            // Dolci
            [
                'restaurant_id' => 13,
                'name' => 'Tiramisù al tè verde',
                'availability' => true,
                'ingredient' => 'Biscotti savoiardi, mascarpone, tè verde, cacao',
                'diet' => null,
                'course' => 'Secondo',
                'price' => 7.50,
                'image' => ''
            ],
            [
                'restaurant_id' => 13,
                'name' => 'Gelato al sesamo nero',
                'availability' => true,
                'ingredient' => 'Sesamo nero, latte, zucchero, panna',
                'diet' => null,
                'course' => 'Secondo',
                'price' => 6.50,
                'image' => ''
            ],

            //# Zen Sushi

            // Antipasti
            [
                'restaurant_id' => 14,
                'name' => 'Edamame al sesamo',
                'availability' => true,
                'ingredient' => 'Fagioli di soia, sale marino, sesamo tostato',
                'diet' => 'Vegetariano',
                'course' => 'Secondo',
                'price' => 6,
                'image' => ''
            ],
            [
                'restaurant_id' => 14,
                'name' => 'Tartare di tonno',
                'availability' => true,
                'ingredient' => 'Tonno fresco, avocado, cipolla rossa, salsa teriyaki',
                'diet' => null,
                'course' => 'Secondo',
                'price' => 12,
                'image' => ''
            ],

            // Primi
            [
                'restaurant_id' => 14,
                'name' => 'Sashimi misto',
                'availability' => true,
                'ingredient' => 'Pesce fresco assortito, wasabi, salsa di soia',
                'diet' => null,
                'course' => 'Secondo',
                'price' => 18,
                'image' => ''
            ],
            [
                'restaurant_id' => 14,
                'name' => 'Yakisoba con pollo',
                'availability' => true,
                'ingredient' => 'Noodles, pollo, verdure miste, salsa yakisoba',
                'diet' => null,
                'course' => 'Secondo',
                'price' => 14,
                'image' => ''
            ],

            // Secondi
            [
                'restaurant_id' => 14,
                'name' => 'Tempura di gamberi e verdure',
                'availability' => true,
                'ingredient' => 'Gamberi, verdure assortite, pastella leggera, salsa tempura',
                'diet' => null,
                'course' => 'Secondo',
                'price' => 16,
                'image' => ''
            ],
            [
                'restaurant_id' => 14,
                'name' => 'Salmone teriyaki',
                'availability' => true,
                'ingredient' => 'Filetto di salmone, salsa teriyaki, verdure grigliate',
                'diet' => null,
                'course' => 'Secondo',
                'price' => 17,
                'image' => ''
            ],

            // Dolci
            [
                'restaurant_id' => 14,
                'name' => 'Mochi al cioccolato',
                'availability' => true,
                'ingredient' => 'Mochi, gelato al cioccolato',
                'diet' => null,
                'course' => 'Secondo',
                'price' => 7,
                'image' => ''
            ],
            [
                'restaurant_id' => 14,
                'name' => 'Torta al matcha',
                'availability' => true,
                'ingredient' => 'Tè matcha, farina di riso, latte di cocco, zucchero',
                'diet' => null,
                'course' => 'Secondo',
                'price' => 8,
                'image' => ''
            ],

            //# Zenzero Fleming

            // Antipasti
            [
                'restaurant_id' => 15,
                'name' => 'Gyoza al vapore',
                'availability' => true,
                'ingredient' => 'Gyoza di maiale, salsa di soia',
                'diet' => null,
                'course' => 'Secondo',
                'price' => 8,
                'image' => ''
            ],
            [
                'restaurant_id' => 15,
                'name' => 'Tartare di salmone e avocado',
                'availability' => true,
                'ingredient' => 'Salmone fresco, avocado, salsa ponzu',
                'diet' => null,
                'course' => 'Secondo',
                'price' => 13,
                'image' => ''
            ],

            // Primi
            [
                'restaurant_id' => 15,
                'name' => 'Ramen con maiale alla griglia',
                'availability' => true,
                'ingredient' => 'Brodo di pollo, noodles ramen, maiale alla griglia, uova sode',
                'diet' => null,
                'course' => 'Secondo',
                'price' => 15,
                'image' => ''
            ],
            [
                'restaurant_id' => 15,
                'name' => 'Uramaki Dragon Roll',
                'availability' => true,
                'ingredient' => 'Riso, gambero tempura, avocado, salsa unagi, tobiko',
                'diet' => null,
                'course' => 'Secondo',
                'price' => 16,
                'image' => ''
            ],

            // Secondi
            [
                'restaurant_id' => 15,
                'name' => 'Pollo katsu',
                'availability' => true,
                'ingredient' => 'Petto di pollo impanato, salsa katsu, riso bianco, insalata',
                'diet' => null,
                'course' => 'Secondo',
                'price' => 14,
                'image' => ''
            ],
            [
                'restaurant_id' => 15,
                'name' => 'Tonno scottato con salsa teriyaki',
                'availability' => true,
                'ingredient' => 'Tonno fresco, salsa teriyaki, verdure grigliate',
                'diet' => null,
                'course' => 'Secondo',
                'price' => 18,
                'image' => ''
            ],

            // Dolci
            [
                'restaurant_id' => 15,
                'name' => 'Cheesecake al mango',
                'availability' => true,
                'ingredient' => 'Biscotti digestive, formaggio cremoso, purea di mango',
                'diet' => null,
                'course' => 'Secondo',
                'price' => 7,
                'image' => ''
            ],
            [
                'restaurant_id' => 15,
                'name' => 'Gelato al tè verde',
                'availability' => true,
                'ingredient' => 'Tè verde, latte, zucchero, panna',
                'diet' => null,
                'course' => 'Secondo',
                'price' => 6.50,
                'image' => ''
            ],

            //# New Town

            // Antipasti
            [
                'restaurant_id' => 16,
                'name' => 'Tartare di tonno piccante',
                'availability' => true,
                'ingredient' => 'Tonno fresco, peperoncino, cipolla rossa, salsa di sesamo piccante',
                'diet' => null,
                'course' => 'Secondo',
                'price' => 12,
                'image' => ''
            ],
            [
                'restaurant_id' => 16,
                'name' => 'Insalata di alghe wakame',
                'availability' => true,
                'ingredient' => 'Alghe wakame, cetrioli, sesamo, salsa di sesamo',
                'diet' => 'Vegetariano',
                'course' => 'Secondo',
                'price' => 9,
                'image' => ''
            ],

            // Primi
            [
                'restaurant_id' => 16,
                'name' => 'Ramen al curry',
                'availability' => true,
                'ingredient' => 'Brodo di pollo, noodles ramen, pollo al curry, uova sode',
                'diet' => null,
                'course' => 'Secondo',
                'price' => 14,
                'image' => ''
            ],
            [
                'restaurant_id' => 16,
                'name' => 'Udon ai frutti di mare',
                'availability' => true,
                'ingredient' => 'Udon, gamberi, calamari, vongole, verdure, brodo dashi',
                'diet' => null,
                'course' => 'Secondo',
                'price' => 16,
                'image' => ''
            ],

            // Secondi
            [
                'restaurant_id' => 16,
                'name' => 'Pollo teriyaki',
                'availability' => true,
                'ingredient' => 'Petto di pollo, salsa teriyaki, riso bianco, verdure saltate',
                'diet' => null,
                'course' => 'Secondo',
                'price' => 15,
                'image' => ''
            ],
            [
                'restaurant_id' => 16,
                'name' => 'Sushi assortito',
                'availability' => true,
                'ingredient' => 'Nigiri, sashimi, maki assortiti',
                'diet' => null,
                'course' => 'Secondo',
                'price' => 18,
                'image' => ''
            ],

            // Dolci
            [
                'restaurant_id' => 16,
                'name' => 'Mousse al tè verde',
                'availability' => true,
                'ingredient' => 'Gelatina di tè verde, panna montata, zucchero',
                'diet' => null,
                'course' => 'Secondo',
                'price' => 7,
                'image' => ''
            ],
            [
                'restaurant_id' => 16,
                'name' => 'Dorayaki alla nutella',
                'availability' => true,
                'ingredient' => 'Pancake giapponese, crema di nutella',
                'diet' => null,
                'course' => 'Secondo',
                'price' => 6,
                'image' => ''
            ],

            //# Crudo Pokè

            // Pokè Bowls
            [
                'restaurant_id' => 17,
                'name' => 'Pokè di salmone fresco',
                'availability' => true,
                'ingredient' => 'Salmone fresco a cubetti, avocado, edamame, cipolla rossa, salsa di soia',
                'diet' => null,
                'course' => 'Secondo',
                'price' => 14,
                'image' => ''
            ],
            [
                'restaurant_id' => 17,
                'name' => 'Pokè di tonno piccante',
                'availability' => true,
                'ingredient' => 'Tonno fresco piccante a cubetti, mango, avocado, peperoncino, salsa piccante',
                'diet' => null,
                'course' => 'Secondo',
                'price' => 15,
                'image' => ''
            ],

            // Contorni
            [
                'restaurant_id' => 17,
                'name' => 'Edamame saltati',
                'availability' => true,
                'ingredient' => 'Fagioli edamame, aglio, peperoncino, salsa di soia',
                'diet' => 'Vegetariano',
                'course' => 'Secondo',
                'price' => 6,
                'image' => ''
            ],
            [
                'restaurant_id' => 17,
                'name' => 'Insalata di alghe',
                'availability' => true,
                'ingredient' => 'Alghe wakame, sesamo, cetrioli, salsa di sesamo',
                'diet' => 'Vegetariano',
                'course' => 'Secondo',
                'price' => 7,
                'image' => ''
            ],

            //# Temakinho

            // Antipasti
            [
                'restaurant_id' => 18,
                'name' => 'Gyoza al vapore',
                'availability' => true,
                'ingredient' => 'Gyoza di maiale, salsa ponzu',
                'diet' => null,
                'course' => 'Secondo',
                'price' => 8,
                'image' => ''
            ],
            [
                'restaurant_id' => 18,
                'name' => 'Tataki di tonno',
                'availability' => true,
                'ingredient' => 'Tonno fresco, salsa tataki, sesamo',
                'diet' => null,
                'course' => 'Secondo',
                'price' => 12,
                'image' => ''
            ],

            // Primi
            [
                'restaurant_id' => 18,
                'name' => 'Yakisoba di pollo',
                'availability' => true,
                'ingredient' => 'Noodles soba, pollo, verdure miste, salsa yakisoba',
                'diet' => null,
                'course' => 'Secondo',
                'price' => 15,
                'image' => ''
            ],
            [
                'restaurant_id' => 18,
                'name' => 'Riso alla cantonese',
                'availability' => true,
                'ingredient' => 'Riso, uova, piselli, carote, prosciutto cotto',
                'diet' => null,
                'course' => 'Secondo',
                'price' => 13,
                'image' => ''
            ],

            // Secondi
            [
                'restaurant_id' => 18,
                'name' => 'Salmone teriyaki',
                'availability' => true,
                'ingredient' => 'Filetto di salmone, salsa teriyaki, verdure grigliate',
                'diet' => null,
                'course' => 'Secondo',
                'price' => 17,
                'image' => ''
            ],
            [
                'restaurant_id' => 18,
                'name' => 'Pollo katsu',
                'availability' => true,
                'ingredient' => 'Petto di pollo impanato, salsa katsu, riso bianco, insalata',
                'diet' => null,
                'course' => 'Secondo',
                'price' => 16,
                'image' => ''
            ],

            // Dolci
            [
                'restaurant_id' => 18,
                'name' => 'Cheesecake giapponese',
                'availability' => true,
                'ingredient' => 'Formaggio cremoso, biscotti digestive, marmellata di frutti di bosco',
                'diet' => null,
                'course' => 'Secondo',
                'price' => 7,
                'image' => ''
            ],
            [
                'restaurant_id' => 18,
                'name' => 'Mochi alla fragola',
                'availability' => true,
                'ingredient' => 'Mochi, gelato alla fragola',
                'diet' => null,
                'course' => 'Secondo',
                'price' => 6,
                'image' => ''
            ],

            //# Ravioleria Baozi

            // Baozi
            [
                'restaurant_id' => 19,
                'name' => 'Baozi al vapore con ripieno di maiale',
                'availability' => true,
                'ingredient' => 'Pasta al vapore, maiale macinato, cipolla verde, salsa di soia',
                'diet' => null,
                'course' => 'Secondo',
                'price' => 3.50,
                'image' => ''
            ],
            [
                'restaurant_id' => 19,
                'name' => 'Baozi fritto con ripieno di verdure',
                'availability' => true,
                'ingredient' => 'Pasta fritta, verdure miste, salsa agrodolce',
                'diet' => 'Vegetariano',
                'course' => 'Secondo',
                'price' => 4,
                'image' => ''
            ],
            [
                'restaurant_id' => 19,
                'name' => 'Baozi alla griglia con ripieno di gamberetti',
                'availability' => true,
                'ingredient' => 'Pasta alla griglia, gamberetti, peperoni, cipolla, salsa piccante',
                'diet' => null,
                'course' => 'Secondo',
                'price' => 5,
                'image' => ''
            ],
            [
                'restaurant_id' => 19,
                'name' => 'Baozi al vapore con ripieno di funghi e tofu',
                'availability' => true,
                'ingredient' => 'Pasta al vapore, funghi misti, tofu, cipolla, salsa di soia',
                'diet' => 'Vegetariano',
                'course' => 'Secondo',
                'price' => 4.50,
                'image' => ''
            ],

            //~ Ristoranti Indiani

            //# Saravanaa Bhavan

            // Antipasti
            [
                'restaurant_id' => 20,
                'name' => 'Samosa',
                'availability' => true,
                'ingredient' => 'Patate, piselli, spezie, pasta sfoglia',
                'diet' => 'Vegetariano',
                'course' => 'Secondo',
                'price' => 4,
                'image' => ''
            ],
            [
                'restaurant_id' => 20,
                'name' => 'Paneer Tikka',
                'availability' => true,
                'ingredient' => 'Paneer (formaggio indiano), peperoni, cipolla, spezie',
                'diet' => null,
                'course' => 'Secondo',
                'price' => 6,
                'image' => ''
            ],

            // Piatti principali - Vegetariani
            [
                'restaurant_id' => 20,
                'name' => 'Palak Paneer',
                'availability' => true,
                'ingredient' => 'Paneer, spinaci, pomodori, spezie',
                'diet' => 'Vegetariano',
                'course' => 'Secondo',
                'price' => 10,
                'image' => ''
            ],
            [
                'restaurant_id' => 20,
                'name' => 'Aloo Gobi',
                'availability' => true,
                'ingredient' => 'Patate, cavolfiore, pomodori, spezie',
                'diet' => 'Vegetariano',
                'course' => 'Secondo',
                'price' => 9,
                'image' => ''
            ],

            // Piatti principali - Non vegetariani
            [
                'restaurant_id' => 20,
                'name' => 'Chicken Tikka Masala',
                'availability' => true,
                'ingredient' => 'Pollo, salsa di pomodoro, panna, spezie',
                'diet' => null,
                'course' => 'Secondo',
                'price' => 14,
                'image' => ''
            ],
            [
                'restaurant_id' => 20,
                'name' => 'Lamb Rogan Josh',
                'availability' => true,
                'ingredient' => 'Agnello, yogurt, spezie',
                'diet' => null,
                'course' => 'Secondo',
                'price' => 16,
                'image' => ''
            ],

            // Dolci
            [
                'restaurant_id' => 20,
                'name' => 'Gulab Jamun',
                'availability' => true,
                'ingredient' => 'Palle dolci fritte, sciroppo di zucchero, cardamomo',
                'diet' => null,
                'course' => 'Secondo',
                'price' => 5,
                'image' => ''
            ],
            [
                'restaurant_id' => 20,
                'name' => 'Kheer',
                'availability' => true,
                'ingredient' => 'Riso, latte, zucchero, cardamomo, pistacchi',
                'diet' => 'Vegetariano',
                'course' => 'Secondo',
                'price' => 4,
                'image' => ''
            ],

            //# Himalaya's Kashmir

            // Antipasti
            [
                'restaurant_id' => 21,
                'name' => 'Samosa di verdure',
                'availability' => true,
                'ingredient' => 'Patate, piselli, carote, pasta sfoglia',
                'diet' => 'Vegetariano',
                'course' => 'Secondo',
                'price' => 4.50,
                'image' => ''
            ],
            [
                'restaurant_id' => 21,
                'name' => 'Pakora di pollo',
                'availability' => true,
                'ingredient' => 'Pollo marinato, pastella di ceci, spezie',
                'diet' => null,
                'course' => 'Secondo',
                'price' => 6,
                'image' => ''
            ],

            // Piatti principali - Vegetariani
            [
                'restaurant_id' => 21,
                'name' => 'Saag Paneer',
                'availability' => true,
                'ingredient' => 'Spinaci, paneer, pomodori, spezie',
                'diet' => 'Vegetariano',
                'course' => 'Secondo',
                'price' => 11,
                'image' => ''
            ],
            [
                'restaurant_id' => 21,
                'name' => 'Aloo Baingan',
                'availability' => true,
                'ingredient' => 'Patate, melanzane, pomodori, spezie',
                'diet' => 'Vegetariano',
                'course' => 'Secondo',
                'price' => 10,
                'image' => ''
            ],

            // Piatti principali - Non vegetariani
            [
                'restaurant_id' => 21,
                'name' => 'Mutton Rogan Josh',
                'availability' => true,
                'ingredient' => 'Agnello, yogurt, spezie',
                'diet' => null,
                'course' => 'Secondo',
                'price' => 16,
                'image' => ''
            ],
            [
                'restaurant_id' => 21,
                'name' => 'Tandoori Chicken',
                'availability' => true,
                'ingredient' => 'Pollo marinato con yogurt e spezie, cotto al forno tandoor',
                'diet' => null,
                'course' => 'Secondo',
                'price' => 14,
                'image' => ''
            ],

            // Dolci
            [
                'restaurant_id' => 21,
                'name' => 'Gulab Jamun',
                'availability' => true,
                'ingredient' => 'Palle dolci fritte, sciroppo di zucchero, cardamomo',
                'diet' => null,
                'course' => 'Secondo',
                'price' => 5.50,
                'image' => ''
            ],
            [
                'restaurant_id' => 21,
                'name' => 'Kheer',
                'availability' => true,
                'ingredient' => 'Riso, latte, zucchero, cardamomo, pistacchi',
                'diet' => 'Vegetariano',
                'course' => 'Secondo',
                'price' => 4.50,
                'image' => ''
            ],

            //# Tiger Tandoori

            // Antipasti
            [
                'restaurant_id' => 22,
                'name' => 'Pakora di verdure',
                'availability' => true,
                'ingredient' => 'Verdure miste, pastella di ceci, spezie',
                'diet' => 'Vegetariano',
                'course' => 'Secondo',
                'price' => 5,
                'image' => ''
            ],
            [
                'restaurant_id' => 22,
                'name' => 'Tandoori Wings',
                'availability' => true,
                'ingredient' => 'Ali di pollo marinate, spezie, cottura al forno tandoor',
                'diet' => null,
                'course' => 'Secondo',
                'price' => 7,
                'image' => ''
            ],

            // Piatti principali - Vegetariani
            [
                'restaurant_id' => 22,
                'name' => 'Paneer Tikka Masala',
                'availability' => true,
                'ingredient' => 'Paneer, salsa di pomodoro, panna, spezie',
                'diet' => 'Vegetariano',
                'course' => 'Secondo',
                'price' => 12,
                'image' => ''
            ],
            [
                'restaurant_id' => 22,
                'name' => 'Baingan Bharta',
                'availability' => true,
                'ingredient' => 'Melanzane, pomodori, cipolle, spezie',
                'diet' => 'Vegetariano',
                'course' => 'Secondo',
                'price' => 10,
                'image' => ''
            ],

            // Piatti principali - Non vegetariani
            [
                'restaurant_id' => 22,
                'name' => 'Chicken Biryani',
                'availability' => true,
                'ingredient' => 'Pollo, riso basmati, spezie, aromi',
                'diet' => null,
                'course' => 'Secondo',
                'price' => 15,
                'image' => ''
            ],
            [
                'restaurant_id' => 22,
                'name' => 'Tandoori Fish Tikka',
                'availability' => true,
                'ingredient' => 'Filetto di pesce marinato, spezie, cottura al forno tandoor',
                'diet' => null,
                'course' => 'Secondo',
                'price' => 16,
                'image' => ''
            ],

            // Dolci
            [
                'restaurant_id' => 22,
                'name' => 'Gajar Halwa',
                'availability' => true,
                'ingredient' => 'Carote, latte, zucchero, burro, frutta secca',
                'diet' => 'Vegetariano',
                'course' => 'Secondo',
                'price' => 6,
                'image' => ''
            ],
            [
                'restaurant_id' => 22,
                'name' => 'Rasmalai',
                'availability' => true,
                'ingredient' => 'Palle di latte cagliato, zucchero, cardamomo, mandorle',
                'diet' => 'Vegetariano',
                'course' => 'Secondo',
                'price' => 5,
                'image' => ''
            ],

            //# New Delhi

            // Antipasti
            [
                'restaurant_id' => 23,
                'name' => 'Pakora di cipolle',
                'availability' => true,
                'ingredient' => 'Cipolle, pastella di ceci, spezie',
                'diet' => 'Vegetariano',
                'course' => 'Secondo',
                'price' => 4.50,
                'image' => ''
            ],
            [
                'restaurant_id' => 23,
                'name' => 'Paneer Pakora',
                'availability' => true,
                'ingredient' => 'Paneer, pastella di ceci, spezie',
                'diet' => 'Vegetariano',
                'course' => 'Secondo',
                'price' => 6,
                'image' => ''
            ],

            // Piatti principali - Vegetariani
            [
                'restaurant_id' => 23,
                'name' => 'Chole',
                'availability' => true,
                'ingredient' => 'Ceci, pomodori, cipolle, spezie',
                'diet' => 'Vegetariano',
                'course' => 'Secondo',
                'price' => 9,
                'image' => ''
            ],
            [
                'restaurant_id' => 23,
                'name' => 'Baingan Masala',
                'availability' => true,
                'ingredient' => 'Melanzane, pomodori, cipolle, spezie',
                'diet' => 'Vegetariano',
                'course' => 'Secondo',
                'price' => 10,
                'image' => ''
            ],

            // Piatti principali - Non vegetariani
            [
                'restaurant_id' => 23,
                'name' => 'Chicken Curry',
                'availability' => true,
                'ingredient' => 'Pollo, salsa di pomodoro, yogurt, spezie',
                'diet' => null,
                'course' => 'Secondo',
                'price' => 14,
                'image' => ''
            ],
            [
                'restaurant_id' => 23,
                'name' => 'Lamb Biryani',
                'availability' => true,
                'ingredient' => 'Agnello, riso basmati, spezie, aromi',
                'diet' => null,
                'course' => 'Secondo',
                'price' => 16,
                'image' => ''
            ],

            // Dolci
            [
                'restaurant_id' => 23,
                'name' => 'Gulab Jamun',
                'availability' => true,
                'ingredient' => 'Palle dolci fritte, sciroppo di zucchero, cardamomo',
                'diet' => null,
                'course' => 'Secondo',
                'price' => 5,
                'image' => ''
            ],
            [
                'restaurant_id' => 23,
                'name' => 'Kulfi',
                'availability' => true,
                'ingredient' => 'Gelato indiano, frutta secca, saffron',
                'diet' => 'Vegetariano',
                'course' => 'Secondo',
                'price' => 4,
                'image' => ''
            ],

            //# Samoseria

            // Samosa
            [
                'restaurant_id' => 24,
                'name' => 'Samosa al ceci',
                'availability' => true,
                'ingredient' => 'Patate, ceci, cipolle, spezie',
                'diet' => 'Vegetariano',
                'course' => 'Secondo',
                'price' => 3,
                'image' => ''
            ],
            [
                'restaurant_id' => 24,
                'name' => 'Samosa al pollo',
                'availability' => true,
                'ingredient' => 'Pollo, piselli, cipolle, spezie',
                'diet' => null,
                'course' => 'Secondo',
                'price' => 4,
                'image' => ''
            ],
            [
                'restaurant_id' => 24,
                'name' => 'Samosa vegetariana mista',
                'availability' => true,
                'ingredient' => 'Patate, piselli, carote, cipolle, spezie',
                'diet' => 'Vegetariano',
                'course' => 'Secondo',
                'price' => 3.50,
                'image' => ''
            ],
            [
                'restaurant_id' => 24,
                'name' => 'Samosa di agnello',
                'availability' => true,
                'ingredient' => 'Agnello, patate, cipolle, spezie',
                'diet' => null,
                'course' => 'Secondo',
                'price' => 5,
                'image' => ''
            ],

            // Contorni
            [
                'restaurant_id' => 24,
                'name' => 'Chutney di menta',
                'availability' => true,
                'ingredient' => 'Menta, yogurt, spezie',
                'diet' => 'Vegetariano',
                'course' => 'Secondo',
                'price' => 2,
                'image' => ''
            ],
            [
                'restaurant_id' => 24,
                'name' => 'Raita',
                'availability' => true,
                'ingredient' => 'Yogurt, cetrioli, pomodori, spezie',
                'diet' => 'Vegetariano',
                'course' => 'Secondo',
                'price' => 2.50,
                'image' => ''
            ],

            //~ Ristoranti Messicani

            //# Billy Tacos

            // Antipasti
            [
                'restaurant_id' => 25,
                'name' => 'Nachos con formaggio fuso',
                'availability' => true,
                'ingredient' => 'Tortilla chips, formaggio fuso, jalapenos',
                'diet' => null,
                'course' => 'Secondo',
                'price' => 6,
                'image' => ''
            ],
            // Piatti principali
            [
                'restaurant_id' => 25,
                'name' => 'Taco al pastor',
                'availability' => true,
                'ingredient' => 'Maiale marinato, ananas, cipolle, coriandolo',
                'diet' => null,
                'course' => 'Secondo',
                'price' => 3.50,
                'image' => ''
            ],
            [
                'restaurant_id' => 25,
                'name' => 'Burrito di carne asada',
                'availability' => true,
                'ingredient' => 'Manzo alla griglia, fagioli, riso, formaggio, salsa',
                'diet' => null,
                'course' => 'Secondo',
                'price' => 8,
                'image' => ''
            ],
            // Dolci
            [
                'restaurant_id' => 25,
                'name' => 'Churros con cioccolato',
                'availability' => true,
                'ingredient' => 'Pasta fritta, zucchero, cannella, cioccolato caldo',
                'diet' => null,
                'course' => 'Secondo',
                'price' => 5,
                'image' => ''
            ],

            //# Taco Libre

            // Antipasti
            [
                'restaurant_id' => 26,
                'name' => 'Guacamole con chips di mais',
                'availability' => true,
                'ingredient' => 'Avocado, pomodoro, cipolla, lime, coriandolo',
                'diet' => 'Vegetariano',
                'course' => 'Secondo',
                'price' => 7,
                'image' => ''
            ],
            // Piatti principali
            [
                'restaurant_id' => 26,
                'name' => 'Taco al pastor',
                'availability' => true,
                'ingredient' => 'Maiale marinato, ananas, cipolle, coriandolo',
                'diet' => null,
                'course' => 'Secondo',
                'price' => 3,
                'image' => ''
            ],
            [
                'restaurant_id' => 26,
                'name' => 'Enchiladas de pollo',
                'availability' => true,
                'ingredient' => 'Pollo, tortilla di mais, salsa rossa, formaggio',
                'diet' => null,
                'course' => 'Secondo',
                'price' => 9,
                'image' => ''
            ],
            // Dolci
            [
                'restaurant_id' => 26,
                'name' => 'Flan al caramello',
                'availability' => true,
                'ingredient' => 'Uova, latte, zucchero, vaniglia, caramello',
                'diet' => null,
                'course' => 'Secondo',
                'price' => 6,
                'image' => ''
            ],

            //# The Mexican

            // Antipasti
            [
                'restaurant_id' => 27,
                'name' => 'Guacamole fresco',
                'availability' => true,
                'ingredient' => 'Avocado, pomodoro, cipolla, lime, coriandolo',
                'diet' => 'Vegetariano',
                'course' => 'Secondo',
                'price' => 8,
                'image' => ''
            ],
            // Piatti principali
            [
                'restaurant_id' => 27,
                'name' => 'Fajitas di manzo',
                'availability' => true,
                'ingredient' => 'Manzo, peperoni, cipolle, salsa, tortillas',
                'diet' => null,
                'course' => 'Secondo',
                'price' => 12,
                'image' => ''
            ],
            [
                'restaurant_id' => 27,
                'name' => 'Tacos al pastor',
                'availability' => true,
                'ingredient' => 'Maiale marinato, ananas, cipolle, coriandolo',
                'diet' => null,
                'course' => 'Secondo',
                'price' => 3.50,
                'image' => ''
            ],
            // Dolci
            [
                'restaurant_id' => 27,
                'name' => 'Pastel de tres leches',
                'availability' => true,
                'ingredient' => 'Torta imbevuta di tre tipi di latte, panna montata',
                'diet' => null,
                'course' => 'Secondo',
                'price' => 7,
                'image' => ''
            ],

            //# Casa Quesadillas

            // Antipasti
            [
                'restaurant_id' => 28,
                'name' => 'Chips e salsa',
                'availability' => true,
                'ingredient' => 'Tortilla chips, salsa di pomodoro',
                'diet' => 'Vegetariano',
                'course' => 'Secondo',
                'price' => 4,
                'image' => ''
            ],
            // Piatti principali
            [
                'restaurant_id' => 28,
                'name' => 'Quesadilla di pollo',
                'availability' => true,
                'ingredient' => 'Tortilla di farina, pollo, formaggio, peperoni',
                'diet' => null,
                'course' => 'Secondo',
                'price' => 7,
                'image' => ''
            ],
            [
                'restaurant_id' => 28,
                'name' => 'Burrito di fagioli neri',
                'availability' => true,
                'ingredient' => 'Fagioli neri, riso, formaggio, salsa',
                'diet' => 'Vegetariano',
                'course' => 'Secondo',
                'price' => 8,
                'image' => ''
            ],
            // Dolci
            [
                'restaurant_id' => 28,
                'name' => 'Tres leches cake',
                'availability' => true,
                'ingredient' => 'Torta imbevuta di tre tipi di latte, panna montata',
                'diet' => null,
                'course' => 'Secondo',
                'price' => 6,
                'image' => ''
            ],

            //#Tacos King

            // Antipasti
            [
                'restaurant_id' => 29,
                'name' => 'Tortilla chips con salsa guacamole',
                'availability' => true,
                'ingredient' => 'Tortilla chips, avocado, pomodoro, cipolla, lime',
                'diet' => 'Vegetariano',
                'course' => 'Secondo',
                'price' => 6,
                'image' => ''
            ],
            // Piatti principali
            [
                'restaurant_id' => 29,
                'name' => 'Tacos al pastor',
                'availability' => true,
                'ingredient' => 'Maiale marinato, ananas, cipolle, coriandolo',
                'diet' => null,
                'course' => 'Secondo',
                'price' => 3.50,
                'image' => ''
            ],
            [
                'restaurant_id' => 29,
                'name' => 'Burrito di pollo',
                'availability' => true,
                'ingredient' => 'Pollo, fagioli, riso, formaggio, salsa',
                'diet' => null,
                'course' => 'Secondo',
                'price' => 8,
                'image' => ''
            ],
            // Dolci
            [
                'restaurant_id' => 29,
                'name' => 'Tres leches cake',
                'availability' => true,
                'ingredient' => 'Torta imbevuta di tre tipi di latte, panna montata',
                'diet' => null,
                'course' => 'Secondo',
                'price' => 7,
                'image' => ''
            ],

            //~ Ristoranti Siriani

            //# Shawarma Express
            // Antipasti
            [
                'restaurant_id' => 30,
                'name' => 'Hummus con pita',
                'availability' => true,
                'ingredient' => 'Ceci, tahini, aglio, limone, olio d\'oliva',
                'diet' => 'Vegetariano',
                'course' => 'Secondo',
                'price' => 5,
                'image' => ''
            ],
            // Piatti principali
            [
                'restaurant_id' => 30,
                'name' => 'Shawarma di pollo',
                'availability' => true,
                'ingredient' => 'Pollo marinato, insalata, salsa tahini, pane pita',
                'diet' => null,
                'course' => 'Secondo',
                'price' => 8,
                'image' => ''
            ],
            [
                'restaurant_id' => 30,
                'name' => 'Falafel wrap',
                'availability' => true,
                'ingredient' => 'Falafel, insalata, salsa tahini, pane pita',
                'diet' => 'Vegetariano',
                'course' => 'Secondo',
                'price' => 7,
                'image' => ''
            ],
            // Dolci
            [
                'restaurant_id' => 30,
                'name' => 'Baklava',
                'availability' => true,
                'ingredient' => 'Pasta fillo, noci, miele',
                'diet' => null,
                'course' => 'Secondo',
                'price' => 4,
                'image' => ''
            ],

            //# Damas Kebab

            [
                'restaurant_id' => 31,
                'name' => 'Mutabbal',
                'availability' => true,
                'ingredient' => 'Melanzane grigliate, tahini, aglio, limone, olio d\'oliva',
                'diet' => 'Vegetariano',
                'course' => 'Secondo',
                'price' => 6,
                'image' => ''
            ],
            // Piatti principali
            [
                'restaurant_id' => 31,
                'name' => 'Kebab di agnello',
                'availability' => true,
                'ingredient' => 'Agnello macinato, spezie, pane pita',
                'diet' => null,
                'course' => 'Secondo',
                'price' => 10,
                'image' => ''
            ],
            [
                'restaurant_id' => 31,
                'name' => 'Kafta wrap',
                'availability' => true,
                'ingredient' => 'Kafta (polpettone di carne macinata), insalata, pane pita',
                'diet' => null,
                'course' => 'Secondo',
                'price' => 9,
                'image' => ''
            ],
            // Dolci
            [
                'restaurant_id' => 31,
                'name' => 'Halva',
                'availability' => true,
                'ingredient' => 'Tahini, zucchero, vaniglia',
                'diet' => 'Vegetariano',
                'course' => 'Secondo',
                'price' => 5,
                'image' => ''
            ],

            //~ Ristoranti Africani

            //# Blackalicious Afrofood

            // Antipasti
            [
                'restaurant_id' => 32,
                'name' => 'Sambusa di carne',
                'availability' => true,
                'ingredient' => 'Carne macinata, cipolla, spezie, pasta brick',
                'diet' => null,
                'course' => 'Secondo',
                'price' => 4,
                'image' => ''
            ],
            // Piatti principali
            [
                'restaurant_id' => 32,
                'name' => 'Jollof rice con pollo',
                'availability' => true,
                'ingredient' => 'Riso, pollo, pomodoro, cipolla, peperoni, spezie',
                'diet' => null,
                'course' => 'Secondo',
                'price' => 12,
                'image' => ''
            ],
            [
                'restaurant_id' => 32,
                'name' => 'Fufu con zuppa di verdure',
                'availability' => true,
                'ingredient' => 'Fufu (pasta di farina di mais e igname), verdure miste, brodo',
                'diet' => 'Vegetariano',
                'course' => 'Secondo',
                'price' => 10,
                'image' => ''
            ],
            // Dolci
            [
                'restaurant_id' => 32,
                'name' => 'Puff Puff',
                'availability' => true,
                'ingredient' => 'Impasto di farina, lievito, zucchero, olio di palma',
                'diet' => 'Vegetariano',
                'course' => 'Secondo',
                'price' => 5,
                'image' => ''
            ],

            //# Afrik Cavour

            // Antipasti
            [
                'restaurant_id' => 33,
                'name' => 'Kelewele',
                'availability' => true,
                'ingredient' => 'Banane, pepe di giamaica, zenzero, aglio, olio di palma',
                'diet' => 'Vegetariano',
                'course' => 'Secondo',
                'price' => 6,
                'image' => ''
            ],
            // Piatti principali
            [
                'restaurant_id' => 33,
                'name' => 'Suya di manzo',
                'availability' => true,
                'ingredient' => 'Manzo marinato, spezie, arachidi tostate',
                'diet' => null,
                'course' => 'Secondo',
                'price' => 14,
                'image' => ''
            ],
            [
                'restaurant_id' => 33,
                'name' => 'Jollof rice con gamberi',
                'availability' => true,
                'ingredient' => 'Riso, gamberi, pomodoro, cipolla, peperoni, spezie',
                'diet' => null,
                'course' => 'Secondo',
                'price' => 15,
                'image' => ''
            ],
            // Dolci
            [
                'restaurant_id' => 33,
                'name' => 'Chin Chin',
                'availability' => true,
                'ingredient' => 'Farina, burro, uova, zucchero, latte',
                'diet' => 'Vegetariano',
                'course' => 'Secondo',
                'price' => 7,
                'image' => ''
            ],

            //~ Ristoranti Thailandesi

            //# Isola Puket

            // Antipasti
            [
                'restaurant_id' => 34,
                'name' => 'Tom Yum Goong',
                'availability' => true,
                'ingredient' => 'Gamberetti, funghi, erba cipollina, peperoncino, lime',
                'diet' => null,
                'course' => 'Secondo',
                'price' => 10,
                'image' => ''
            ],
            // Piatti principali
            [
                'restaurant_id' => 34,
                'name' => 'Pad Thai',
                'availability' => true,
                'ingredient' => 'Tagliatelle di riso, gamberetti, tofu, uova, arachidi',
                'diet' => null,
                'course' => 'Secondo',
                'price' => 12,
                'image' => ''
            ],
            [
                'restaurant_id' => 34,
                'name' => 'Massaman Curry di manzo',
                'availability' => true,
                'ingredient' => 'Manzo, patate, arachidi, curry, latte di cocco',
                'diet' => null,
                'course' => 'Secondo',
                'price' => 15,
                'image' => ''
            ],
            // Dolci
            [
                'restaurant_id' => 34,
                'name' => 'Mango Sticky Rice',
                'availability' => true,
                'ingredient' => 'Riso glutinoso, mango maturo, latte di cocco, zucchero',
                'diet' => 'Vegetariano',
                'course' => 'Secondo',
                'price' => 8,
                'image' => ''
            ],

            //# Bussarakham

            // Antipasti
            [
                'restaurant_id' => 35,
                'name' => 'Som Tam',
                'availability' => true,
                'ingredient' => 'Papaya verde, pomodoro, arachidi, fagiolini, peperoncino',
                'diet' => 'Vegetariano',
                'course' => 'Secondo',
                'price' => 9,
                'image' => ''
            ],
            // Piatti principali
            [
                'restaurant_id' => 35,
                'name' => 'Pad See Ew con pollo',
                'availability' => true,
                'ingredient' => 'Tagliatelle di riso, pollo, broccoli, cavolo cinese, salsa di soia',
                'diet' => null,
                'course' => 'Secondo',
                'price' => 13,
                'image' => ''
            ],
            [
                'restaurant_id' => 35,
                'name' => 'Gai Med Ma Muang',
                'availability' => true,
                'ingredient' => 'Pollo, anacardi, peperoni, cipolle, salsa di ostriche',
                'diet' => null,
                'course' => 'Secondo',
                'price' => 14,
                'image' => ''
            ],
            // Dolci
            [
                'restaurant_id' => 35,
                'name' => 'Khanom Mo Kaeng',
                'availability' => true,
                'ingredient' => 'Farina di riso, latte di cocco, zucchero, uova',
                'diet' => 'Vegetariano',
                'course' => 'Secondo',
                'price' => 7,
                'image' => ''
            ],

            //# Bin Hai

            // Antipasti
            [
                'restaurant_id' => 36,
                'name' => 'Satay di pollo',
                'availability' => true,
                'ingredient' => 'Spiedini di pollo marinato, salsa di arachidi',
                'diet' => null,
                'course' => 'Secondo',
                'price' => 8,
                'image' => ''
            ],
            // Piatti principali
            [
                'restaurant_id' => 36,
                'name' => 'Tom Kha Gai',
                'availability' => true,
                'ingredient' => 'Pollo, funghi, citronella, galanga, lime, latte di cocco',
                'diet' => null,
                'course' => 'Secondo',
                'price' => 11,
                'image' => ''
            ],
            [
                'restaurant_id' => 36,
                'name' => 'Pad Kra Pao Moo',
                'availability' => true,
                'ingredient' => 'Maiale tritato, basilico, peperoncino, aglio, salsa di soia',
                'diet' => null,
                'course' => 'Secondo',
                'price' => 12,
                'image' => ''
            ],
            // Dolci
            [
                'restaurant_id' => 36,
                'name' => 'Khanom Krok',
                'availability' => true,
                'ingredient' => 'Farina di riso, latte di cocco, zucchero di palma',
                'diet' => 'Vegetariano',
                'course' => 'Secondo',
                'price' => 6,
                'image' => ''
            ],

            //# Siam Cuisine

            // Antipasti
            [
                'restaurant_id' => 37,
                'name' => 'Tod Mun Pla',
                'availability' => true,
                'ingredient' => 'Polpettine di pesce, curry rosso, fagiolini, lime',
                'diet' => null,
                'course' => 'Secondo',
                'price' => 10,
                'image' => ''
            ],
            // Piatti principali
            [
                'restaurant_id' => 37,
                'name' => 'Khao Pad Gai',
                'availability' => true,
                'ingredient' => 'Riso fritto, pollo, uova, cipolle, piselli, salsa di soia',
                'diet' => null,
                'course' => 'Secondo',
                'price' => 11,
                'image' => ''
            ],
            [
                'restaurant_id' => 37,
                'name' => 'Gaeng Keow Wan Gai',
                'availability' => true,
                'ingredient' => 'Pollo, curry verde, melanzane, peperoni, basilico, latte di cocco',
                'diet' => null,
                'course' => 'Secondo',
                'price' => 14,
                'image' => ''
            ],
            // Dolci
            [
                'restaurant_id' => 37,
                'name' => 'Kluay Buat Chi',
                'availability' => true,
                'ingredient' => 'Banana, latte di cocco, zucchero, sale',
                'diet' => 'Vegetariano',
                'course' => 'Secondo',
                'price' => 8,
                'image' => ''
            ],

            //# Thai Inn

            // Antipasti
            [
                'restaurant_id' => 38,
                'name' => 'Yam Pla Duk Fu',
                'availability' => true,
                'ingredient' => 'Insalata di pesce gatto croccante, mango, cipolla, peperoncino, menta',
                'diet' => null,
                'course' => 'Secondo',
                'price' => 9,
                'image' => ''
            ],
            // Piatti principali
            [
                'restaurant_id' => 38,
                'name' => 'Khao Soi Gai',
                'availability' => true,
                'ingredient' => 'Tagliatelle di uova, pollo, curry giallo, cipolle fritte, lime',
                'diet' => null,
                'course' => 'Secondo',
                'price' => 12,
                'image' => ''
            ],
            [
                'restaurant_id' => 38,
                'name' => 'Pla Rad Prik',
                'availability' => true,
                'ingredient' => 'Pesce fritto, salsa di peperoncino dolce, basilico, cipolla',
                'diet' => null,
                'course' => 'Secondo',
                'price' => 15,
                'image' => ''
            ],
            // Dolci
            [
                'restaurant_id' => 38,
                'name' => 'Tako',
                'availability' => true,
                'ingredient' => 'Pudding di tapioca, latte di cocco, mais dolce',
                'diet' => 'Vegetariano',
                'course' => 'Secondo',
                'price' => 7,
                'image' => ''
            ],

            //~ Ristoranti Brasiliani

            //# Brazilian Food

            // Antipasti
            [
                'restaurant_id' => 39,
                'name' => 'Tom Yum Goong',
                'availability' => true,
                'ingredient' => 'Gamberetti, funghi, erba cipollina, peperoncino, lime',
                'diet' => null,
                'course' => 'Secondo',
                'price' => 10,
                'image' => ''
            ],
            // Piatti principali
            [
                'restaurant_id' => 39,
                'name' => 'Pad Thai',
                'availability' => true,
                'ingredient' => 'Tagliatelle di riso, gamberetti, tofu, uova, arachidi',
                'diet' => null,
                'course' => 'Secondo',
                'price' => 12,
                'image' => ''
            ],
            [
                'restaurant_id' => 39,
                'name' => 'Massaman Curry di manzo',
                'availability' => true,
                'ingredient' => 'Manzo, patate, arachidi, curry, latte di cocco',
                'diet' => null,
                'course' => 'Secondo',
                'price' => 15,
                'image' => ''
            ],
            // Dolci
            [
                'restaurant_id' => 39,
                'name' => 'Mango Sticky Rice',
                'availability' => true,
                'ingredient' => 'Riso glutinoso, mango maturo, latte di cocco, zucchero',
                'diet' => 'Vegetariano',
                'course' => 'Secondo',
                'price' => 8,
                'image' => ''
            ],

            //# Manioka

            // Antipasti
            [
                'restaurant_id' => 40,
                'name' => 'Som Tam',
                'availability' => true,
                'ingredient' => 'Papaya verde, pomodoro, arachidi, fagiolini, peperoncino',
                'diet' => 'Vegetariano',
                'course' => 'Secondo',
                'price' => 9,
                'image' => ''
            ],
            // Piatti principali
            [
                'restaurant_id' => 40,
                'name' => 'Pad See Ew con pollo',
                'availability' => true,
                'ingredient' => 'Tagliatelle di riso, pollo, broccoli, cavolo cinese, salsa di soia',
                'diet' => null,
                'course' => 'Secondo',
                'price' => 13,
                'image' => ''
            ],
            [
                'restaurant_id' => 40,
                'name' => 'Gai Med Ma Muang',
                'availability' => true,
                'ingredient' => 'Pollo, anacardi, peperoni, cipolle, salsa di ostriche',
                'diet' => null,
                'course' => 'Secondo',
                'price' => 14,
                'image' => ''
            ],
            // Dolci
            [
                'restaurant_id' => 40,
                'name' => 'Khanom Mo Kaeng',
                'availability' => true,
                'ingredient' => 'Farina di riso, latte di cocco, zucchero, uova',
                'diet' => 'Vegetariano',
                'course' => 'Secondo',
                'price' => 7,
                'image' => ''
            ],

            //~ Ristoranti Turchi

            //# Turkish Kebab

            // Antipasti
            [
                'restaurant_id' => 42,
                'name' => 'Cig Köfte',
                'availability' => true,
                'ingredient' => 'Carne macinata, bulgur, peperoncino, spezie',
                'diet' => null,
                'course' => 'Secondo',
                'price' => 9,
                'image' => ''
            ],
            // Piatti principali
            [
                'restaurant_id' => 42,
                'name' => 'Lahmacun',
                'availability' => true,
                'ingredient' => 'Base di pizza sottile, carne macinata, cipolla, pomodoro, prezzemolo',
                'diet' => null,
                'course' => 'Secondo',
                'price' => 10,
                'image' => ''
            ],
            [
                'restaurant_id' => 42,
                'name' => 'Shish Kebab',
                'availability' => true,
                'ingredient' => 'Spiedini di carne di agnello marinata, peperoni, cipolla',
                'diet' => null,
                'course' => 'Secondo',
                'price' => 16,
                'image' => ''
            ],
            // Dolci
            [
                'restaurant_id' => 42,
                'name' => 'Künefe',
                'availability' => true,
                'ingredient' => 'Pasta fillo, formaggio, sciroppo di zucchero',
                'diet' => 'Vegetariano',
                'course' => 'Secondo',
                'price' => 10,
                'image' => ''
            ],

            //# Furious Kebab

            // Antipasti
            [
                'restaurant_id' => 42,
                'name' => 'Cig Köfte',
                'availability' => true,
                'ingredient' => 'Carne macinata, bulgur, peperoncino, spezie',
                'diet' => null,
                'course' => 'Secondo',
                'price' => 9,
                'image' => ''
            ],
            // Piatti principali
            [
                'restaurant_id' => 42,
                'name' => 'Lahmacun',
                'availability' => true,
                'ingredient' => 'Base di pizza sottile, carne macinata, cipolla, pomodoro, prezzemolo',
                'diet' => null,
                'course' => 'Secondo',
                'price' => 10,
                'image' => ''
            ],
            [
                'restaurant_id' => 42,
                'name' => 'Shish Kebab',
                'availability' => true,
                'ingredient' => 'Spiedini di carne di agnello marinata, peperoni, cipolla',
                'diet' => null,
                'course' => 'Secondo',
                'price' => 16,
                'image' => ''
            ],
            // Dolci
            [
                'restaurant_id' => 42,
                'name' => 'Künefe',
                'availability' => true,
                'ingredient' => 'Pasta fillo, formaggio, sciroppo di zucchero',
                'diet' => 'Vegetariano',
                'course' => 'Secondo',
                'price' => 10,
                'image' => ''
            ],
        ];

        foreach ($dishes as $dish) {

            $new_dish = new Dish();

            if (!$new_dish->image) {
                $new_dish->image = 'https://media.istockphoto.com/id/1359180794/it/vettoriale/spaghetti-italiani-in-contorni-neri-stile-scarabocchio-illustrazione-vettoriale-isolata.jpg?s=612x612&w=0&k=20&c=6jppKd4ITSGazQjGpeaIiyTcThvkLMBTgKv7w-zboh0=';
            };

            $new_dish->slug = Str::slug($dish['name']);
            $new_dish->fill($dish);
            $new_dish->save();
        }
    }
}
