<!DOCTYPE html>
<html>
<head>
    <title>AID-AIR Account Management</title>
    <meta http-equiv="refresh" content="3; url=sampleedit.php" />
</head>
<body>

</body>
</html>
<?php
  if($_POST["Password"]!=$_POST["Password1"]){
    header("Location: sampleedit.php");
   exit();
}
// php pdo insert data to mysql database 
if(isset($_POST['insert'])){
    try{
        //connect to mysql
        $pdoConnect = new PDO('mysql:host=localhost;dbname:macaddress','root','');
    }catch(PDOException $e){
        echo $e->getMessage();
        exit();
    }
    //get values from input text and number
    $Admin_ID = $_POST['AdminID'];
    $lastname = $_POST['LName'];
    $firstname = $_POST['FName'];
    $pass = $_POST['Password'];

    // mysql query to insert data
    $pdoQuery = "INSERT INTO macaddress.admin_info(Admin_ID,Password,LastName,FirstName) VALUES('$Admin_ID','$pass','$lastname','$firstname')";
    $pdoResult = $pdoConnect->prepare($pdoQuery);
    $pdoExec = $pdoResult->execute(array(":AdminID"=>$Admin_ID,":LName"=>$lastname,":FName"=>$firstname,":Password"=>$pass));

    //check if mysql insert query successful
    if($pdoExec){
        //retrieve all files and display
        $pdoQuery = 'SELECT * FROM macaddress.admin_info';
        $pdoResult = $pdoConnect->prepare($pdoQuery);
        $pdoResult->execute();
        Header("Location: sampleedit.php");
        exit;
    }else{
        echo "Account ID already exists!";
    }
}
?>