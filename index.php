<?php

class Rectangle
{
    public $width;
    public $height;

    public function __construct($height, $width)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function getArea()
    {
        return $this->width * $this->height;
    }

    public function getPerimeter()
    {
        return (($this->width + $this->height) * 2);
    }

    public function display()
    {
        return "Rectangle{  width=" . $this->width . ", height=" . $this->height . "}";
    }
}

$rectangle = new Rectangle(20,30);
echo $rectangle->getArea();
echo $rectangle->display();