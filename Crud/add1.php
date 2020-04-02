<!DOCTYPE html>
<html>
<head>
	<title>PDO</title>
</head>
<body>
<br>
<?php
//php PDO insert data to mysql database
session_start();  
 if(isset($_SESSION["ID"]))  {  
 }
  else  {  
   header("location:login.php");  
 } 
if(isset($_POST['insert'])){
	try{
		//connect to mysql
		$pdoConnect = new PDO('mysql:host=localhost;dbname:macaddress','root','');
	}catch(PDOException $e){
		echo $e->getMessage();
		exit();
	}
	//get values from input text and number
	$sender_id = $_SESSION["ID"];
	$sender_name = $_POST['input_name1'];
	$year_course1 = $_POST['input_yrsec1'];
	$date = $_POST['input_date'];
	$time = $_POST['input_time'];
	$msg = $_POST['input_message'];

	// mysql query to insert data
	$pdoQuery = "INSERT INTO macaddress.appointment_form(Sender_ID1,Sender_Name1,Year_Course1,Date1,Time1,Message1) VALUES('$sender_id','$sender_name','$year_course1','$date','$time','$msg')";
	$pdoResult = $pdoConnect->prepare($pdoQuery);
	$pdoExec = $pdoResult->execute(array($_SESSION["ID"]=>$sender_id,":input_name1"=>$sender_name,":input_yrsec1"=>$year_course1,":input_date"=>$date,":input_time"=>$time,":input_message"=>$msg));

	//check if mysql insert query successful
	if($pdoExec){	
		//retrieve all files and display
		$pdoQuery = 'SELECT * FROM macaddress.appointment_form';
		$pdoResult = $pdoConnect->prepare($pdoQuery);
		$pdoResult->execute();
		header ('Location: ../index.php');
		exit;
	}else{
		echo "Data not sent";
	}
}
?>
</body>
</html>