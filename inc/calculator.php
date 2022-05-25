<?php
require_once "./classes/Calc.php";

$calc = new Calc();

$calc->add(10);
echo $calc->getTotal();
echo '<br>';

$calc->add(5);
echo $calc->getTotal();
echo '<br>';

$calc->sub(3);
echo $calc->getTotal();
echo '<br>';