<?php
require_once 'connection.php';

$link = mysqli_connect($host, $user, $password, $database) 
    or die("Ошибка " . mysqli_error($link));
$link->set_charset("utf8");
$result=mysqli_query($link,"SELECT * FROM Student");// выбор всех записей из таблицы 
 $myrow= mysqli_fetch_array($result);
 do {
 echo 'ID: '. $myrow['id']."<br>";
 echo "ФИО студента - ".$myrow['last_name'].' '.$myrow['first_name'].' '.$myrow['middle_name']."<br>"; 
 echo 'email: '.$myrow['email']."<br>&nbsp;<br>";  
 
 } 
 while($myrow=mysqli_fetch_array($result));
 mysqli_close($link);
 ?>