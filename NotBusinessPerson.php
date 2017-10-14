<?php

require_once("BusinessPerson.php");


class NotBusinessPerson extends BusinessPerson {
	//Overriding Business Person work method ...
	public function work() {
		parent::work();
		print "Not so much ...";
	}
}