<?php
use PHPUnit\Framework\TestCase;
require_once "Dog.php";

class Evaluate extends TestCase {

   public function testBark() {
       $this->assertTrue(class_exists("Dog"), "You must declare Dog class");
       $dog = new Dog();
       $this->assertEquals("woof woof", $dog->bark(), "bark() must return 'woof woof'");
   }
}