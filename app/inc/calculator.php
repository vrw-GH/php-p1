<!-- ----------------- CALCULATOR.php ------------------- -->

<div class="div_workarea" style="background-color: <?=$randomcolor; ?>; ">
   <p style="background-color: white; padding: 20px; text-align: center;">
      <?php
      require_once "./classes/Calc.php";

      $calc = new Calc();

      $val = rand(1,40);
      $calc->add($val);
      echo $calc->getTotal();

      $val = rand(1,40);
      $calc->sub($val);
      echo ' - '.$val.' = '.$calc->getTotal();

      $val = rand(1,40);
      $calc->add($val);
      echo ' + '.$val.' = '.$calc->getTotal();
      
      ?>
   </p>
</div>