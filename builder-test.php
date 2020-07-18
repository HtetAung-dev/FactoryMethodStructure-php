<?php
    class HouseBuilder{
        private $storey;
        private $color;
        
        public function setStorey($storey){
            $this->storey = $storey;
            return $this;
        }

        public function setColor($color){
            $this->color = $color;
            return $this;
        }

        public function getStorey(){
            return $this->storey;
        }
        public function getColor(){
            return $this->color;
        }
        function build(){
            return new House($this);
        }
    }
    class House{
        public $storey;
        public $color;

        public function __construct(HouseBuilder $hb){
            $this->storey = $hb->getStorey();
            $this->color = $hb->getColor();
        }

        static function builder(){
            return new HouseBuilder();
        }
    }
    $house = House::builder()->setStorey(4)->setColor("Sky Blue")->build();
    print_r($house);

    //Output::House Object ( [storey] => 4 [color] => Sky Blue ) 