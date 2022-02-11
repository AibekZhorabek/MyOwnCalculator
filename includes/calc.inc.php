<?php
include '../classes/calculator.class.php';
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$opt = $_POST['oper'];
$calculator1 = new Calculator($num1, $num2, $opt);

echo $calculator1->option($opt);
