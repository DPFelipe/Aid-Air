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
 if(!empty($_POST["input_nameofpatient"])) {
 	$name_of_patient = $_POST['input_nameofpatient'];
 }
 else{
 	$name_of_patient = "Not specified";
 }
 if(!empty($_POST["input_yearcourse"])) {
 	$year_course = $_POST['input_yearcourse'];
 }
 else{
 	$year_course = "Not specified";
 }

	$bldg = $_POST['input_bldg'];
	$loc = $_POST['input_location'];
	$sev = $_POST['input_severity'];
	$rep = $_POST['input_report'];

	// mysql query to insert data
	$pdoQuery = "INSERT INTO macaddress.emergency_form(Sender_ID,Name_of_Patient,Year_and_Course,Building,Location,Severity,Report) VALUES('$sender_id','$name_of_patient','$year_course','$bldg','$loc','$sev','$rep')";
	$pdoResult = $pdoConnect->prepare($pdoQuery);
	$pdoExec = $pdoResult->execute(array($_SESSION["ID"]=>$sender_id,":input_nameofpatient"=>$name_of_patient,":input_yearcourse"=>$year_course,":input_bldg"=>$bldg,":input_location"=>$loc,":input_severity"=>$sev,":input_report"=>$rep));

	//check if mysql insert query successful
	if($pdoExec){
		//retrieve all files and display
		$pdoQuery = 'SELECT * FROM macaddress.emergency_form';
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