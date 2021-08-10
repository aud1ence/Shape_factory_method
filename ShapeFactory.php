<?php

//require "Rectangle.php";

class ShapeFactory
{
    public function getShape($type)
    {
        if ($type == 'Rectangle') {
            return new Rectangle();
        } elseif ($type == 'Circle') {
            return new Circle();
        } elseif ($type == 'Square') {
            return new Square();
        }
        return null;
    }
}