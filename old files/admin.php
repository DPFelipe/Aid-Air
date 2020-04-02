<?php

 //login_success.php  
 session_start();  
 if(isset($_SESSION["ID"]))  
 {  
      echo '<h3>Login Success, Welcome - '.$_SESSION["ID"].'</h3>';
      echo '<br /><br /><a href="./Crud/sampleadd.php">Edit User</a>';
      echo '<br /><br /><a href="dropdown.php">Sample Drop-down Menu</a>';
      echo '<br /><br /><a href="logout.php">Logout</a>'; 
 }  
 else  
 {  
      header("location:login.php");  
 }  

?>
   
<!DOCTYPE html>
<html>
<head>
  <title>Admin</title>
</head>
<body>

</body>
</html>
<!DOCTYPE html>
<html>
<title>AID-AIR</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="main.css">
<link rel="stylesheet" type="text/css" href="FONT.css">
<style>
html {
  scroll-behavior: smooth;
}
body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
body {font-size:16px;}
.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
.w3-half img:hover{opacity:1}
/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

.modal1 {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content1 {
    background-color: #fefefe; 
    border: 1px solid #888;
    width: 100%; /* Could be more or less, depending on screen size */
    
}
.modal2 {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content2 {
    background-color: #fefefe; 
    border: 1px solid #888;
    width: 100%; /* Could be more or less, depending on screen size */
    
}
/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}
{
    box-sizing: border-box;
}


/* style inputs and link buttons */
input,
.btn {
  width: 100%;
  padding: 12px;
  border: none;
  border-radius: 4px;
  margin: 5px 0;
  opacity: 0.85;
  display: inline-block;
  font-size: 17px;
  line-height: 20px;
  text-decoration: none; /* remove underline from anchors */
}

input:hover,
.btn:hover {
  opacity: 1;
}

/* add appropriate colors to fb, twitter and google buttons */
.fb {
  background-color: #3B5998;
  color: white;
}

.twitter {
  background-color: #55ACEE;
  color: white;
}

.google {
  background-color: #dd4b39;
  color: white;
}


/* Two-column layout */
.col {
  float: left;
  width: 50%;
  margin: auto;
  padding: 0 50px;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* vertical line */
.vl {
  position: absolute;
  left: 50%;
  transform: translate(-50%);
  border: 2px solid #ddd;
  height: 175px;
}

/* text inside the vertical line */
.inner {
  position: absolute;
  top: 50%;
  transform: translate(-50%, -50%);
  background-color: #f1f1f1;
  border: 1px solid #ccc;
  border-radius: 50%;
  padding: 8px 10px;
}

/* hide some text on medium and large screens */
.hide-md-lg {
  display: none;
}

.container1 {
  position: relative;
  border-radius: 10%;
  background-color: #f2f2f2;
  padding: 20px 0 30px 0;
  width: 100%;
} 

/* bottom container */
.bottom-container {
  
  text-align: center;
  background-color: #666;
  border-radius: 0px 0px 4px 4px;
  width: 50%;
}
.modal-content3 {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888; /* Could be more or less, depending on screen size */
}
/* Responsive layout - when the screen is less than 650px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 650px) {
  .col {
    width: 100%;
    margin-top: 0;
  }
  /* hide the vertical line */
  .vl {
    display: none;
  }
  /* show the hidden text on small screens */
  .hide-md-lg {
    display: block;
    text-align: center;
  }
}
</style>

<body >

<div  class="container1">
<!-- navbar/menu -->
<div class="w3-bar w3-red w3-hide-small">
   <a href="#home" onclick="w3_close()"  class="w3-bar-item w3-button"><i class=""><img src= home.png width="40" height="40"></i></a>
  
  <a href="#Reports" onclick="document.getElementById('myModal2').style.display='block'" style="width:auto;" class="w3-bar-item w3-button"><i class=""><img src= reports.png width="40" height="40"></i></a>
  
  <a href="#Calllogs" onclick="document.getElementById('mymodal3').style.display='block'"  class="w3-bar-item w3-button"><i class=""><img src= call.png width="40" height="40"></i></a>

  <a href="#App" onclick="document.getElementById('mymodal4').style.display='block'" class="w3-bar-item w3-button"><i class=""><img src= appointments.png width="40" height="40"></i></a>

  <a href="#Sugg"  onclick="document.getElementById('mymodal5').style.display='block'" class="w3-bar-item w3-button"><i class=""><img src= sugg.png width="40" height="40"></i></a>

<a href="logout.php"  class="w3-bar-item w3-button" style="float: right;"><i class=""><img src= logout.png width="40" height="40"></i></a>
</div>
  
<!-- w3-content defines a container for fixed size centered content, 
and is wrapped around the whole page content, except for the footer in this example -->
<div class="w3-content" style="max-width:1600px">
<!--header-->
 <header class="w3-container w3-center w3-padding-48 w3-white" id="home">
    <h1 class="w3-xxxlarge w3-text-red"><b>Aid-Air + Systems</b></h1>
    <h6>Welcome to the <span class="w3-tag w3-red">Aid-Air +</span></h6>
  </header> 

 <!--image header-->
  <header  class="w3-display-container w3-wide" id="home">
    <img class="w3-image" src="images.jpg" alt="Fashion Blog" width="1600" height="1060">
    <div class="w3-display-left w3-padding-large">
      <h1 class="w3-text-white">The</h1>
      <h1 class="w3-jumbo w3-text-white w3-hide-small"><b>Aid-Air +</b></h1>
</header>






<!-- !PAGE CONTENT! -->
  <!-- Grid -->
<div id="myModal2" class="modal">
<form class="modal-content1 " action="/action_page.php">
<div class="container">
    
<!-- Reports-->
 <div class="w3-container w3-white w3-margin w3-padding-large w3-animate-top " id= "Reports">
 <h1 class="w3-xxxlarge w3-text-red"><b>Reports</b></h1>
<hr style="width:50px;border:6px solid red" class="w3-round">
<?php
echo "<table style='border: solid 1px black;'>";
echo "<tr><th>ID</th><th>Sender ID</th><th>Name of Patient</th><th>Year and Course</th><th>Location</th><th>Building</th><th>Report</th></tr>";

class TableRows extends RecursiveIteratorIterator {
    function __construct($it) {
        parent::__construct($it, self::LEAVES_ONLY);
    }

    function current() {
        return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
    }

    function beginChildren() {
        echo "<tr>";
    }

    function endChildren() {
        echo "</tr>" . "\n";
    }
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "macaddress";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT ID, Sender_ID, Name_of_Patient, Year_and_Course, Location, Building, Report FROM emergency_form");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
        echo $v;
    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
?>
<button type="button" onclick="document.getElementById('myModal2').style.display='none'" class="w3-red cancelbtn">Close</button>
<button type="button" href = "./Crud/sampleedit.php" class="w3-red cancelbtn">Edit</button>
</div>
</div>
</div>
</div>
</div>
</form>
</div>

 <!--Call logs -->

<div id="mymodal3" class="modal">
<form class="modal-content1 " action="/action_page.php">
<div class="container">
     
<div class="w3-container w3-white w3-margin w3-padding-large " id= "Calllogs">
<h1 class="w3-xxxlarge w3-text-red"><b>Call logs</b></h1>
<hr style="width:50px;border:6px solid red" class="w3-round">

<button type="button" onclick="document.getElementById('mymodal3').style.display='none'" class="w3-red cancelbtn">Close</button>
</div>
</div>
</div>
</div>
</div>
</form>
</div>

<!--Apps -->

<div id="mymodal4" class="modal">
<form class="modal-content1 " action="/action_page.php">
<div class="container">
     

<div class="w3-container w3-white w3-margin w3-padding-large " id= "App">
<div class="w3-container" id="Appointments" style="margin-top:75px">
<h1 class="w3-xxxlarge w3-text-red"><b>Appointments</b></h1>
<hr style="width:50px;border:6px solid red" class="w3-round">
<?php
echo "<table style='border: solid 1px black;'>";
echo "<tr><th>ID</th><th>Sender ID</th><th>Name of Sender</th><th>Year and Course</th><th>Date</th><th>Time</th><th>Message</th></tr>";

class TableRows2 extends RecursiveIteratorIterator {
    function __construct($it) {
        parent::__construct($it, self::LEAVES_ONLY);
    }

    function current() {
        return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
    }

    function beginChildren() {
        echo "<tr>";
    }

    function endChildren() {
        echo "</tr>" . "\n";
    }
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "macaddress";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT ID,Sender_ID1,Sender_Name1, Year_Course1, Date1, Time1, Message1 FROM appointment_form");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
        echo $v;
    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
?>

<button type="button" onclick="document.getElementById('mymodal4').style.display='none'" class="w3-red cancelbtn">Close</button>
</div>
</div>
</div>
</div>
</form>
</div>


<!--Sugg-->
<div id="mymodal5" class="modal">
<form class="modal-content1 " action="/action_page.php">
<div class="container">


<div class="w3-container w3-white w3-margin w3-padding-large " id= "Sugg">
<div class="w3-container" id="Suggestions" style="margin-top:75px">
<h1 class="w3-xxxlarge w3-text-red"><b>Suggestions</b></h1>
<hr style="width:50px;border:6px solid red" class="w3-round">
<?php
echo "<table style='border: solid 1px black;'>";
echo "<tr><th>ID</th><th>Name</th><th>E-mail</th><th>Message</th></tr>";

class TableRows3 extends RecursiveIteratorIterator {
    function __construct($it) {
        parent::__construct($it, self::LEAVES_ONLY);
    }

    function current() {
        return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
    }

    function beginChildren() {
        echo "<tr>";
    }

    function endChildren() {
        echo "</tr>" . "\n";
    }
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "macaddress";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT ID,Name,Email,Message2 FROM contact_form");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
        echo $v;
    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
?>
<button type="button" onclick="document.getElementById('mymodal5').style.display='none'" class="w3-red cancelbtn">Close</button>
</div>
</div>
</div>
</div>
</div>
</div>
</form>
</div>


<footer class="w3-container w3-dark-grey" style="padding:32px margin-top:75px">
  <p>Powered by Aid-Air +</p>
</footer>
</div>
</form>
</div>

<script>
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}

// Get the modal
var modal = document.getElementById('myModal');


var modal1 = document.getElementById('myModal1');

var callmodal = document.getElementById('mycallModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

var callbtn = document.getElementById("mycallBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 

btn.onclick = function() {
    modal.style.display = "block";
}

callbtn.onclick = function() {
    callmodal.style.display = "block";
}
// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

span.onclick = function() {
    callmodal.style.display = "none";
}
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
 
    }

    if (event.target == callmodal) {
        callmodal.style.display = "none";
    }
}
function myFunction() {
    alert("Your message has been send.");
}

</script>

</body>
</html>