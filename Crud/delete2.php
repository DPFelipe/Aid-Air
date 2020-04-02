<?php
require_once("..//include/dbcon.php");
$pdoQuery = "DELETE FROM contact_form where ID =" . $_GET['ID'];
    $pdoResult =  $pdoConnect->prepare($pdoQuery);
    $pdoResult->execute();
  	$pdoConnect = null;
  	header("Location: ../admin/newadmin.php#Sugg");
?>

