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

    private array $fuelInterval { // Интервал прокачки топлива от и до
        get {
            return $this->fuelInterval;
        }
    }

    public function __construct(string $name, string $code, array $fuelInterval) {
        $this->name = $name;
        $this->code = $code;
        $this->fuelInterval = $fuelInterval;
    }
}