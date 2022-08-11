<?php

class Person {
    //Properties
    private $name;
    private $eyecolour;
    private $age;

    public function __construct($name, $eyecolor, $age) {
        $this->name = $name;
        $this->eyecolour = $eyecolor;
        $this->age = $age;
    }
           
    
    //Methods
    public function setName($name) {
        $this->name = $name;
    }
    public function getName() {
       return $this->name;
    }
}
