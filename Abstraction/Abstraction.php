<?php

abstract class Shape{
    protected $color = '';

    abstract function calculateArea();

    public function getColor() {
        return $this->color;
    }
}

class Rectangle extends Shape {
    public $length;
    public $breath;

    function __construct($color, $length, $breath)
    {
        $this->color = $color;
        $this->length = $length;
        $this->breath = $breath;
    }

    public function calculateArea() {
        return $this->length * $this->breath;
    }
}

?>