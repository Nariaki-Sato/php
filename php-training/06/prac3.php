<?php
function processNumber(callable $func, float ...$args): array {
  foreach ($args as $arg) {
    $result[] = $func($arg); //5*5, 25*25
  }
  return $result; //[25, 625]
}
//list() = 配列([25, 625])
list($x, $y) = processNumber(
  function(float $num): float { return $num * $num; },
  5, 15);
print $x; //25
print '<br />';
print $y; //625

