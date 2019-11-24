<?php
require_once 'connection.php';

$link = mysqli_connect($host, $user, $password, $database) 
    or die("Ошибка " . mysqli_error($link));

$result=mysqli_query($link,"SELECT * FROM Book");// выбор всех записей из таблицы 
 $myrow= mysqli_fetch_array($result);
 do {
 echo "Идент. номер книги - ".$myrow['BookId']."<br>"; 
 echo 'название: '. $myrow['BookName']."<br>";
 echo 'год издания: '.$myrow['BookYear']."<br>";  
 
 } 
 while($myrow=mysqli_fetch_array($result));
 mysqli_close($link);
 ?>