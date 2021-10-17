<?php

class Person {
    // Propiedades
    public $name, $age;
    public $lastname1, $lastname2;

    // Metodo constructor
    public function __construct($name, $lastname, $age) {
        $this->name = strtolower($name);
        // $this->lastname = strtolower($lastname);
        $this->age = $age;
    }

    // Metodos
    public function setName($name) {
        $this->name = strtolower($name);
    }

    public function getName() {
        return ucwords($this->name);
    }

    public function setLastNames($lastname1, $lastname2) {
        $this->lastname1 = $lastname1;
        $this->lastname2 = $lastname2;
    }

    public function getLastNames() {
        return $this->lastname1 ." ". $this->lastname2; 
    }
}

// Herencia de clase
class Colombian extends Person {
    public $city, $region;

    // Extender el alcance de un metodo
    public function setLastNames($lastname1, $lastname2) {
        parent::setLastNames($lastname1, $lastname2);
        echo "Apellidos asegnados";
    }
}

