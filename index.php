<?php
include "ConnectToDB.php";

//$a = new A();
//$a->sayHi();
$b = new ConnectToDB();
$c = $b->getKeyboard();
echo'<br/>';


print_r("russik print");
echo'<br/>';
echo'<br/>';
$i=0;
while($i<1){
  
  print_r($c);
  
  echo'<br/>';
  var_dump($c);
  $i++;
}
?>

