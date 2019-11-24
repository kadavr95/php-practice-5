 <?php
 	if(isset($_POST['id'])) { $id=$_POST['id']; } 
    require_once 'connection.php';
	$link = mysqli_connect($host, $user, $password, $database) 
    	or die("Ошибка " . mysqli_error($link));
	$result=mysqli_query($link,"DELETE from Student where id=$id");         
 	if ($result=='true') { echo"Информация успешно удалена из базы"; } 
		else { echo'<span style="color: red; font-weight: bold;">Информация из базы не была удалена</span>'; } 
 ?> 