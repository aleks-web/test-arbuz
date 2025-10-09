<?php

namespace App\Classes;

class Tarif {
    private string $name { // Название тарифа
        get {
            return $this->name;
        }
    }

    private string $code { // Код тарифа
        get {
            return $this->code;
        }
    }

    private int $discount {
        get {
            return $this->discount;
        }
    }

    private array $fuelInterval { // Интервал прокачки топлива от и до
        get {
            return $this->fuelInterval;
        }
    }

    private array $promotions { // Промо акции
        get {
            return $this->promotions;
        }
    }

    public function __construct(string $name, string $code, array $fuelInterval, int $discount, array $promotions) {
        $this->name = $name;
        $this->code = $code;
        $this->fuelInterval = $fuelInterval;
        $this->discount = $discount;
        $this->promotions = $promotions;
    }
}