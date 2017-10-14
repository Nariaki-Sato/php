<?php

function myGen() {
	yield 'アイウエオ'; //yield命令は処理を一時停止
	yield 'カキクケコ'; //次に呼び出された時に続きから再開
	yield 'さしすせそ';
}


foreach (myGen() as $value) {
	print $value.'<br />';
}