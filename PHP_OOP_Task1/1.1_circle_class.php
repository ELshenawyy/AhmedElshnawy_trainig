<?php
class Circle {
   private $radius;
   private $color;
   
   
   public function __construct($r) {  
      $this->radius = $r;
      $this->color = "red";
   }
   
   public function getRadius() {
     return $this->radius; 
   }
   
   public function getArea() {
      return $this->radius * $this->radius * M_PI;
   }
}
?>
