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
	$sender_name = $_POST['input_name2'];
	$sender_email = $_POST['input_email'];
	$sender_message = $_POST['input_message1'];

	// mysql query to insert data
	$pdoQuery = "INSERT INTO macaddress.contact_form(Sender_ID2,Name,Email,Message2) VALUES('$sender_id','$sender_name','$sender_email','$sender_message')";
	$pdoResult = $pdoConnect->prepare($pdoQuery);
	$pdoExec = $pdoResult->execute(array($_SESSION["ID"]=>$sender_id,":input_name2"=>$sender_name,":input_email"=>$sender_email,":input_message1"=>$sender_message));

	//check if mysql insert query successful
	if($pdoExec){
		//retrieve all files and display
		$pdoQuery = 'SELECT * FROM macaddress.contact_form';
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