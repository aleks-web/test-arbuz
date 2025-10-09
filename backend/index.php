<?php

require_once __DIR__ . '/core/vendor/autoload.php';

use App\Classes\AllSettings;
use App\Classes\Region;
use App\Classes\Fuel;
use App\Classes\Tarif;
use App\Classes\Promo;

$economDiscount = 3;
$izbranDiscount = 5;
$premiumDiscount = 7;

// Создание промо акций
$discountFuel = new Promo('Скидка на топливо', 'discountFuel', 2);
$discountWash = new Promo('Скидка на мойку', 'discountWash', 5);
$discountReturnNds = new Promo('Возврат НДС', 'discountReturnNds', 20);
$discountFines = new Promo('Экономия на штрафах', 'discountFines', 50);
$allDiscounts = [$discountFuel, $discountWash, $discountReturnNds, $discountFines];

// Создание регионов
$regions = [
    new Region('Region 1', 'region_1', 1200),
    new Region('Region 2', 'region_2', 800),
    new Region('Region 3', 'region_3', 500)
];

// Создание видов топлива
$fuels = [
    new Fuel('Бензин', 'benzin', 500200, [
        new Tarif('Эконом', 'econom', [ 0, 100 ], $economDiscount, [$discountFuel, $discountWash]),
        new Tarif('Избранный', 'izbran', [ 101, 300 ], $izbranDiscount, [$discountWash, $discountReturnNds]),
        new Tarif('Премиум', 'premium', [ 301, '*' ], $premiumDiscount, [$discountReturnNds, $discountFines]),
    ]),
    new Fuel('Газ', 'gaz', 200100, [
        new Tarif('Эконом', 'econom', [ 0, 200 ], $economDiscount, [$discountFuel, $discountWash]),
        new Tarif('Избранный', 'izbran', [ 201, 700 ], $izbranDiscount, [$discountWash, $discountReturnNds]),
        new Tarif('Премиум', 'premium', [ 701, '*' ], $premiumDiscount, [$discountReturnNds, $discountFines]),
    ]),
    new Fuel('ДТ', 'dt', 320700, [
        new Tarif('Эконом', 'econom', [ 0, 150 ], $economDiscount, [$discountFuel, $discountWash]),
        new Tarif('Избранный', 'izbran', [ 151, 350 ], $izbranDiscount, [$discountWash, $discountReturnNds]),
        new Tarif('Премиум', 'premium', [ 351, '*' ], $premiumDiscount, [$discountReturnNds, $discountFines]),
    ])
];

$settings = new AllSettings($regions, $fuels, $allDiscounts);

dd($settings);