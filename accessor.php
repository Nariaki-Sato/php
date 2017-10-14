<?php

require_once("Triangle.php");

$triangle = new Triangle();
$triangle->setBase(10);
$triangle->setHeight(12);

print "Area of this Triangle: {$triangle->getArea()}";