<?php
    abstract class Shape{
        abstract public function calarea();
    }

    class Circle extends Shape{
        private $radias;

        public function __construct($radias){
            $this->radias=$radias;
        }

        public function calarea(){
            return 3.1416* pow($this->radias, 2);
        }
        

    }

    class Rectangle extends Shape{
        private $length;
        private $width;

        public function __construct($length, $width){
            $this->length=$length;
            $this->width=$width;
        }
        public function calarea(){
            return $this->length * $this->width;
        }
    }

    $circle = new Circle(10);
    $rect = new Rectangle(5,10);
    echo "Area of circle: " . $circle->calarea()."\n";
    echo "Area of rectangle: " . $rect->calarea()."\n";
?>