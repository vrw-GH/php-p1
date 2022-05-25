<?php

class Calc {
   protected $total;

   public function add($val) {
      $this->total += $val;
   }

   public function sub($val) {
      $this->total -= $val;
   }

   public function getTotal() {
      return $this->total;
   }

}