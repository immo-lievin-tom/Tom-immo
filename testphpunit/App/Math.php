<?php

namespace App;

class Math
{
    private $number1;

    private $number2;

    public function __construct($number1, $number2)
    {
        $this->setNumber1($number1);
        $this->setNumber2($number2);
    }

    public function add()
    {
        return $this->getNumber1() + $this->getNumber2();
    }

    public function multiply()
    {
        return $this->getNumber1() * $this->getNumber2();
    }

    public function substract()
    {
        return $this->getNumber1() - $this->getNumber2();
    }

    public function divide()
    {
        return $this->getNumber1() / $this->getNumber2();
    }

    /**
     * Get the value of number1
     */ 
    public function getNumber1()
    {
        return $this->number1;
    }

    /**
     * Set the value of number1
     *
     * @return  self
     */ 
    public function setNumber1($number1)
    {
        $this->number1 = $number1;

        return $this;
    }

    /**
     * Get the value of number2
     */ 
    public function getNumber2()
    {
        return $this->number2;
    }

    /**
     * Set the value of number2
     *
     * @return  self
     */ 
    public function setNumber2($number2)
    {
        $this->number2 = $number2;

        return $this;
    }
}