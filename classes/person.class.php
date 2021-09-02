<?php

    class Person{

        // properties
        public $arms = 2;
        public $head = 1;
        public $eyes = 2;
        // etc...

        // methods
        // public method
        public function greet(){
            return "<br>" . "hello " . "I have " . $this->arms . " arms";
        }

        // static method
        static function sing(){
            return "<br>" . "do re me fa so la ti do!";
        }

        // private method
        private function grow_legs(){
            return $legs = 2;
        }

    }
    
    $jose = new Person;
    $marta = new Person;
    
    var_dump($jose);
        // object(Person)#1 (2) {associative array full of properties} 

    echo "<br>" . $marta->arms;
        // 2 on a new line

    // call a non-static method of Person class on $jose object
    echo $jose->greet();

    // call a static method of Person class on $jose object
    echo $jose->sing();

    // cannot call private functions from outside the class
    // echo $marta->grow_legs(); // throws fatal error

    
?>