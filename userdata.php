

<?php

$con = mysqli_connect('localhost','root');

if($con){
	
	
}else{
	echo "No connection";
}


mysqli_select_db($con, 'tos');

$name = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comment = $_POST['comment'];

$query = " insert into  customqr (user, email, mobile, comment) values 
('$name', '$email','$mobile','$comment')  ";  

mysqli_query($con, $query);

header('location:CUdone.php');

?>