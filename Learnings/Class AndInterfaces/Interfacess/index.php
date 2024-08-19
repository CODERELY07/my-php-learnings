<?php
  //Class and Interfaces
  
  
  //create interfaces 
  
  interface Drivable{
      public function start();
      public function stop();
  }
  
  class Cars implements Drivable{
      public function start(){
          return " Start the Car";
      }
      public function stop(){
          return " Stop the Car";
      }
  }
  
  class Bike implements Drivable{
      public function start(){
          return " Start the bike";
      }
      public function stop(){
          return " Stop the Bike";
      }
  }
  echo "\n";
  $car = new Cars();
  echo $car->start();
  echo $car->stop();
  
  echo "\n";
  $bike = new Bike();
  echo $bike->start();
  echo $bike->stop();
?>