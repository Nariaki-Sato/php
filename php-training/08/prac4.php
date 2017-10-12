<?php

//
$cnt = $_COOKIE['cnt'] + 1;

//'cnt'に$cntの値を代入
setcookie('cnt', $cnt, time() + 60*60*24*90);

print "あなたがこのサイトを訪れたのは{$cnt}回目です！";