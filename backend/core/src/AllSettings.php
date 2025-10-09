<?php
    namespace App\Classes;

    class AllSettings {
        private array $regions = [] {
            get {
                return $this->regions;
            }
        }

        private array $promotions = [] {
            get {
                return $this->promotions;
            }
        }

        private array $fuels = [] {
            get {
                return $this->fuels;
            }
        }

        public function __construct(array $regions, array $fuels, array $promotions) {
            $this->fuels = $fuels; // Все виды топлива
            $this->regions = $regions; // Все регионы
            $this->promotions = $promotions; // Все промо акции
        }
    }