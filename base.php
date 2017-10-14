<?php

require_once('Area.php');

print "PI =: ".Area::PI.'<br />';
echo "PI changed! <br />";

print "The area of this circle: ".Area::circle(10).'cm2<br />';

print "The area of the square: ".Area::square(10, 4).'cm2<br />';