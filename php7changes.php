<?php
class test {
  //Return type declaration
  public function space(int $a, int $b): array
  {
    //SapceShip: In case of NULL and not defined variable return second oprend else $z
    $z= NULL;
    echo $z??'data';
    echo $a <=> $b;
    return array('test');
  }
}
$obj = new test();
$obj->space(3,2);

//Anonynous class
$i='Anonynous class';
$anonObj = new class($i){
  public function __construct($value)
  {
    echo $value;
  }

  public function getName()
  {
    return "BHUPINDER";
  }
};
echo $anonObj->getName();
//Anonynous class

/*
$var = 1;

try {
    $var->method(); // Throws an Error object in PHP 7.
} catch (Throwable $e) {
    echo '<pre>'; print_r($e);
    // Handle error
}
*/
 ?>
