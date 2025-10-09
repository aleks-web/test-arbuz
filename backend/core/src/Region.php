<?php

namespace App\Classes;

class Region {
    private string $name { // Название региона
        get {
            return $this->name;
        }
    }
    private string $code { // Код региона, для работы в коде
        get {
            return $this->code;
        }
    }
    private int $max_pumping { // Максимальная прокачка
        get {
            return $this->max_pumping;
        }
    }

    public function __construct(string $name, string $code, int $max_pumping) {
        $this->name = $name;
        $this->code = $code;
        $this->max_pumping = $max_pumping;
    }
}