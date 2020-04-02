<?php
require_once("..//include/dbcon.php");
$pdoQuery = "DELETE FROM emergency_form where ID =" . $_GET['ID'];
    $pdoResult =  $pdoConnect->prepare($pdoQuery);
    $pdoResult->execute();
  	$pdoConnect = null;
  	header("Location: ../admin/newadmin.php#Reports");
?>