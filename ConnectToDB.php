<?php
class ConnectToDB{
    
    public function __construct() {
        if ($_POST['print']=='print'){
           $b = $this->getKeyboard();
        }
        
        $i=0;
        for($i = 0; $i < count($b); $i ++){
            echo"<button>$b[$i]</button>";
            }
        
    }
    
    
public function connectToDB(){
$host = 'upperl.mysql.ukraine.com.ua'; // адрес сервера 
$database = 'upperl_vadik'; // имя базы данных
$user = 'upperl_vadik'; // имя пользователя
$password = '2shmpzez'; // пароль
$link = mysqli_connect($host, $user, $password,$database)
    or die('Не удалось соединиться: ' . mysql_error());
//echo 'Соединение успешно установлено';
    return $link;
}
    
public function getKeyboard(){
$link =$this->connectToDB();
$query = 'SELECT * FROM menu';
$result = $link->query($query) or die('Запрос не удался: ' . mysql_error());
//print_r($result);
$rows = $result->fetch_assoc();
//print_r($rows['ButtonsName']);
//$mystring = 'Generate Insult,Language,Homepage';
$findme   = ',';
$button = explode($findme, $rows['ButtonsName']);
 return $button;    
}

public function sayHi(){

print_r("russik say hi");
    
}

}

