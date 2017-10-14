<?php

$now = new DateTime();
$now->setDate(2016, 6, 25);
$now->setTime(14, 25, 31);

print $now->format('Y年m月d日 H時i分');

