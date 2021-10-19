<?php

interface iTemplate {
    public function serVariable();
    public function getHtml();
}

class Template implements iTemplate {

    public function serVariable(){

    }

    public function getHtml(){

    }
}

interface typeA {
    public function testOne();
}

interface typeB extends typeB {
    public function testTwo();
}

class typeC implements typeB {
    
    public function testOne()
    {

    }

    public function testTwo()
    {
        
    }
}

interface typeD extends typeA, typeB {
    public function testThree();
}