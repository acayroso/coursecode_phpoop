<?php

class Person{
    
    // class properties
    
        public $name;
        public $location;
        public $country;
    
    // class constructor - called everytime an object is instantiated
               
        public function __construct($name,$location,$country) {
            $this->name =  $name;
            $this->location = $location;
            $this->country = $country;
        }
        
    // class methods
    
        public function hello(){
            echo "Hola!, como estas?";
        }
        
        
        
}

