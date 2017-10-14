<?php

require_once('Triangle.php');
require_once('Square.php');

$figs = [];
$figs[] = new Triangle(10, 5);
$figs[] = new Square(7, 5);
$figs[] = new Triangle(3, 2);
$figs[] = new Square(8, 5);
$figs[] = new Square(11, 5);
$figs[] = new Triangle(3, 2);

foreach ($figs as $fig) {
	//IFigureを実装してる場合のみgetArea()を実行
	if ($fig instanceof IFigure) {
		print '<p>'.get_class($fig) . ':' . $fig->getArea() . '<p/>';
	}
}

//SquareクラスはIFifureを実装していないので出力されない

