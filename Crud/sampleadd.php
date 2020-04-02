 
<?php
try {

  // connect to mysql
 $pdoConnect = new PDO("mysql:host=localhost;dbname=macaddress","root","");
  // set the PDO error mode to exception
 $pdoConnect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } 
    catch (PDOException $exc) {
        echo $exc->getMessage();
        
    }
 
 session_start();  
 if(isset($_SESSION["ID"]))  
 {  
      echo '<h3>Login Success, Welcome - '.$_SESSION["ID"].'</h3>';
      echo '<br /><br /><a href="../admin.php">Home</a>'; 
      echo '<br /><br /><a href="../dropdown.php">Sample Drop-down Menu</a>';   
      echo '<br /><br /><a href="../logout.php">Logout</a><br /><br />';  
 }

  else  
 {  
      header("location:login.php");  
 } 


?>
<!DOCTYPE html>
<html>
    <head>
        <title>Admin Add and Display</title>
        <meta charset="UTF-8">
    </head>
    <body>
    <br>
        <form action="add.php" method="post">
           
           StudentID:  <input type="text" name="Sender_ID" required placeholder="Student ID"><br>
           Password:   &nbsp;<input type="password" name="Password" required placeholder="Password"><br>
           LastName:  <input type="Text" name="LName" required placeholder="Last Name"><br>
           FirstName:  <input type="Text" name="FName" required placeholder="First Name"><br>
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           <input type="submit" name="insert" value="Save"><br><br><br>
             
        </form>

        <form action="search.php" method="post"> 
            Search: &nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="Sender_ID" placeholder="Enter Student ID here.."><br><br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="submit" name="Find" value="Search"><br><br><br>
        </form>
<br>
<?php

   $Sender_ID = "";
  $PassWord = "";
  $LName = "";
  $FName = "";



    $pdoQuery = 'SELECT * FROM student_info';
    $pdoResult =  $pdoConnect->prepare($pdoQuery);
    $pdoResult->execute();
        echo "<table border='2' cellpadding='7'>";
        echo "<tr>";
        echo "<th>ID</th>";
        echo "<th>Password</th>";
        echo "<th>LastName</th>";
        echo "<th>FirstName</th>";
        echo "<th>Action</th>";
        echo "</tr>";



    while($row=$pdoResult->fetch(PDO::FETCH_ASSOC)) {
        extract($row);
        echo "<tr>";
        echo "<td>$Sender_ID</td>";
        echo "<td>$Password</td>";
        echo "<td>$LastName</td>";
        echo "<td>$FirstName</td>";


        echo "<td><a href='sampleedit.php?Sender_ID=$Sender_ID';>Edit</a> <a href='delete.php?Sender_ID=$Sender_ID';?>Delete</a></td>";
    echo "</tr>";
    }
?>

    </body>
</html>

