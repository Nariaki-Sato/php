<?php

interface Runnable {
	function run();
}

class MyClass {
	public function execute(Runnable $rc) {
		//ダミー処理
		print 'start ... ';
		$rc->run();
		print 'end ...';
	}
 }


 	$cls = new MyClass();

 	//Runnable実装クラスを引数に渡す
 $cls->execute(new class implements Runnable {
		public function run () {
			print 'process...';
		}
	});