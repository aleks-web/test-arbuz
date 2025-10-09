<?php

namespace App\Classes;

class Fuel {
    private string $name { // Название топлива
        get {
            return $this->name;
        }
    }
    private string $code { // Код топлива, для работы в коде
        get {
            return $this->code;
        }
    }
    private int $cost_ton { // Цена за тонну
        get {
            return $this->cost_ton;
        }
    }

    private array $tarifs {
        get {
            return $this->tarifs;
        }
    }

    public function __construct(string $name, string $code, int $cost_ton, array $tarifs) {
        $this->name = $name;
        $this->code = $code;
        $this->cost_ton = $cost_ton;
        $this->tarifs = $tarifs;
    }
}