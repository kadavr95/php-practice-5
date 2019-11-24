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
	$result=mysqli_query($link,"INSERT INTO Student (id,last_name,first_name,middle_name,`group`,email,gender,birth_date,funding,enrollment_type)VALUES ('$id','$lastName','$firstName','$middleName','$group','$email','1','2000-01-01','1','1')");         
 	if ($result=='true') { echo"Информация в базу успешно добавлена"; } 
		else { echo'<span style="color: red; font-weight: bold;">Информация в базу не добавлена</span>'; } 
 ?> 