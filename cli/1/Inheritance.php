<?php

abstract class Shape {
    protected $colour;
    public function __construct($colour='red')
    {
        $this->colour=$colour;
    }
    public function getColour()
    {
       return $this->colour;
    }
    abstract public function getArea();
}
class Triangle extends Shape{
 protected $base = 5;
    protected $height = 7;
    public function getArea()
    {
        return 0.5 * $this->base * $this->height;
    }
}
class Square extends Shape {
    protected $lenght = 4;
    public function getArea()
    {
       return pow($this->lenght, 2);
    }
}
class Circle extends Shape{
    protected $radius = 5;
    public function  getArea()
    {
       return M_PI * pow($this->radius, 2);
    }
}
$circle = new Circle('black');
echo "\n".$circle->getColour()."\n\n";
echo "\n".(new Square('blue'))->getColour()."\n\n";

