<?php

class Encapsulation {
    public $public = "public";
    protected $protected = "Protected";
    private $private = "Private";

    public function printWelcome() {
        echo $this->public . "\n";
        echo $this->protected . "\n";
        echo $this->private . "\n";
    }
}

class ExtendsEncap extends Encapsulation {

    public $public = "Other public";
    protected $protected = "Other Protected";

    function printWelcome() {
        echo $this->public . "\n";
        echo $this->protected . "\n";
    }
}