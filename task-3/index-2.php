<?php
require_once 'connection.php';

$link = mysqli_connect($host, $user, $password, $database) 
    or die("Ошибка " . mysqli_error($link));

$result=mysqli_query($link,"SELECT B.BookName, P.PublName FROM Book B, Publisher P WHERE B.PublId=P.PublId ORDER BY BookName ");
// выбор всех записей из таблицы 
 $myrow= mysqli_fetch_array($result);
 do {
 
 echo 'название: '. $myrow['BookName']."<br>";
 echo 'издательство: '.$myrow['PublName']."<br>";  
 
 } 
 while($myrow=mysqli_fetch_array($result));
 mysqli_close($link);
 ?>