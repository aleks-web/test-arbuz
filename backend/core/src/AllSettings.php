<?php
    namespace App\Classes;

    use App\Classes\Region;
    use App\Classes\Fuel;

    class AllSettings {
        private array $regions = [] {
            get {
                return $this->regions;
            }
        }

        private array $fuels = [] {
            get {
                return $this->fuels;
            }
        }

        public function __construct(array $regions, array $fuels) {
            $this->fuels = $fuels;
            $this->regions = $regions;
        }
    }