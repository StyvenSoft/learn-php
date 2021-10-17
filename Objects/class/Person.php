<?php

class Person{
    // Propiedades
    public $name, $lastname, $age;

    // Metodo constructor
    public function __construct($name, $lastname, $age) {
        $this->name = strtolower($name);
        $this->lastname = strtolower($lastname);
        $this->age = $age;
    }

    // Metodos
    public function setName($name) {
        $this->name = strtolower($name);
    }

    public function getName() {
        return ucwords($this->name);
    }
}