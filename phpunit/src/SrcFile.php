<?php
namespace TDD;

class SrcFile {
   public function sum(array $numbers = []) { 
       // takes array of items, by default an empty array
       return array_sum($numbers); 
       // array_sum is built-in function which sums up the values inside an array 
       // We could, of course, build our own sum solution :)
   }

   public function ageCalc($corrent, $birth) {
       return ($corrent - $birth);
   }
}