<?php

abstract class Animal {
	public abstract function outputVoice(): string;
}

class Cat extends Animal {
	public function outputVoice() : string {
		return 'Nyaaaaa...';
	}
}

class Dog extends Animal {
	public function outputVoice() : string {
		return 'Wan...';
	}
}

$cat = new Cat(); 
$dog = new Dog(); 


print $cat->outputVoice();
print $dog->outputVoice();


