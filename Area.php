<?php

class Area {
	const PI = 3.14;

	public static function circle(float $radius) : float {
		return pow($radius, 2) * self::PI;
	}

	public static function square(float $width, float $height) {
		return $width * $height;
	}
}