<?php

require "Shape.php";
require "ShapeFactory.php";
require "Rectangle.php";
require "Square.php";
require "Circle.php";

$shapeFactory = new ShapeFactory();
$rectangle = $shapeFactory->getShape('Rectangle');
echo $rectangle->draw();
echo '<br>';

$square = $shapeFactory->getShape('Square');
echo $square->draw();
echo '<br>';

$circle = $shapeFactory->getShape('Circle');
echo $circle->draw();
echo '<br>';
