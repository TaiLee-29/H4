<?php
require_once 'autoloader.php';

$example1 = new \Hillel\src\currency('UAh');
var_dump($example1);

$ex2=  new \Hillel\src\currency('Uah');

var_dump($ex2->equal($example1));
$ex3 = new \Hillel\src\money(456, $ex2);
var_dump($ex3);
$ex4 = new \Hillel\src\money(456, $example1);

var_dump($ex4->equal($ex3));
var_dump($ex4->add($ex3));