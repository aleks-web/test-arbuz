<?php

namespace App\Classes;

class Promo {
    private string $name { // Название промо акции
        get {
            return $this->name;
        }
    }

    private string $code { // Код промо акции
        get {
            return $this->code;
        }
    }

    private int $discount { // Скидка
        get {
            return $this->discount;
        }
    }

    public function __construct(string $name, string $code, int $discount) {
        $this->name = $name;
        $this->code = $code;
        $this->discount = $discount;
    }
}