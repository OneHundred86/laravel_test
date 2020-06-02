<?php
namespace Oh86\LaravelTest\Lib;

class Test
{
    protected $name;

    public function __construct()
    {
        # code...
    }

    public function setName($name){
        $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }

    public function sayHi(){
        return sprintf("hi, my name is %s.", $this->name);
    }
}