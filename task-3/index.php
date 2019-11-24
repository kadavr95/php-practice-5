
<?php
require_once 'connection.php';

$link = mysqli_connect($host, $user, $password, $database) 
    or die("Ошибка " . mysqli_error($link));

$result=mysqli_query($link,"SELECT * FROM Books");// выбор всех записей из таблицы 
 $myrow= mysqli_fetch_array($result);
 do {
 echo "Идент. номер книги - ".$myrow['BookId']."<br>"; 
 echo 'название: '. $myrow['BookName']."<br>";
 echo 'год издания: '.$myrow['BookYear']."<br>";  
 
 } 
 while($myrow=mysqli_fetch_array($result));
 mysqli_close($link);
Результат выполнения скрипта:
 
Пример выполнения запроса с условием и сортировкой:
<?php
require_once 'connection.php';

$link = mysqli_connect($host, $user, $password, $database) 
    or die("Ошибка " . mysqli_error($link));

$result=mysqli_query($link,"SELECT B.BookName, P.PublName FROM Books B, Publisher P WHERE B.PublId=P.PublId ORDER BY BookName ");
// выбор всех записей из таблицы 
 $myrow= mysqli_fetch_array($result);
 do {
 
 echo 'название: '. $myrow['BookName']."<br>";
 echo 'издательство: '.$myrow['PublName']."<br>";  
 
 } 
 while($myrow=mysqli_fetch_array($result));
 mysqli_close($link);
1. Пример записи данных в таблицу через форму:
Скрипт – index.php:
<html> 
    <body>
        <form action="index2.php" method="post" name="form"> 
            </p> <p>код книги:<br> <input name="BookId" type="integer" size="5" maxlength="40"></p>
            <p>Введите название книги: <br> 
                <input name="BookName" type="text" size="20" maxlength="40">
            </p> <p>Введите год издания:<br> <input name="BookYear" type="varchar" size="5" maxlength="40">
            </p> <p>код издательства:<br> <input name="PublId" type="integer" size="5" maxlength="40"></p>
            </p> <p>код жанра:<br> <input name="GenId" type="integer" size="4" maxlength="40"></p>
<input name="submit" type="submit" value="занести информацию в базу">            
</form>
    </body> 
</html>

