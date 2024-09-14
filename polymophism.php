<?php
    class Animal{
        public function sounds(){
             echo "Some Animal's Sounds";
        }
    }

    class Dog extends Animal{
        public function sounds(){
            echo "ghew ghew";
        }

    }
    class Cow extends Animal{
        public function sounds(){
            echo "hambaaa";
        }
        
    }
    class Cat extends Animal{
        public function sounds(){
            echo "meow";
        }
        
    }
    function soundsPoly(Animal $animal){
        $animal->sounds();
    }
    $dog = new Dog;
    $cow = new Cow;
    $cat = new Cat;

    soundsPoly($dog);
    echo "\n";
    soundsPoly($cow);
    echo "\n";
    soundsPoly($cat);

?>