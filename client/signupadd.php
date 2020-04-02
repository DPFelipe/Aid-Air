<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="refresh" content="3; url=loginuser.php" />
	<title>Sign Up</title>
</head>
<body>
<br>
<?php
session_start();
//php PDO insert data to mysql database
if(isset($_SESSION["ID"])){
  
}
else{
  
}
if($_POST["Password"]!=$_POST["Password1"]){
	echo "Passwords doesn't match! Redirecting in 3 seconds...";
   exit();
   header("Location: loginuser.php");
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
	$sender_id = $_POST["id"];
	$password = $_POST['Password'];
	$lname = $_POST['lname'];
	$fname = $_POST['fname'];

	// mysql query to insert data
	$pdoQuery = "INSERT INTO macaddress.student_info(Sender_ID, Password, LastName, FirstName) VALUES('$sender_id','$password','$lname','$fname')";
	$pdoResult = $pdoConnect->prepare($pdoQuery);
	$pdoExec = $pdoResult->execute(array(":id"=>$sender_id,":Password"=>$password,":lname"=>$lname,":fname"=>$fname));

	//check if mysql insert query successful
	if($pdoExec){
		//retrieve all files and display
		$pdoQuery = 'SELECT * FROM macaddress.student_info';
		$pdoResult = $pdoConnect->prepare($pdoQuery);
		$pdoResult->execute();
		echo "Account successfully registered.. Redirecting in 3 seconds...";
		exit;
	}else{
		echo "Account ID already exists! Redirecting in 3 seconds...";
	}
}
?>
</body>
</html>