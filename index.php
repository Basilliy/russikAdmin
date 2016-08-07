<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Пример веб-страницы</title>
  <style type="text/css">
   button.new {
    background: -moz-linear-gradient(#00BBD6, #EBFFFF);
    background: -webkit-gradient(linear, 0 0, 0 100%, from(#00BBD6), to(#EBFFFF));
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#00BBD6', endColorstr='#EBFFFF');
    padding: 3px 7px;
    color: #333;
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    border-radius: 5px;
    border: 1px solid #666;
   }
  </style>
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
    ?>
<!--<button class="new"></button>-->
<?php
}
?>


 </body>
</html>
