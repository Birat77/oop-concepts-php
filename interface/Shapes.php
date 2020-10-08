<?php

include "./ShapesInterface.php";
include "./GeomertryInterface.php";

class Triangle implements ShapesInterface, GeometryInterface
{
    public function getArea()
    {
        echo "Triangle area";
    }
    public function dimensions($val1, $val2)
    {
    }
}

class Rectangle implements ShapesInterface
{
    public function getArea()
    {
        echo "Rectangle area";
    }
}

(new Rectangle)->getArea();
