<?php
require_once "./classes/Calc.php";

$calc = new Calc();

echo '<p>';

   $val = rand(1,40);
   $calc->add($val);
   echo $calc->getTotal();

   $val = rand(1,40);
   $calc->sub($val);
   echo ' - '.$val.' = '.$calc->getTotal();

   $val = rand(1,40);
   $calc->add($val);
   echo ' + '.$val.' = '.$calc->getTotal();   

echo '</p>';