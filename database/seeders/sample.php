<?php
//~ Piatti Ristoranti Italiani

//# Rifugio Romano
$dishes = [
    // Antipasti
    [
        'restaurant_id' => 1,
        'name' => 'Supplì',
        'availability' => 1,
        'ingredient' => 'Riso, pomodoro, mozzarella',
        'diet' => null,
        'course' => 'Antipasto',
        'price' => 4
    ],
    [
        'restaurant_id' => 1,
        'name' => 'Patatine fritte',
        'availability' => 1,
        'ingredient' => null,
        'diet' => 'Vegano',
        'course' => 'Antipasto',
        'price' => 4.50
    ],

    // Primi 
    [
        'restaurant_id' => 1,
        'name' => 'Amatriciana vegana',
        'availability' => 1,
        'ingredient' => 'Paccheri freschi, sugo all\'amatriciana, guanciale vegan, pecorino vegano leggermente piccante',
        'diet' => 'Vegano',
        'course' => 'Primo',
        'price' => 13
    ],
    [
        'restaurant_id' => 1,
        'name' => 'Risotto trionfo di asparagi',
        'availability' => 1,
        'ingredient' => 'Risotto agli asparagi, limone, burrata di anacardi',
        'diet' => 'Vegano',
        'course' => 'Primo',
        'price' => 14
    ],

    // Secondi
    [
        'restaurant_id' => 1,
        'name' => 'Pollo alla romana veg',
        'availability' => 1,
        'ingredient' => 'Pollo vegetale, pomodoro, olive, peperoni, patate arrosto',
        'diet' => 'Vegano',
        'course' => 'Secondo',
        'price' => 15
    ],
    [
        'restaurant_id' => 1,
        'name' => 'Grigliata Beyond Meat',
        'availability' => 1,
        'ingredient' => 'Burger Beyond Meat, salsiccia Beyond Meat, pollo veg Planted, patate arrosto, maionese',
        'diet' => 'Vegano',
        'course' => 'Secondo',
        'price' => 22
    ],
    // Dolci
    [
        'restaurant_id' => 1,
        'name' => 'Tiramisu vegan',
        'availability' => 1,
        'ingredient' => 'caffè, alcool, glutine',
        'diet' => 'Vegano',
        'course' => 'Dessert',
        'price' => 6
    ],
    [
        'restaurant_id' => 1,
        'name' => 'Tozzetti artigianali',
        'availability' => 1,
        'ingredient' => 'nocciole, cioccolato',
        'diet' => 'Vegano',
        'course' => 'Dessert',
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
        'course' => 'Primo',
        'price' => 13
    ],
    [
        'restaurant_id' => 2,
        'name' => 'Spaghetti alla carbonara',
        'availability' => 1,
        'ingredient' => 'Spaghetti, uova, pecorino, guanciale',
        'diet' => null,
        'course' => 'Primo',
        'price' => 14
    ],

    // Secondi
    [
        'restaurant_id' => 2,
        'name' => 'Saltimbocca alla romana con patate',
        'availability' => 1,
        'ingredient' => 'Fettine di vitello, prosciutto crudo, farina, salvia, patate arrosto,',
        'diet' => null,
        'course' => 'Secondo',
        'price' => 15
    ],
    [
        'restaurant_id' => 2,
        'name' => 'Polpette al pomodoro con patate',
        'availability' => 1,
        'ingredient' => 'carne di vitello, carne di maiale, parmigiano, passata di pomodoro, patate arrosto',
        'diet' => null,
        'course' => 'Secondo',
        'price' => 22
    ],
    // Dolci
    [
        'restaurant_id' => 2,
        'name' => 'Tiramisu',
        'availability' => 1,
        'ingredient' => 'caffè, mascarpone, alcool, polvere di cioccolato amaro',
        'diet' => null,
        'course' => 'Dessert',
        'price' => 6
    ],
    [
        'restaurant_id' => 2,
        'name' => 'Cheesecake al pistacchio',
        'availability' => 1,
        'ingredient' => 'biscotti secchi, burro, panna, mascarpone, crema di pistacchio, farina di pistacchio',
        'diet' => null,
        'course' => 'Dessert',
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
        'course' => 'Primo',
        'price' => 7.90
    ],
    [
        'restaurant_id' => 3,
        'name' => 'Riso Basmati non condito - 250gr',
        'availability' => 1,
        'ingredient' => null,
        'diet' => 'Vegano',
        'course' => 'Primo',
        'price' => 9.90
    ],

    // Secondi
    [
        'restaurant_id' => 3,
        'name' => 'Insalata di lenticchie - 250gr',
        'availability' => 1,
        'ingredient' => null,
        'diet' => 'Vegano',
        'course' => 'Secondo',
        'price' => 7.50
    ],
    [
        'restaurant_id' => 3,
        'name' => 'Seitan in salsa thay 200gr',
        'availability' => 1,
        'ingredient' => 'Salsa di cocco, anacardi e curry',
        'diet' => null,
        'course' => 'Secondo',
        'price' => 7.50
    ],
    // Dolci
    [
        'restaurant_id' => 3,
        'name' => 'Flapjack - 2 barrette energetiche',
        'availability' => 1,
        'ingredient' => 'barretta di cocco, cioccolato, datteri',
        'diet' => 'Vegano',
        'course' => 'Dessert',
        'price' => 5.50
    ],
    [
        'restaurant_id' => 3,
        'name' => 'Muffin al cioccolato',
        'availability' => 1,
        'ingredient' => null,
        'diet' => null,
        'course' => 'Dessert',
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
        'course' => 'Antipasto',
        'price' => 19
    ],
    [
        'restaurant_id' => 4,
        'name' => 'Carciofo alla giudia',
        'availability' => 1,
        'ingredient' => null,
        'diet' => 'Vegano',
        'course' => 'Antipasto',
        'price' => 8.50
    ],

    // Primi 
    [
        'restaurant_id' => 4,
        'name' => 'Tonnarello carbonara',
        'availability' => 1,
        'ingredient' => null,
        'diet' => null,
        'course' => 'Primo',
        'price' => 12
    ],
    [
        'restaurant_id' => 4,
        'name' => 'Tonnarello all\'amatriciana',
        'availability' => 1,
        'ingredient' => null,
        'diet' => null,
        'course' => 'Primo',
        'price' => 12
    ],

    // Secondi
    [
        'restaurant_id' => 4,
        'name' => 'Abbacchio al forno',
        'availability' => 1,
        'ingredient' => null,
        'diet' => null,
        'course' => 'Secondo',
        'price' => 22
    ],
    [
        'restaurant_id' => 4,
        'name' => 'Saltimbocca alla romana',
        'availability' => 1,
        'ingredient' => null,
        'diet' => null,
        'course' => 'Secondo',
        'price' => 18
    ],
    // Dolci
    [
        'restaurant_id' => 4,
        'name' => 'Panna cotta con le fragole',
        'availability' => 1,
        'ingredient' => null,
        'diet' => null,
        'course' => 'Dessert',
        'price' => 6
    ],
    [
        'restaurant_id' => 4,
        'name' => 'Salame di cioccolato',
        'availability' => 1,
        'ingredient' => null,
        'diet' => null,
        'course' => 'Dessert',
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
        'course' => 'Dessert',
        'price' => 12
    ],
    [
        'restaurant_id' => 5,
        'name' => 'Vaschetta di gelato 500gr',
        'availability' => 1,
        'ingredient' => null,
        'diet' => null,
        'course' => 'Dessert',
        'price' => 15
    ],
    [
        'restaurant_id' => 5,
        'name' => 'Vaschetta di gelato 750gr',
        'availability' => 1,
        'ingredient' => null,
        'diet' => null,
        'course' => 'Dessert',
        'price' => 22
    ],
    [
        'restaurant_id' => 5,
        'name' => 'Vaschetta di gelato 1kg',
        'availability' => 1,
        'ingredient' => null,
        'diet' => null,
        'course' => 'Dessert',
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
        'course' => 'Antipasto',
        'price' => 5
    ],
    [
        'restaurant_id' => 6,
        'name' => 'Patate al forno',
        'availability' => 1,
        'ingredient' => 'Patate, sale, olio, rosmarino',
        'diet' => 'Vegano',
        'course' => 'Antipasto',
        'price' => 4
    ],

    // Primi 
    [
        'restaurant_id' => 6,
        'name' => 'Bucatini all\'amatriciana',
        'availability' => 1,
        'ingredient' => 'Bucatini, guanciale, pomodoro, pecorino romano',
        'diet' => null,
        'course' => 'Primo',
        'price' => 5
    ],
    [
        'restaurant_id' => 6,
        'name' => 'Lasagna della domenica',
        'availability' => 1,
        'ingredient' => 'Cipolla rossa, riduzione di vino rosso, caponata di verdure, rucola, grana padano',
        'diet' => 'Vegano',
        'course' => 'Primo',
        'price' => 19
    ],

    // Secondi
    [
        'restaurant_id' => 6,
        'name' => 'Insalata di lenticchie - 250gr',
        'availability' => 1,
        'ingredient' => null,
        'diet' => 'Vegano',
        'course' => 'Secondo',
        'price' => 7.50
    ],
    [
        'restaurant_id' => 6,
        'name' => 'Seitan in salsa thay 200gr',
        'availability' => 1,
        'ingredient' => 'Salsa di cocco, anacardi e curry',
        'diet' => null,
        'course' => 'Secondo',
        'price' => 7.50
    ],
    // Dolci
    [
        'restaurant_id' => 6,
        'name' => 'Flapjack - 2 barrette energetiche',
        'availability' => 1,
        'ingredient' => 'barretta di cocco, cioccolato, datteri',
        'diet' => 'Vegano',
        'course' => 'Dessert',
        'price' => 5.50
    ],
    [
        'restaurant_id' => 6,
        'name' => 'Muffin al cioccolato',
        'availability' => 1,
        'ingredient' => null,
        'diet' => null,
        'course' => 'Dessert',
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
        'course' => 'Dessert',
        'price' => 12
    ],
    [
        'restaurant_id' => 7,
        'name' => 'Vaschetta di gelato 500gr',
        'availability' => 1,
        'ingredient' => null,
        'diet' => null,
        'course' => 'Dessert',
        'price' => 15
    ],
    [
        'restaurant_id' => 7,
        'name' => 'Vaschetta di gelato 750gr',
        'availability' => 1,
        'ingredient' => null,
        'diet' => null,
        'course' => 'Dessert',
        'price' => 22
    ],
    [
        'restaurant_id' => 7,
        'name' => 'Vaschetta di gelato 1kg',
        'availability' => 1,
        'ingredient' => null,
        'diet' => null,
        'course' => 'Dessert',
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
        'course' => 'Antipasto',
        'price' => 6.50
    ],
    [
        'restaurant_id' => 8,
        'name' => 'Carciofi alla romana',
        'availability' => 1,
        'ingredient' => 'Carciofi, menta, prezzemolo, aglio, olio',
        'diet' => 'Vegetariano',
        'course' => 'Antipasto',
        'price' => 8
    ],

    // Primi 
    [
        'restaurant_id' => 8,
        'name' => 'Pasta alla carbonara',
        'availability' => 1,
        'ingredient' => 'Spaghetti, guanciale, uova, pecorino romano, pepe',
        'diet' => null,
        'course' => 'Primo',
        'price' => 12
    ],
    [
        'restaurant_id' => 8,
        'name' => 'Cacio e pepe',
        'availability' => 1,
        'ingredient' => 'Spaghetti, pecorino romano, pepe',
        'diet' => 'Vegetariano',
        'course' => 'Primo',
        'price' => 10
    ],

    // Secondi
    [
        'restaurant_id' => 8,
        'name' => 'Saltimbocca alla romana',
        'availability' => 1,
        'ingredient' => 'Fettine di vitello, prosciutto crudo, salvia',
        'diet' => null,
        'course' => 'Secondo',
        'price' => 16.50
    ],
    [
        'restaurant_id' => 8,
        'name' => 'Trippa alla romana',
        'availability' => 1,
        'ingredient' => 'Trippa, pomodoro, menta, pecorino romano',
        'diet' => null,
        'course' => 'Secondo',
        'price' => 14
    ],

    // Dolci
    [
        'restaurant_id' => 8,
        'name' => 'Tiramisù',
        'availability' => 1,
        'ingredient' => 'Savoiardi, mascarpone, caffè, cacao',
        'diet' => null,
        'course' => 'Dessert',
        'price' => 7.50
    ],
    [
        'restaurant_id' => 8,
        'name' => 'Maritozzo con la panna',
        'availability' => 1,
        'ingredient' => 'Maritozzo, panna',
        'diet' => null,
        'course' => 'Dessert',
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
        'course' => 'Antipasto',
        'price' => 6.50
    ],
    [
        'restaurant_id' => 9,
        'name' => 'Fiori di zucca fritti',
        'availability' => 1,
        'ingredient' => 'Fiori di zucca, farina, acqua, sale',
        'diet' => 'Vegetariano',
        'course' => 'Antipasto',
        'price' => 9
    ],

    // Primi 
    [
        'restaurant_id' => 9,
        'name' => 'Pasta alla Ginevra',
        'availability' => 1,
        'ingredient' => 'Penne, pesto alla genovese, patate, fagiolini, pecorino romano',
        'diet' => 'Vegetariano',
        'course' => 'Primo',
        'price' => 11
    ],
    [
        'restaurant_id' => 9,
        'name' => 'Risotto ai funghi porcini',
        'availability' => 1,
        'ingredient' => 'Riso carnaroli, funghi porcini, cipolla, brodo vegetale, burro, parmigiano',
        'diet' => null,
        'course' => 'Primo',
        'price' => 14
    ],

    // Secondi
    [
        'restaurant_id' => 9,
        'name' => 'Saltimbocca alla Tavola Rotonda',
        'availability' => 1,
        'ingredient' => 'Fettine di vitello, prosciutto crudo, salvia, vino bianco',
        'diet' => null,
        'course' => 'Secondo',
        'price' => 18.50
    ],
    [
        'restaurant_id' => 9,
        'name' => 'Filetto di branzino al cartoccio',
        'availability' => 1,
        'ingredient' => 'Branzino, pomodorini, olive nere, capperi, prezzemolo, limone, olio extra vergine di oliva',
        'diet' => null,
        'course' => 'Secondo',
        'price' => 20
    ],

    // Dolci
    [
        'restaurant_id' => 9,
        'name' => 'Torta della Tavola Rotonda',
        'availability' => 1,
        'ingredient' => 'Pan di spagna, crema pasticcera, frutta fresca',
        'diet' => null,
        'course' => 'Dessert',
        'price' => 8.50
    ],
    [
        'restaurant_id' => 9,
        'name' => 'Millefoglie alle fragole',
        'availability' => 1,
        'ingredient' => 'Pasta sfoglia, crema pasticcera, fragole, zucchero a velo',
        'diet' => null,
        'course' => 'Dessert',
        'price' => 7
    ],

    // Piatti Ristoranti Giapponesi e Cinesi

    //# Chinese Express

    // Antipasti
    [
        'restaurant_id' => 10,
        'name' => 'Ravioli al vapore',
        'availability' => 1,
        'ingredient' => 'Pasta di grano, maiale macinato, cavolo cinese, zenzero, salsa di soia',
        'diet' => null,
        'course' => 'Antipasto',
        'price' => 7.50
    ],
    [
        'restaurant_id' => 10,
        'name' => 'Edamame',
        'availability' => 1,
        'ingredient' => 'Fagioli di soia, sale',
        'diet' => 'Vegetariano',
        'course' => 'Antipasto',
        'price' => 5.50
    ],
    [
        'restaurant_id' => 10,
        'name' => 'Gyoza',
        'availability' => 1,
        'ingredient' => 'Pasta di grano, maiale macinato, cavolo cinese, aglio, zenzero',
        'diet' => null,
        'course' => 'Antipasto',
        'price' => 8
    ],

    // Primi
    [
        'restaurant_id' => 10,
        'name' => 'Noodles saltati con verdure',
        'availability' => 1,
        'ingredient' => 'Noodles, verdure miste, salsa di soia',
        'diet' => 'Vegetariano',
        'course' => 'Primo',
        'price' => 9
    ],
    [
        'restaurant_id' => 10,
        'name' => 'Yakisoba',
        'availability' => 1,
        'ingredient' => 'Noodles, carne, verdure, salsa yakisoba',
        'diet' => null,
        'course' => 'Primo',
        'price' => 12
    ],

    // Secondi
    [
        'restaurant_id' => 10,
        'name' => 'Anatra all\'arancia',
        'availability' => 1,
        'ingredient' => 'Anatra, salsa all\'arancia, verdure miste',
        'diet' => null,
        'course' => 'Secondo',
        'price' => 15
    ],
    [
        'restaurant_id' => 10,
        'name' => 'Manzo in salsa piccante',
        'availability' => 1,
        'ingredient' => 'Fettine di manzo, salsa piccante, peperoni, cipolla',
        'diet' => null,
        'course' => 'Secondo',
        'price' => 13
    ],

    // Dolci
    [
        'restaurant_id' => 10,
        'name' => 'Biscotti della fortuna',
        'availability' => 1,
        'ingredient' => 'Farina, zucchero, uova',
        'diet' => null,
        'course' => 'Dessert',
        'price' => 4
    ],
    [
        'restaurant_id' => 10,
        'name' => 'Gelato fritto',
        'availability' => 1,
        'ingredient' => 'Gelato, pastella, olio',
        'diet' => null,
        'course' => 'Dessert',
        'price' => 6.50
    ],
    //# Your Sushi

    // Antipasti
    [
        'restaurant_id' => 11,
        'name' => 'Ravioli al vapore',
        'availability' => 1,
        'ingredient' => 'Pasta di grano, maiale macinato, cavolo cinese, zenzero, salsa di soia',
        'diet' => null,
        'course' => ' ',
        'price' => 7.50
    ],
    [
        'restaurant_id' => 11,
        'name' => 'Gamberi saltati con peperoni',
        'availability' => 1,
        'ingredient' => 'Gamberi, peperoni, salsa di soia, aglio',
        'diet' => null,
        'course' => ' ',
        'price' => 9
    ],

    // Primi
    [
        'restaurant_id' => 11,
        'name' => 'Tagliatelle con verdure',
        'availability' => 1,
        'ingredient' => 'Tagliatelle, verdure miste, salsa di soia',
        'diet' => 'Vegetariano',
        'course' => ' ',
        'price' => 10
    ],
    [
        'restaurant_id' => 11,
        'name' => 'Riso cantonese',
        'availability' => 1,
        'ingredient' => 'Riso, uova, piselli, carote, prosciutto cotto',
        'diet' => null,
        'course' => ' ',
        'price' => 11
    ],
    [
        'restaurant_id' => 11,
        'name' => 'Uramaki California',
        'availability' => 1,
        'ingredient' => 'Riso, avocado, surimi, sesamo',
        'diet' => null,
        'course' => ' ',
        'price' => 14
    ],

    // Secondi
    [
        'restaurant_id' => 11,
        'name' => 'Anatra all\'arancia',
        'availability' => 1,
        'ingredient' => 'Anatra, salsa all\'arancia, verdure miste',
        'diet' => null,
        'course' => ' ',
        'price' => 15
    ],
    [
        'restaurant_id' => 11,
        'name' => 'Pollo alle mandorle',
        'availability' => 1,
        'ingredient' => 'Pollo, mandorle, peperoni, cipolla, salsa di soia',
        'diet' => null,
        'course' => ' ',
        'price' => 13
    ],

    // Dolci
    [
        'restaurant_id' => 11,
        'name' => 'Cheesecake al tè matcha',
        'availability' => 1,
        'ingredient' => 'Biscotti digestive, formaggio cremoso, tè matcha, panna',
        'diet' => null,
        'course' => ' ',
        'price' => 6
    ],
    [
        'restaurant_id' => 11,
        'name' => 'Mochi alla fragola',
        'availability' => 1,
        'ingredient' => 'Mochi, gelato alla fragola',
        'diet' => null,
        'course' => ' ',
        'price' => 5.50
    ],

    //# Panda Market

    // Antipasti
    [
        'restaurant_id' => 12,
        'name' => 'Tempura di verdure',
        'availability' => 1,
        'ingredient' => 'Verdure miste, pastella leggera, salsa ponzu',
        'diet' => 'Vegetariano',
        'course' => ' ',
        'price' => 8
    ],
    [
        'restaurant_id' => 12,
        'name' => 'Involtini primavera',
        'availability' => 1,
        'ingredient' => 'Verdure, gamberetti, involucro croccante, salsa agrodolce',
        'diet' => null,
        'course' => ' ',
        'price' => 9
    ],

    // Primi
    [
        'restaurant_id' => 12,
        'name' => 'Udon al pollo',
        'availability' => 1,
        'ingredient' => 'Udon, pollo, verdure, brodo di pollo',
        'diet' => null,
        'course' => ' ',
        'price' => 11
    ],
    [
        'restaurant_id' => 12,
        'name' => 'Zuppa di miso',
        'availability' => 1,
        'ingredient' => 'Tofu, alghe, miso, cipollotti',
        'diet' => 'Vegetariano',
        'course' => ' ',
        'price' => 10
    ],

    // Secondi
    [
        'restaurant_id' => 12,
        'name' => 'Anatra alla pechinese',
        'availability' => 1,
        'ingredient' => 'Anatra, pancetta, salsa alla pechinese, verdure',
        'diet' => null,
        'course' => ' ',
        'price' => 16
    ],
    [
        'restaurant_id' => 12,
        'name' => 'Gamberoni alla griglia',
        'availability' => 1,
        'ingredient' => 'Gamberoni, aglio, prezzemolo, olio d\'oliva',
        'diet' => null,
        'course' => ' ',
        'price' => 15
    ],

    // Dolci
    [
        'restaurant_id' => 12,
        'name' => 'Tiramisù al tè verde',
        'availability' => 1,
        'ingredient' => 'Biscotti savoiardi, mascarpone, tè verde, cacao',
        'diet' => null,
        'course' => ' ',
        'price' => 7.50
    ],
    [
        'restaurant_id' => 12,
        'name' => 'Gelato al sesamo nero',
        'availability' => 1,
        'ingredient' => 'Sesamo nero, latte, zucchero, panna',
        'diet' => null,
        'course' => ' ',
        'price' => 6.50
    ],

    //# Ciao Zì

    // Antipasti
    [
        'restaurant_id' => 13,
        'name' => 'Tempura di verdure',
        'availability' => 1,
        'ingredient' => 'Verdure miste, pastella leggera, salsa ponzu',
        'diet' => 'Vegetariano',
        'course' => ' ',
        'price' => 8
    ],
    [
        'restaurant_id' => 13,
        'name' => 'Involtini primavera',
        'availability' => 1,
        'ingredient' => 'Verdure, gamberetti, involucro croccante, salsa agrodolce',
        'diet' => null,
        'course' => ' ',
        'price' => 9
    ],

    // Primi
    [
        'restaurant_id' => 13,
        'name' => 'Udon al pollo',
        'availability' => 1,
        'ingredient' => 'Udon, pollo, verdure, brodo di pollo',
        'diet' => null,
        'course' => ' ',
        'price' => 11
    ],
    [
        'restaurant_id' => 13,
        'name' => 'Zuppa di miso',
        'availability' => 1,
        'ingredient' => 'Tofu, alghe, miso, cipollotti',
        'diet' => 'Vegetariano',
        'course' => ' ',
        'price' => 10
    ],

    // Secondi
    [
        'restaurant_id' => 13,
        'name' => 'Anatra alla pechinese',
        'availability' => 1,
        'ingredient' => 'Anatra, pancetta, salsa alla pechinese, verdure',
        'diet' => null,
        'course' => ' ',
        'price' => 16
    ],
    [
        'restaurant_id' => 13,
        'name' => 'Gamberoni alla griglia',
        'availability' => 1,
        'ingredient' => 'Gamberoni, aglio, prezzemolo, olio d\'oliva',
        'diet' => null,
        'course' => ' ',
        'price' => 15
    ],

    // Dolci
    [
        'restaurant_id' => 13,
        'name' => 'Tiramisù al tè verde',
        'availability' => 1,
        'ingredient' => 'Biscotti savoiardi, mascarpone, tè verde, cacao',
        'diet' => null,
        'course' => ' ',
        'price' => 7.50
    ],
    [
        'restaurant_id' => 13,
        'name' => 'Gelato al sesamo nero',
        'availability' => 1,
        'ingredient' => 'Sesamo nero, latte, zucchero, panna',
        'diet' => null,
        'course' => ' ',
        'price' => 6.50
    ],

    //# Zen Sushi

    // Antipasti
    [
        'restaurant_id' => 14,
        'name' => 'Edamame al sesamo',
        'availability' => 1,
        'ingredient' => 'Fagioli di soia, sale marino, sesamo tostato',
        'diet' => 'Vegetariano',
        'course' => ' ',
        'price' => 6
    ],
    [
        'restaurant_id' => 14,
        'name' => 'Tartare di tonno',
        'availability' => 1,
        'ingredient' => 'Tonno fresco, avocado, cipolla rossa, salsa teriyaki',
        'diet' => null,
        'course' => ' ',
        'price' => 12
    ],

    // Primi
    [
        'restaurant_id' => 14,
        'name' => 'Sashimi misto',
        'availability' => 1,
        'ingredient' => 'Pesce fresco assortito, wasabi, salsa di soia',
        'diet' => null,
        'course' => ' ',
        'price' => 18
    ],
    [
        'restaurant_id' => 14,
        'name' => 'Yakisoba con pollo',
        'availability' => 1,
        'ingredient' => 'Noodles, pollo, verdure miste, salsa yakisoba',
        'diet' => null,
        'course' => ' ',
        'price' => 14
    ],

    // Secondi
    [
        'restaurant_id' => 14,
        'name' => 'Tempura di gamberi e verdure',
        'availability' => 1,
        'ingredient' => 'Gamberi, verdure assortite, pastella leggera, salsa tempura',
        'diet' => null,
        'course' => ' ',
        'price' => 16
    ],
    [
        'restaurant_id' => 14,
        'name' => 'Salmone teriyaki',
        'availability' => 1,
        'ingredient' => 'Filetto di salmone, salsa teriyaki, verdure grigliate',
        'diet' => null,
        'course' => ' ',
        'price' => 17
    ],

    // Dolci
    [
        'restaurant_id' => 14,
        'name' => 'Mochi al cioccolato',
        'availability' => 1,
        'ingredient' => 'Mochi, gelato al cioccolato',
        'diet' => null,
        'course' => ' ',
        'price' => 7
    ],
    [
        'restaurant_id' => 14,
        'name' => 'Torta al matcha',
        'availability' => 1,
        'ingredient' => 'Tè matcha, farina di riso, latte di cocco, zucchero',
        'diet' => null,
        'course' => ' ',
        'price' => 8
    ],

    //# Zenzero Fleming

    // Antipasti
    [
        'restaurant_id' => 15,
        'name' => 'Gyoza al vapore',
        'availability' => 1,
        'ingredient' => 'Gyoza di maiale, salsa di soia',
        'diet' => null,
        'course' => ' ',
        'price' => 8
    ],
    [
        'restaurant_id' => 15,
        'name' => 'Tartare di salmone e avocado',
        'availability' => 1,
        'ingredient' => 'Salmone fresco, avocado, salsa ponzu',
        'diet' => null,
        'course' => ' ',
        'price' => 13
    ],

    // Primi
    [
        'restaurant_id' => 15,
        'name' => 'Ramen con maiale alla griglia',
        'availability' => 1,
        'ingredient' => 'Brodo di pollo, noodles ramen, maiale alla griglia, uova sode',
        'diet' => null,
        'course' => ' ',
        'price' => 15
    ],
    [
        'restaurant_id' => 15,
        'name' => 'Uramaki Dragon Roll',
        'availability' => 1,
        'ingredient' => 'Riso, gambero tempura, avocado, salsa unagi, tobiko',
        'diet' => null,
        'course' => ' ',
        'price' => 16
    ],

    // Secondi
    [
        'restaurant_id' => 15,
        'name' => 'Pollo katsu',
        'availability' => 1,
        'ingredient' => 'Petto di pollo impanato, salsa katsu, riso bianco, insalata',
        'diet' => null,
        'course' => ' ',
        'price' => 14
    ],
    [
        'restaurant_id' => 15,
        'name' => 'Tonno scottato con salsa teriyaki',
        'availability' => 1,
        'ingredient' => 'Tonno fresco, salsa teriyaki, verdure grigliate',
        'diet' => null,
        'course' => ' ',
        'price' => 18
    ],

    // Dolci
    [
        'restaurant_id' => 15,
        'name' => 'Cheesecake al mango',
        'availability' => 1,
        'ingredient' => 'Biscotti digestive, formaggio cremoso, purea di mango',
        'diet' => null,
        'course' => ' ',
        'price' => 7
    ],
    [
        'restaurant_id' => 15,
        'name' => 'Gelato al tè verde',
        'availability' => 1,
        'ingredient' => 'Tè verde, latte, zucchero, panna',
        'diet' => null,
        'course' => ' ',
        'price' => 6.50
    ],

    //# New Town

    // Antipasti
    [
        'restaurant_id' => 16,
        'name' => 'Tartare di tonno piccante',
        'availability' => 1,
        'ingredient' => 'Tonno fresco, peperoncino, cipolla rossa, salsa di sesamo piccante',
        'diet' => null,
        'course' => ' ',
        'price' => 12
    ],
    [
        'restaurant_id' => 16,
        'name' => 'Insalata di alghe wakame',
        'availability' => 1,
        'ingredient' => 'Alghe wakame, cetrioli, sesamo, salsa di sesamo',
        'diet' => 'Vegetariano',
        'course' => ' ',
        'price' => 9
    ],

    // Primi
    [
        'restaurant_id' => 16,
        'name' => 'Ramen al curry',
        'availability' => 1,
        'ingredient' => 'Brodo di pollo, noodles ramen, pollo al curry, uova sode',
        'diet' => null,
        'course' => ' ',
        'price' => 14
    ],
    [
        'restaurant_id' => 16,
        'name' => 'Udon ai frutti di mare',
        'availability' => 1,
        'ingredient' => 'Udon, gamberi, calamari, vongole, verdure, brodo dashi',
        'diet' => null,
        'course' => ' ',
        'price' => 16
    ],

    // Secondi
    [
        'restaurant_id' => 16,
        'name' => 'Pollo teriyaki',
        'availability' => 1,
        'ingredient' => 'Petto di pollo, salsa teriyaki, riso bianco, verdure saltate',
        'diet' => null,
        'course' => ' ',
        'price' => 15
    ],
    [
        'restaurant_id' => 16,
        'name' => 'Sushi assortito',
        'availability' => 1,
        'ingredient' => 'Nigiri, sashimi, maki assortiti',
        'diet' => null,
        'course' => ' ',
        'price' => 18
    ],

    // Dolci
    [
        'restaurant_id' => 16,
        'name' => 'Mousse al tè verde',
        'availability' => 1,
        'ingredient' => 'Gelatina di tè verde, panna montata, zucchero',
        'diet' => null,
        'course' => ' ',
        'price' => 7
    ],
    [
        'restaurant_id' => 16,
        'name' => 'Dorayaki alla nutella',
        'availability' => 1,
        'ingredient' => 'Pancake giapponese, crema di nutella',
        'diet' => null,
        'course' => ' ',
        'price' => 6
    ],

    //# Crudo Pokè

    // Pokè Bowls
    [
        'restaurant_id' => 17,
        'name' => 'Pokè di salmone fresco',
        'availability' => 1,
        'ingredient' => 'Salmone fresco a cubetti, avocado, edamame, cipolla rossa, salsa di soia',
        'diet' => null,
        'course' => ' ',
        'price' => 14
    ],
    [
        'restaurant_id' => 17,
        'name' => 'Pokè di tonno piccante',
        'availability' => 1,
        'ingredient' => 'Tonno fresco piccante a cubetti, mango, avocado, peperoncino, salsa piccante',
        'diet' => null,
        'course' => ' ',
        'price' => 15
    ],

    // Contorni
    [
        'restaurant_id' => 17,
        'name' => 'Edamame saltati',
        'availability' => 1,
        'ingredient' => 'Fagioli edamame, aglio, peperoncino, salsa di soia',
        'diet' => 'Vegetariano',
        'course' => ' ',
        'price' => 6
    ],
    [
        'restaurant_id' => 17,
        'name' => 'Insalata di alghe',
        'availability' => 1,
        'ingredient' => 'Alghe wakame, sesamo, cetrioli, salsa di sesamo',
        'diet' => 'Vegetariano',
        'course' => ' ',
        'price' => 7
    ],

    //# Temakinho

    // Antipasti
    [
        'restaurant_id' => 18,
        'name' => 'Gyoza al vapore',
        'availability' => 1,
        'ingredient' => 'Gyoza di maiale, salsa ponzu',
        'diet' => null,
        'course' => ' ',
        'price' => 8
    ],
    [
        'restaurant_id' => 18,
        'name' => 'Tataki di tonno',
        'availability' => 1,
        'ingredient' => 'Tonno fresco, salsa tataki, sesamo',
        'diet' => null,
        'course' => ' ',
        'price' => 12
    ],

    // Primi
    [
        'restaurant_id' => 18,
        'name' => 'Yakisoba di pollo',
        'availability' => 1,
        'ingredient' => 'Noodles soba, pollo, verdure miste, salsa yakisoba',
        'diet' => null,
        'course' => ' ',
        'price' => 15
    ],
    [
        'restaurant_id' => 18,
        'name' => 'Riso alla cantonese',
        'availability' => 1,
        'ingredient' => 'Riso, uova, piselli, carote, prosciutto cotto',
        'diet' => null,
        'course' => ' ',
        'price' => 13
    ],

    // Secondi
    [
        'restaurant_id' => 18,
        'name' => 'Salmone teriyaki',
        'availability' => 1,
        'ingredient' => 'Filetto di salmone, salsa teriyaki, verdure grigliate',
        'diet' => null,
        'course' => ' ',
        'price' => 17
    ],
    [
        'restaurant_id' => 18,
        'name' => 'Pollo katsu',
        'availability' => 1,
        'ingredient' => 'Petto di pollo impanato, salsa katsu, riso bianco, insalata',
        'diet' => null,
        'course' => ' ',
        'price' => 16
    ],

    // Dolci
    [
        'restaurant_id' => 18,
        'name' => 'Cheesecake giapponese',
        'availability' => 1,
        'ingredient' => 'Formaggio cremoso, biscotti digestive, marmellata di frutti di bosco',
        'diet' => null,
        'course' => ' ',
        'price' => 7
    ],
    [
        'restaurant_id' => 18,
        'name' => 'Mochi alla fragola',
        'availability' => 1,
        'ingredient' => 'Mochi, gelato alla fragola',
        'diet' => null,
        'course' => ' ',
        'price' => 6
    ],

    //# Ravioleria Baozi

    // Baozi
    [
        'restaurant_id' => 19,
        'name' => 'Baozi al vapore con ripieno di maiale',
        'availability' => 1,
        'ingredient' => 'Pasta al vapore, maiale macinato, cipolla verde, salsa di soia',
        'diet' => null,
        'course' => ' ',
        'price' => 3.50
    ],
    [
        'restaurant_id' => 19,
        'name' => 'Baozi fritto con ripieno di verdure',
        'availability' => 1,
        'ingredient' => 'Pasta fritta, verdure miste, salsa agrodolce',
        'diet' => 'Vegetariano',
        'course' => ' ',
        'price' => 4
    ],
    [
        'restaurant_id' => 19,
        'name' => 'Baozi alla griglia con ripieno di gamberetti',
        'availability' => 1,
        'ingredient' => 'Pasta alla griglia, gamberetti, peperoni, cipolla, salsa piccante',
        'diet' => null,
        'course' => ' ',
        'price' => 5
    ],
    [
        'restaurant_id' => 19,
        'name' => 'Baozi al vapore con ripieno di funghi e tofu',
        'availability' => 1,
        'ingredient' => 'Pasta al vapore, funghi misti, tofu, cipolla, salsa di soia',
        'diet' => 'Vegetariano',
        'course' => ' ',
        'price' => 4.50
    ],

    //~ Ristoranti Indiani

    //# Saravanaa Bhavan

    // Antipasti
    [
        'restaurant_id' => 20,
        'name' => 'Samosa',
        'availability' => 1,
        'ingredient' => 'Patate, piselli, spezie, pasta sfoglia',
        'diet' => 'Vegetariano',
        'course' => ' ',
        'price' => 4
    ],
    [
        'restaurant_id' => 20,
        'name' => 'Paneer Tikka',
        'availability' => 1,
        'ingredient' => 'Paneer (formaggio indiano), peperoni, cipolla, spezie',
        'diet' => null,
        'course' => ' ',
        'price' => 6
    ],

    // Piatti principali - Vegetariani
    [
        'restaurant_id' => 20,
        'name' => 'Palak Paneer',
        'availability' => 1,
        'ingredient' => 'Paneer, spinaci, pomodori, spezie',
        'diet' => 'Vegetariano',
        'course' => ' ',
        'price' => 10
    ],
    [
        'restaurant_id' => 20,
        'name' => 'Aloo Gobi',
        'availability' => 1,
        'ingredient' => 'Patate, cavolfiore, pomodori, spezie',
        'diet' => 'Vegetariano',
        'course' => ' ',
        'price' => 9
    ],

    // Piatti principali - Non vegetariani
    [
        'restaurant_id' => 20,
        'name' => 'Chicken Tikka Masala',
        'availability' => 1,
        'ingredient' => 'Pollo, salsa di pomodoro, panna, spezie',
        'diet' => null,
        'course' => ' ',
        'price' => 14
    ],
    [
        'restaurant_id' => 20,
        'name' => 'Lamb Rogan Josh',
        'availability' => 1,
        'ingredient' => 'Agnello, yogurt, spezie',
        'diet' => null,
        'course' => ' ',
        'price' => 16
    ],

    // Dolci
    [
        'restaurant_id' => 20,
        'name' => 'Gulab Jamun',
        'availability' => 1,
        'ingredient' => 'Palle dolci fritte, sciroppo di zucchero, cardamomo',
        'diet' => null,
        'course' => ' ',
        'price' => 5
    ],
    [
        'restaurant_id' => 20,
        'name' => 'Kheer',
        'availability' => 1,
        'ingredient' => 'Riso, latte, zucchero, cardamomo, pistacchi',
        'diet' => 'Vegetariano',
        'course' => ' ',
        'price' => 4
    ],

    //# Himalaya's Kashmir

    // Antipasti
    [
        'restaurant_id' => 21,
        'name' => 'Samosa di verdure',
        'availability' => 1,
        'ingredient' => 'Patate, piselli, carote, pasta sfoglia',
        'diet' => 'Vegetariano',
        'course' => ' ',
        'price' => 4.50
    ],
    [
        'restaurant_id' => 21,
        'name' => 'Pakora di pollo',
        'availability' => 1,
        'ingredient' => 'Pollo marinato, pastella di ceci, spezie',
        'diet' => null,
        'course' => ' ',
        'price' => 6
    ],

    // Piatti principali - Vegetariani
    [
        'restaurant_id' => 21,
        'name' => 'Saag Paneer',
        'availability' => 1,
        'ingredient' => 'Spinaci, paneer, pomodori, spezie',
        'diet' => 'Vegetariano',
        'course' => ' ',
        'price' => 11
    ],
    [
        'restaurant_id' => 21,
        'name' => 'Aloo Baingan',
        'availability' => 1,
        'ingredient' => 'Patate, melanzane, pomodori, spezie',
        'diet' => 'Vegetariano',
        'course' => ' ',
        'price' => 10
    ],

    // Piatti principali - Non vegetariani
    [
        'restaurant_id' => 21,
        'name' => 'Mutton Rogan Josh',
        'availability' => 1,
        'ingredient' => 'Agnello, yogurt, spezie',
        'diet' => null,
        'course' => ' ',
        'price' => 16
    ],
    [
        'restaurant_id' => 21,
        'name' => 'Tandoori Chicken',
        'availability' => 1,
        'ingredient' => 'Pollo marinato con yogurt e spezie, cotto al forno tandoor',
        'diet' => null,
        'course' => ' ',
        'price' => 14
    ],

    // Dolci
    [
        'restaurant_id' => 21,
        'name' => 'Gulab Jamun',
        'availability' => 1,
        'ingredient' => 'Palle dolci fritte, sciroppo di zucchero, cardamomo',
        'diet' => null,
        'course' => ' ',
        'price' => 5.50
    ],
    [
        'restaurant_id' => 21,
        'name' => 'Kheer',
        'availability' => 1,
        'ingredient' => 'Riso, latte, zucchero, cardamomo, pistacchi',
        'diet' => 'Vegetariano',
        'course' => ' ',
        'price' => 4.50
    ],

    //# Tiger Tandoori

    // Antipasti
    [
        'restaurant_id' => 22,
        'name' => 'Pakora di verdure',
        'availability' => 1,
        'ingredient' => 'Verdure miste, pastella di ceci, spezie',
        'diet' => 'Vegetariano',
        'course' => ' ',
        'price' => 5
    ],
    [
        'restaurant_id' => 22,
        'name' => 'Tandoori Wings',
        'availability' => 1,
        'ingredient' => 'Ali di pollo marinate, spezie, cottura al forno tandoor',
        'diet' => null,
        'course' => ' ',
        'price' => 7
    ],

    // Piatti principali - Vegetariani
    [
        'restaurant_id' => 22,
        'name' => 'Paneer Tikka Masala',
        'availability' => 1,
        'ingredient' => 'Paneer, salsa di pomodoro, panna, spezie',
        'diet' => 'Vegetariano',
        'course' => ' ',
        'price' => 12
    ],
    [
        'restaurant_id' => 22,
        'name' => 'Baingan Bharta',
        'availability' => 1,
        'ingredient' => 'Melanzane, pomodori, cipolle, spezie',
        'diet' => 'Vegetariano',
        'course' => ' ',
        'price' => 10
    ],

    // Piatti principali - Non vegetariani
    [
        'restaurant_id' => 22,
        'name' => 'Chicken Biryani',
        'availability' => 1,
        'ingredient' => 'Pollo, riso basmati, spezie, aromi',
        'diet' => null,
        'course' => ' ',
        'price' => 15
    ],
    [
        'restaurant_id' => 22,
        'name' => 'Tandoori Fish Tikka',
        'availability' => 1,
        'ingredient' => 'Filetto di pesce marinato, spezie, cottura al forno tandoor',
        'diet' => null,
        'course' => ' ',
        'price' => 16
    ],

    // Dolci
    [
        'restaurant_id' => 22,
        'name' => 'Gajar Halwa',
        'availability' => 1,
        'ingredient' => 'Carote, latte, zucchero, burro, frutta secca',
        'diet' => 'Vegetariano',
        'course' => ' ',
        'price' => 6
    ],
    [
        'restaurant_id' => 22,
        'name' => 'Rasmalai',
        'availability' => 1,
        'ingredient' => 'Palle di latte cagliato, zucchero, cardamomo, mandorle',
        'diet' => 'Vegetariano',
        'course' => ' ',
        'price' => 5
    ],

    //# New Delhi

    // Antipasti
    [
        'restaurant_id' => 23,
        'name' => 'Pakora di cipolle',
        'availability' => 1,
        'ingredient' => 'Cipolle, pastella di ceci, spezie',
        'diet' => 'Vegetariano',
        'course' => ' ',
        'price' => 4.50
    ],
    [
        'restaurant_id' => 23,
        'name' => 'Paneer Pakora',
        'availability' => 1,
        'ingredient' => 'Paneer, pastella di ceci, spezie',
        'diet' => 'Vegetariano',
        'course' => ' ',
        'price' => 6
    ],

    // Piatti principali - Vegetariani
    [
        'restaurant_id' => 23,
        'name' => 'Chole',
        'availability' => 1,
        'ingredient' => 'Ceci, pomodori, cipolle, spezie',
        'diet' => 'Vegetariano',
        'course' => ' ',
        'price' => 9
    ],
    [
        'restaurant_id' => 23,
        'name' => 'Baingan Masala',
        'availability' => 1,
        'ingredient' => 'Melanzane, pomodori, cipolle, spezie',
        'diet' => 'Vegetariano',
        'course' => ' ',
        'price' => 10
    ],

    // Piatti principali - Non vegetariani
    [
        'restaurant_id' => 23,
        'name' => 'Chicken Curry',
        'availability' => 1,
        'ingredient' => 'Pollo, salsa di pomodoro, yogurt, spezie',
        'diet' => null,
        'course' => ' ',
        'price' => 14
    ],
    [
        'restaurant_id' => 23,
        'name' => 'Lamb Biryani',
        'availability' => 1,
        'ingredient' => 'Agnello, riso basmati, spezie, aromi',
        'diet' => null,
        'course' => ' ',
        'price' => 16
    ],

    // Dolci
    [
        'restaurant_id' => 23,
        'name' => 'Gulab Jamun',
        'availability' => 1,
        'ingredient' => 'Palle dolci fritte, sciroppo di zucchero, cardamomo',
        'diet' => null,
        'course' => ' ',
        'price' => 5
    ],
    [
        'restaurant_id' => 23,
        'name' => 'Kulfi',
        'availability' => 1,
        'ingredient' => 'Gelato indiano, frutta secca, saffron',
        'diet' => 'Vegetariano',
        'course' => ' ',
        'price' => 4
    ],

    //# Samoseria

    // Samosa
    [
        'restaurant_id' => 24,
        'name' => 'Samosa al ceci',
        'availability' => 1,
        'ingredient' => 'Patate, ceci, cipolle, spezie',
        'diet' => 'Vegetariano',
        'course' => ' ',
        'price' => 3
    ],
    [
        'restaurant_id' => 24,
        'name' => 'Samosa al pollo',
        'availability' => 1,
        'ingredient' => 'Pollo, piselli, cipolle, spezie',
        'diet' => null,
        'course' => ' ',
        'price' => 4
    ],
    [
        'restaurant_id' => 24,
        'name' => 'Samosa vegetariana mista',
        'availability' => 1,
        'ingredient' => 'Patate, piselli, carote, cipolle, spezie',
        'diet' => 'Vegetariano',
        'course' => ' ',
        'price' => 3.50
    ],
    [
        'restaurant_id' => 24,
        'name' => 'Samosa di agnello',
        'availability' => 1,
        'ingredient' => 'Agnello, patate, cipolle, spezie',
        'diet' => null,
        'course' => ' ',
        'price' => 5
    ],

    // Contorni
    [
        'restaurant_id' => 24,
        'name' => 'Chutney di menta',
        'availability' => 1,
        'ingredient' => 'Menta, yogurt, spezie',
        'diet' => 'Vegetariano',
        'course' => ' ',
        'price' => 2
    ],
    [
        'restaurant_id' => 24,
        'name' => 'Raita',
        'availability' => 1,
        'ingredient' => 'Yogurt, cetrioli, pomodori, spezie',
        'diet' => 'Vegetariano',
        'course' => ' ',
        'price' => 2.50
    ],

    //~ Ristoranti Messicani

    //# Billy Tacos

    // Antipasti
    [
        'restaurant_id' => 25,
        'name' => 'Nachos con formaggio fuso',
        'availability' => 1,
        'ingredient' => 'Tortilla chips, formaggio fuso, jalapenos',
        'diet' => null,
        'course' => ' ',
        'price' => 6
    ],
    // Piatti principali
    [
        'restaurant_id' => 25,
        'name' => 'Taco al pastor',
        'availability' => 1,
        'ingredient' => 'Maiale marinato, ananas, cipolle, coriandolo',
        'diet' => null,
        'course' => ' ',
        'price' => 3.50
    ],
    [
        'restaurant_id' => 25,
        'name' => 'Burrito di carne asada',
        'availability' => 1,
        'ingredient' => 'Manzo alla griglia, fagioli, riso, formaggio, salsa',
        'diet' => null,
        'course' => ' ',
        'price' => 8
    ],
    // Dolci
    [
        'restaurant_id' => 25,
        'name' => 'Churros con cioccolato',
        'availability' => 1,
        'ingredient' => 'Pasta fritta, zucchero, cannella, cioccolato caldo',
        'diet' => null,
        'course' => ' ',
        'price' => 5
    ],

    //# Taco Libre

    // Antipasti
    [
        'restaurant_id' => 26,
        'name' => 'Guacamole con chips di mais',
        'availability' => 1,
        'ingredient' => 'Avocado, pomodoro, cipolla, lime, coriandolo',
        'diet' => 'Vegetariano',
        'course' => ' ',
        'price' => 7
    ],
    // Piatti principali
    [
        'restaurant_id' => 26,
        'name' => 'Taco al pastor',
        'availability' => 1,
        'ingredient' => 'Maiale marinato, ananas, cipolle, coriandolo',
        'diet' => null,
        'course' => ' ',
        'price' => 3
    ],
    [
        'restaurant_id' => 26,
        'name' => 'Enchiladas de pollo',
        'availability' => 1,
        'ingredient' => 'Pollo, tortilla di mais, salsa rossa, formaggio',
        'diet' => null,
        'course' => ' ',
        'price' => 9
    ],
    // Dolci
    [
        'restaurant_id' => 26,
        'name' => 'Flan al caramello',
        'availability' => 1,
        'ingredient' => 'Uova, latte, zucchero, vaniglia, caramello',
        'diet' => null,
        'course' => ' ',
        'price' => 6
    ],

    //# The Mexican

    // Antipasti
    [
        'restaurant_id' => 27,
        'name' => 'Guacamole fresco',
        'availability' => 1,
        'ingredient' => 'Avocado, pomodoro, cipolla, lime, coriandolo',
        'diet' => 'Vegetariano',
        'course' => ' ',
        'price' => 8
    ],
    // Piatti principali
    [
        'restaurant_id' => 27,
        'name' => 'Fajitas di manzo',
        'availability' => 1,
        'ingredient' => 'Manzo, peperoni, cipolle, salsa, tortillas',
        'diet' => null,
        'course' => ' ',
        'price' => 12
    ],
    [
        'restaurant_id' => 27,
        'name' => 'Tacos al pastor',
        'availability' => 1,
        'ingredient' => 'Maiale marinato, ananas, cipolle, coriandolo',
        'diet' => null,
        'course' => ' ',
        'price' => 3.50
    ],
    // Dolci
    [
        'restaurant_id' => 27,
        'name' => 'Pastel de tres leches',
        'availability' => 1,
        'ingredient' => 'Torta imbevuta di tre tipi di latte, panna montata',
        'diet' => null,
        'course' => ' ',
        'price' => 7
    ],

    //# Casa Quesadillas

    // Antipasti
    [
        'restaurant_id' => 28,
        'name' => 'Chips e salsa',
        'availability' => 1,
        'ingredient' => 'Tortilla chips, salsa di pomodoro',
        'diet' => 'Vegetariano',
        'course' => ' ',
        'price' => 4
    ],
    // Piatti principali
    [
        'restaurant_id' => 28,
        'name' => 'Quesadilla di pollo',
        'availability' => 1,
        'ingredient' => 'Tortilla di farina, pollo, formaggio, peperoni',
        'diet' => null,
        'course' => ' ',
        'price' => 7
    ],
    [
        'restaurant_id' => 28,
        'name' => 'Burrito di fagioli neri',
        'availability' => 1,
        'ingredient' => 'Fagioli neri, riso, formaggio, salsa',
        'diet' => 'Vegetariano',
        'course' => ' ',
        'price' => 8
    ],
    // Dolci
    [
        'restaurant_id' => 28,
        'name' => 'Tres leches cake',
        'availability' => 1,
        'ingredient' => 'Torta imbevuta di tre tipi di latte, panna montata',
        'diet' => null,
        'course' => ' ',
        'price' => 6
    ],

    //#Tacos King

    // Antipasti
    [
        'restaurant_id' => 29,
        'name' => 'Tortilla chips con salsa guacamole',
        'availability' => 1,
        'ingredient' => 'Tortilla chips, avocado, pomodoro, cipolla, lime',
        'diet' => 'Vegetariano',
        'course' => ' ',
        'price' => 6
    ],
    // Piatti principali
    [
        'restaurant_id' => 29,
        'name' => 'Tacos al pastor',
        'availability' => 1,
        'ingredient' => 'Maiale marinato, ananas, cipolle, coriandolo',
        'diet' => null,
        'course' => ' ',
        'price' => 3.50
    ],
    [
        'restaurant_id' => 29,
        'name' => 'Burrito di pollo',
        'availability' => 1,
        'ingredient' => 'Pollo, fagioli, riso, formaggio, salsa',
        'diet' => null,
        'course' => ' ',
        'price' => 8
    ],
    // Dolci
    [
        'restaurant_id' => 29,
        'name' => 'Tres leches cake',
        'availability' => 1,
        'ingredient' => 'Torta imbevuta di tre tipi di latte, panna montata',
        'diet' => null,
        'course' => ' ',
        'price' => 7
    ],

    //~ Ristoranti Siriani

    //# Shawarma Express
    // Antipasti
    [
        'restaurant_id' => 30,
        'name' => 'Hummus con pita',
        'availability' => 1,
        'ingredient' => 'Ceci, tahini, aglio, limone, olio d\'oliva',
        'diet' => 'Vegetariano',
        'course' => ' ',
        'price' => 5
    ],
    // Piatti principali
    [
        'restaurant_id' => 30,
        'name' => 'Shawarma di pollo',
        'availability' => 1,
        'ingredient' => 'Pollo marinato, insalata, salsa tahini, pane pita',
        'diet' => null,
        'course' => ' ',
        'price' => 8
    ],
    [
        'restaurant_id' => 30,
        'name' => 'Falafel wrap',
        'availability' => 1,
        'ingredient' => 'Falafel, insalata, salsa tahini, pane pita',
        'diet' => 'Vegetariano',
        'course' => ' ',
        'price' => 7
    ],
    // Dolci
    [
        'restaurant_id' => 30,
        'name' => 'Baklava',
        'availability' => 1,
        'ingredient' => 'Pasta fillo, noci, miele',
        'diet' => null,
        'course' => ' ',
        'price' => 4
    ],

    //# Damas Kebab

    [
        'restaurant_id' => 31,
        'name' => 'Mutabbal',
        'availability' => 1,
        'ingredient' => 'Melanzane grigliate, tahini, aglio, limone, olio d\'oliva',
        'diet' => 'Vegetariano',
        'course' => ' ',
        'price' => 6
    ],
    // Piatti principali
    [
        'restaurant_id' => 31,
        'name' => 'Kebab di agnello',
        'availability' => 1,
        'ingredient' => 'Agnello macinato, spezie, pane pita',
        'diet' => null,
        'course' => ' ',
        'price' => 10
    ],
    [
        'restaurant_id' => 31,
        'name' => 'Kafta wrap',
        'availability' => 1,
        'ingredient' => 'Kafta (polpettone di carne macinata), insalata, pane pita',
        'diet' => null,
        'course' => ' ',
        'price' => 9
    ],
    // Dolci
    [
        'restaurant_id' => 31,
        'name' => 'Halva',
        'availability' => 1,
        'ingredient' => 'Tahini, zucchero, vaniglia',
        'diet' => 'Vegetariano',
        'course' => ' ',
        'price' => 5
    ],

    //~ Ristoranti Africani

    //# Blackalicious Afrofood

    // Antipasti
    [
        'restaurant_id' => 32,
        'name' => 'Sambusa di carne',
        'availability' => 1,
        'ingredient' => 'Carne macinata, cipolla, spezie, pasta brick',
        'diet' => null,
        'course' => ' ',
        'price' => 4
    ],
    // Piatti principali
    [
        'restaurant_id' => 32,
        'name' => 'Jollof rice con pollo',
        'availability' => 1,
        'ingredient' => 'Riso, pollo, pomodoro, cipolla, peperoni, spezie',
        'diet' => null,
        'course' => ' ',
        'price' => 12
    ],
    [
        'restaurant_id' => 32,
        'name' => 'Fufu con zuppa di verdure',
        'availability' => 1,
        'ingredient' => 'Fufu (pasta di farina di mais e igname), verdure miste, brodo',
        'diet' => 'Vegetariano',
        'course' => ' ',
        'price' => 10
    ],
    // Dolci
    [
        'restaurant_id' => 32,
        'name' => 'Puff Puff',
        'availability' => 1,
        'ingredient' => 'Impasto di farina, lievito, zucchero, olio di palma',
        'diet' => 'Vegetariano',
        'course' => ' ',
        'price' => 5
    ],

    //# Afrik Cavour

    // Antipasti
    [
        'restaurant_id' => 33,
        'name' => 'Kelewele',
        'availability' => 1,
        'ingredient' => 'Banane, pepe di giamaica, zenzero, aglio, olio di palma',
        'diet' => 'Vegetariano',
        'course' => ' ',
        'price' => 6
    ],
    // Piatti principali
    [
        'restaurant_id' => 33,
        'name' => 'Suya di manzo',
        'availability' => 1,
        'ingredient' => 'Manzo marinato, spezie, arachidi tostate',
        'diet' => null,
        'course' => ' ',
        'price' => 14
    ],
    [
        'restaurant_id' => 33,
        'name' => 'Jollof rice con gamberi',
        'availability' => 1,
        'ingredient' => 'Riso, gamberi, pomodoro, cipolla, peperoni, spezie',
        'diet' => null,
        'course' => ' ',
        'price' => 15
    ],
    // Dolci
    [
        'restaurant_id' => 33,
        'name' => 'Chin Chin',
        'availability' => 1,
        'ingredient' => 'Farina, burro, uova, zucchero, latte',
        'diet' => 'Vegetariano',
        'course' => ' ',
        'price' => 7
    ],

    //~ Ristoranti Thailandesi

    //# Isola Puket

    // Antipasti
    [
        'restaurant_id' => 34,
        'name' => 'Tom Yum Goong',
        'availability' => 1,
        'ingredient' => 'Gamberetti, funghi, erba cipollina, peperoncino, lime',
        'diet' => null,
        'course' => ' ',
        'price' => 10
    ],
    // Piatti principali
    [
        'restaurant_id' => 34,
        'name' => 'Pad Thai',
        'availability' => 1,
        'ingredient' => 'Tagliatelle di riso, gamberetti, tofu, uova, arachidi',
        'diet' => null,
        'course' => ' ',
        'price' => 12
    ],
    [
        'restaurant_id' => 34,
        'name' => 'Massaman Curry di manzo',
        'availability' => 1,
        'ingredient' => 'Manzo, patate, arachidi, curry, latte di cocco',
        'diet' => null,
        'course' => ' ',
        'price' => 15
    ],
    // Dolci
    [
        'restaurant_id' => 34,
        'name' => 'Mango Sticky Rice',
        'availability' => 1,
        'ingredient' => 'Riso glutinoso, mango maturo, latte di cocco, zucchero',
        'diet' => 'Vegetariano',
        'course' => ' ',
        'price' => 8
    ],

    //# Bussarakham

    // Antipasti
    [
        'restaurant_id' => 35,
        'name' => 'Som Tam',
        'availability' => 1,
        'ingredient' => 'Papaya verde, pomodoro, arachidi, fagiolini, peperoncino',
        'diet' => 'Vegetariano',
        'course' => ' ',
        'price' => 9
    ],
    // Piatti principali
    [
        'restaurant_id' => 35,
        'name' => 'Pad See Ew con pollo',
        'availability' => 1,
        'ingredient' => 'Tagliatelle di riso, pollo, broccoli, cavolo cinese, salsa di soia',
        'diet' => null,
        'course' => ' ',
        'price' => 13
    ],
    [
        'restaurant_id' => 35,
        'name' => 'Gai Med Ma Muang',
        'availability' => 1,
        'ingredient' => 'Pollo, anacardi, peperoni, cipolle, salsa di ostriche',
        'diet' => null,
        'course' => ' ',
        'price' => 14
    ],
    // Dolci
    [
        'restaurant_id' => 35,
        'name' => 'Khanom Mo Kaeng',
        'availability' => 1,
        'ingredient' => 'Farina di riso, latte di cocco, zucchero, uova',
        'diet' => 'Vegetariano',
        'course' => ' ',
        'price' => 7
    ],

    //# Bin Hai

    // Antipasti
    [
        'restaurant_id' => 36,
        'name' => 'Satay di pollo',
        'availability' => 1,
        'ingredient' => 'Spiedini di pollo marinato, salsa di arachidi',
        'diet' => null,
        'course' => ' ',
        'price' => 8
    ],
    // Piatti principali
    [
        'restaurant_id' => 36,
        'name' => 'Tom Kha Gai',
        'availability' => 1,
        'ingredient' => 'Pollo, funghi, citronella, galanga, lime, latte di cocco',
        'diet' => null,
        'course' => ' ',
        'price' => 11
    ],
    [
        'restaurant_id' => 36,
        'name' => 'Pad Kra Pao Moo',
        'availability' => 1,
        'ingredient' => 'Maiale tritato, basilico, peperoncino, aglio, salsa di soia',
        'diet' => null,
        'course' => ' ',
        'price' => 12
    ],
    // Dolci
    [
        'restaurant_id' => 36,
        'name' => 'Khanom Krok',
        'availability' => 1,
        'ingredient' => 'Farina di riso, latte di cocco, zucchero di palma',
        'diet' => 'Vegetariano',
        'course' => ' ',
        'price' => 6
    ],

    //# Siam Cuisine

    // Antipasti
    [
        'restaurant_id' => 37,
        'name' => 'Tod Mun Pla',
        'availability' => 1,
        'ingredient' => 'Polpettine di pesce, curry rosso, fagiolini, lime',
        'diet' => null,
        'course' => ' ',
        'price' => 10
    ],
    // Piatti principali
    [
        'restaurant_id' => 37,
        'name' => 'Khao Pad Gai',
        'availability' => 1,
        'ingredient' => 'Riso fritto, pollo, uova, cipolle, piselli, salsa di soia',
        'diet' => null,
        'course' => ' ',
        'price' => 11
    ],
    [
        'restaurant_id' => 37,
        'name' => 'Gaeng Keow Wan Gai',
        'availability' => 1,
        'ingredient' => 'Pollo, curry verde, melanzane, peperoni, basilico, latte di cocco',
        'diet' => null,
        'course' => ' ',
        'price' => 14
    ],
    // Dolci
    [
        'restaurant_id' => 37,
        'name' => 'Kluay Buat Chi',
        'availability' => 1,
        'ingredient' => 'Banana, latte di cocco, zucchero, sale',
        'diet' => 'Vegetariano',
        'course' => ' ',
        'price' => 8
    ],

    //# Thai Inn

    // Antipasti
    [
        'restaurant_id' => 38,
        'name' => 'Yam Pla Duk Fu',
        'availability' => 1,
        'ingredient' => 'Insalata di pesce gatto croccante, mango, cipolla, peperoncino, menta',
        'diet' => null,
        'course' => ' ',
        'price' => 9
    ],
    // Piatti principali
    [
        'restaurant_id' => 38,
        'name' => 'Khao Soi Gai',
        'availability' => 1,
        'ingredient' => 'Tagliatelle di uova, pollo, curry giallo, cipolle fritte, lime',
        'diet' => null,
        'course' => ' ',
        'price' => 12
    ],
    [
        'restaurant_id' => 38,
        'name' => 'Pla Rad Prik',
        'availability' => 1,
        'ingredient' => 'Pesce fritto, salsa di peperoncino dolce, basilico, cipolla',
        'diet' => null,
        'course' => ' ',
        'price' => 15
    ],
    // Dolci
    [
        'restaurant_id' => 38,
        'name' => 'Tako',
        'availability' => 1,
        'ingredient' => 'Pudding di tapioca, latte di cocco, mais dolce',
        'diet' => 'Vegetariano',
        'course' => ' ',
        'price' => 7
    ],

    //~ Ristoranti Brasiliani

    //# Brazilian Food

    // Antipasti
    [
        'restaurant_id' => 39,
        'name' => 'Tom Yum Goong',
        'availability' => 1,
        'ingredient' => 'Gamberetti, funghi, erba cipollina, peperoncino, lime',
        'diet' => null,
        'course' => ' ',
        'price' => 10
    ],
    // Piatti principali
    [
        'restaurant_id' => 39,
        'name' => 'Pad Thai',
        'availability' => 1,
        'ingredient' => 'Tagliatelle di riso, gamberetti, tofu, uova, arachidi',
        'diet' => null,
        'course' => ' ',
        'price' => 12
    ],
    [
        'restaurant_id' => 39,
        'name' => 'Massaman Curry di manzo',
        'availability' => 1,
        'ingredient' => 'Manzo, patate, arachidi, curry, latte di cocco',
        'diet' => null,
        'course' => ' ',
        'price' => 15
    ],
    // Dolci
    [
        'restaurant_id' => 39,
        'name' => 'Mango Sticky Rice',
        'availability' => 1,
        'ingredient' => 'Riso glutinoso, mango maturo, latte di cocco, zucchero',
        'diet' => 'Vegetariano',
        'course' => ' ',
        'price' => 8
    ],

    //# Manioka

    // Antipasti
    [
        'restaurant_id' => 40,
        'name' => 'Som Tam',
        'availability' => 1,
        'ingredient' => 'Papaya verde, pomodoro, arachidi, fagiolini, peperoncino',
        'diet' => 'Vegetariano',
        'course' => ' ',
        'price' => 9
    ],
    // Piatti principali
    [
        'restaurant_id' => 40,
        'name' => 'Pad See Ew con pollo',
        'availability' => 1,
        'ingredient' => 'Tagliatelle di riso, pollo, broccoli, cavolo cinese, salsa di soia',
        'diet' => null,
        'course' => ' ',
        'price' => 13
    ],
    [
        'restaurant_id' => 40,
        'name' => 'Gai Med Ma Muang',
        'availability' => 1,
        'ingredient' => 'Pollo, anacardi, peperoni, cipolle, salsa di ostriche',
        'diet' => null,
        'course' => ' ',
        'price' => 14
    ],
    // Dolci
    [
        'restaurant_id' => 40,
        'name' => 'Khanom Mo Kaeng',
        'availability' => 1,
        'ingredient' => 'Farina di riso, latte di cocco, zucchero, uova',
        'diet' => 'Vegetariano',
        'course' => ' ',
        'price' => 7
    ],

    //~ Ristoranti Turchi

    //# Turkish Kebab

    // Antipasti
    [
        'restaurant_id' => 42,
        'name' => 'Cig Köfte',
        'availability' => 1,
        'ingredient' => 'Carne macinata, bulgur, peperoncino, spezie',
        'diet' => null,
        'course' => ' ',
        'price' => 9
    ],
    // Piatti principali
    [
        'restaurant_id' => 42,
        'name' => 'Lahmacun',
        'availability' => 1,
        'ingredient' => 'Base di pizza sottile, carne macinata, cipolla, pomodoro, prezzemolo',
        'diet' => null,
        'course' => ' ',
        'price' => 10
    ],
    [
        'restaurant_id' => 42,
        'name' => 'Shish Kebab',
        'availability' => 1,
        'ingredient' => 'Spiedini di carne di agnello marinata, peperoni, cipolla',
        'diet' => null,
        'course' => ' ',
        'price' => 16
    ],
    // Dolci
    [
        'restaurant_id' => 42,
        'name' => 'Künefe',
        'availability' => 1,
        'ingredient' => 'Pasta fillo, formaggio, sciroppo di zucchero',
        'diet' => 'Vegetariano',
        'course' => ' ',
        'price' => 10
    ],

    //# Furious Kebab

    // Antipasti
    [
        'restaurant_id' => 42,
        'name' => 'Cig Köfte',
        'availability' => 1,
        'ingredient' => 'Carne macinata, bulgur, peperoncino, spezie',
        'diet' => null,
        'course' => ' ',
        'price' => 9
    ],
    // Piatti principali
    [
        'restaurant_id' => 42,
        'name' => 'Lahmacun',
        'availability' => 1,
        'ingredient' => 'Base di pizza sottile, carne macinata, cipolla, pomodoro, prezzemolo',
        'diet' => null,
        'course' => ' ',
        'price' => 10
    ],
    [
        'restaurant_id' => 42,
        'name' => 'Shish Kebab',
        'availability' => 1,
        'ingredient' => 'Spiedini di carne di agnello marinata, peperoni, cipolla',
        'diet' => null,
        'course' => ' ',
        'price' => 16
    ],
    // Dolci
    [
        'restaurant_id' => 42,
        'name' => 'Künefe',
        'availability' => 1,
        'ingredient' => 'Pasta fillo, formaggio, sciroppo di zucchero',
        'diet' => 'Vegetariano',
        'course' => ' ',
        'price' => 10
    ],
];