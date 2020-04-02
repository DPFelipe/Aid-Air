<?php
// php pdo insert data to mysql database 
if(isset($_POST['insert']))
{
    try {
        // connect to mysql
    $pdoConnect = new PDO("mysql:host=localhost;dbname=macaddress","root","");
    // set the PDO error mode to exception
    $pdoConnect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $exc) {
        echo $exc->getMessage();
        exit();
    }
    // get values form input text and number
    $Admin_ID = $_POST['AdminID'];
    $Password = $_POST['Password'];
    $LName = $_POST['LName'];
    $FName = $_POST['FName'];
   
    // mysql query to insert data
    $pdoQuery = "INSERT INTO macaddress.admin_info(Admin_ID, Password, LastName, FirstName) VALUES (:Admin_ID,:Password,:LName,:FName)";
    $pdoResult = $pdoConnect->prepare($pdoQuery);
    $pdoExec = $pdoResult->execute(array(":AdminID"=>$Admin_ID,":Password"=>$Password,":LName"=>$LName,":FName"=>$FName));
    
    // check if mysql insert query successful
    if($pdoExec)
    {
        // retrieve all files and display
        $pdoQuery = 'SELECT * FROM admin_info';
        $pdoResult =  $pdoConnect->prepare($pdoQuery);
        $pdoResult->execute();
        header("Location: ./sampleadd.php");
        exit;
        } else {
            echo 'Data Not Inserted';
    }
}
$pdoConnect = null;
?>

