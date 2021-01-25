<?php





if (isset($_POST['btn'])){

$name=$_REQUEST['name'];
$phone=$_REQUEST['phone'];
$email=$_REQUEST['email'];
$date=$_REQUEST['date'];
$time=$_REQUEST['time'];

$hostname='localhost';
$username='User';
$password='password';
$database='reservation';

	
	
	
$mysqli = new mysqli($hostname,$username,$password,$database);

if ($mysqli->connect_errno){
	echo "Failed to connect to Database (".$mysqli->connect_errno.")".$mysqli->connect_errno;
}

$sql = "INSERT INTO reservations (Name_Surname,Phone,Email,Date,Time) VALUES ('$name','$phone','$email','$date','$time')";

if ($mysqli->query($sql)===TRUE){
	echo '<script>alert("SUCCESSFUL RESERVATION")</script>'	;
	include('Reservation.php');
}else{
	echo "Error : ".$sql." <br> " .$mysqli->error;
}

$mysqli->close();


	
}





?>
