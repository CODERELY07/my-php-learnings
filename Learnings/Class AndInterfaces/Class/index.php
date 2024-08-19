<?php
  //create a class
  
  class Car{
      public $brand;
      public $model;
      public $color;
      
      public function __construct($brand,$model,$color){
          $this->brand = $brand;
          $this->model = $model;
          $this->color = $color;
      }
      public function printCar(){
          return "Car brand is $this->brand, model $this->model color $this->color";
      }
  }
  
  $obj = new Car('Toyota','12345', 'blue');
  echo $obj->printCar();
?>