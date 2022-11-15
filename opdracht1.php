<?php
class MyClass {
  
  public $name;
  
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
}

$i = new MyClass();
$j = new MyClass();
$i->set_name('MyClass');
$j->set_name(' class has been initialized!');

echo $i->get_name();
echo $j->get_name();
?>