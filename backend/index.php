<?php

require_once __DIR__ . '/core/vendor/autoload.php';

use App\Classes\AllSettings;
use App\Classes\Region;
use App\Classes\Fuel;
use App\Classes\Tarif;

$regions = [
    new Region('Region 1', 'region_1', 1200),
    new Region('Region 2', 'region_2', 800),
    new Region('Region 3', 'region_3', 500)
];

$fuels = [
    new Fuel('Бензин', 'benzin', 500200, [
        new Tarif('Эконом', 'econom', [ 0, 100 ]),
        new Tarif('Избранный', 'izbran', [ 101, 300 ]),
        new Tarif('Премиум', 'premium', [ 301, '*' ]),
    ]),
    new Fuel('Газ', 'gaz', 200100, [
        new Tarif('Эконом', 'econom', [ 0, 200 ]),
        new Tarif('Избранный', 'izbran', [ 201, 700 ]),
        new Tarif('Премиум', 'premium', [ 701, '*' ]),
    ]),
    new Fuel('ДТ', 'dt', 320700, [
        new Tarif('Эконом', 'econom', [ 0, 150 ]),
        new Tarif('Избранный', 'izbran', [ 151, 350 ]),
        new Tarif('Премиум', 'premium', [ 351, '*' ]),
    ])
];

$settings = new AllSettings($regions, $fuels);

dd($settings);