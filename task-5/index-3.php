 <?php
 	if(isset($_POST['id'])) { $id=$_POST['id']; } 
	if(isset($_POST['lastName'])) { $lastName=$_POST['lastName']; }
	if(isset($_POST['firstName'])) { $firstName=$_POST['firstName']; }
	if(isset($_POST['middleName'])) { $middleName=$_POST['middleName']; }	
	if(isset($_POST['group'])) { $group=$_POST['group']; }
    if(isset($_POST['email'])) { $email=$_POST['email']; }
    require_once 'connection.php';
	$link = mysqli_connect($host, $user, $password, $database) 
    	or die("Ошибка " . mysqli_error($link));
	$result=mysqli_query($link,"UPDATE Student SET last_name='$lastName', first_name='$firstName', middle_name='$middleName', `group`='$group', email='$email' WHERE id = $id");        
 	if ($result=='true') { echo"Информация в базе успешно обновлена"; } 
		else { echo'<span style="color: red; font-weight: bold;">Информация в базе не обновлена</span>'; } 
 ?> 