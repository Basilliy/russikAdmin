
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Пример веб-страницы</title>
 </head>
 <body>
<?php
include "ConnectToDB.php";

//$a = new A();
//$a->sayHi();
$b = new ConnectToDB();
$c = $b->getKeyboard();
//echo'<br/>';


//print_r("russik print");
//echo'<br/>';
//echo'<br/>';
$i=0;
for($i = 0; $i < count($c); $i ++){
echo"<button>$c[$i]</button>";
}
?>
 </body>
</html>
