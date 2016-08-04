<?php
include "ConnectToDB.php";

//$a = new A();
//$a->sayHi();
$b = new ConnectToDB();
$b->getKeyboard();
echo'<br/>';


print_r("russik print");
echo'<br/>';
echo'<br/>';
do{
  $i=0;
  print_r($b[$i]);
  echo'<br/>';
  $i++;
}while($b!=null)
?>

