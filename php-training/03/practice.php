<?php

$x = 10;
$flag = ($x == 1 ? 0 : 1);
echo $flag.'<br/>';

var_dump('1.44E2' == 144); //true
var_dump('1.44E2' === 144); //false
var_dump('0x10' == 16); //false
var_dump('H' == 0); //true


echo '<br/>========================<br/>';

$a = 1;
$b = &$a; //$bのアドレスは$aと同じだから$aの値を変更すると$bも変更される
$a++;

echo $a.'<br/>';
echo $b.'<br/>';


echo '<br/>========================<br/>';

$error = 'Error!';
$error = '';
echo $error ? $error : '正常です';
echo '<br/>';

echo $error ?: '正常です';
echo '<br/>';

