<?php
class MyClass {

  public $name;


  function set_name($name) {
    $this->name = $name;
  }
 
}
$i= new MyClass();
$i->set_name("Scott");

echo  "Hello All, I am " . $i->name;
?>
 