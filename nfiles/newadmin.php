<?php
include_once '../include/dbcon.php';
session_start();
?>
<!DOCTYPE html>
<html>
<title>AID-AIR</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../css/main.css">
<link rel="stylesheet" type="text/css" href="../css/FONT.css">
<style>
html {
  scroll-behavior: smooth;
}
body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
body {font-size:16px;}
.w3-half img{margin-bottom:-6px;opacity:0.8;cursor:pointer}
.w3-half img:hover{opacity:1}
<style>
{
    box-sizing: border-box;
}

input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
}

label { 
    padding: 12px 12px 12px 0;
    display: inline-block;
}

input[type=submit] {
    background-color: #cc0000;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    float: right;
}

input[type=submit]:hover {
    background-color: #45a049;
}

.container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
    margin-left: 0px;
}

.col-25 {
    float: left;
    width: 25%;
    margin-top: 6px;
}

.col-75 {
    float: left;
    width: 75%;
    margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
    .col-25, .col-75, input[type=submit] {
        width: 100%;
        margin-top: 0;
    }
}

.block {
    display: block;
    width: 100%;
    border: none;
    background-color: #cc0000;
    color: white;
    padding: 14px 28px;
    font-size: 16px;
    cursor: pointer;
    text-align: center;
}

.block:hover {
    background-color: #4CAF50;
    color: white;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}
.callmodal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 77.7%;
    float: right;
    margin-right:0.8%;
}
.callmodal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 77.7%;
    float: right;
    margin-right: 0.8;
}

/* The Close Button */
.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}


</style>
<body>
<!-- Sidebar/menu -->




<nav class="w3-sidebar w3-red w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:20%;font-weight:bold;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
  <div class="w3-container">
    <h3 class="w3-padding-64"><b>Aid-Air + </b></h3>
  </div>
  <div class="w3-bar-block">
    <a href="#" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Home</a> 
    <a href="#Reports" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Reports</a> 
    <a href="#Call" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Call logs</a> 
    <a href="#App" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Appointments</a> 
    <a href="#Sugg" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Suggestions</a> 
   <button class="w3-button w3-block w3-left-align w3-red " onclick="myAccFunc()"> User
  </button>
  <div id="demoAcc" class="w3-hide w3-white w3-card">
    <a href="#Edit" onclick="document.getElementById('id01').style.display='block'" class="w3-bar-item w3-button w3-hover-white" >Accounts</a>
    <a href="#" class="w3-bar-item w3-button w3-hover-white ">Log Out</a>
  </div>
  </div>
</nav>

<!-- Top menu on small screens -->

<header class="w3-container w3-top w3-hide-large w3-red w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-button w3-red w3-margin-right w3-hover-white" onclick="w3_open()">☰</a>
  <span>Aid-Air +</span>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer;" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:312.5px;margin-right:40px;">

 <header class="w3-container w3-center w3-padding-48 w3-white" id="home">
    <h1 class="w3-xxxlarge w3-text-red"><b>Aid-Air + Systems</b></h1>
    <h6>Welcome <span class="w3-tag w3-red">Admin <?php echo $_SESSION["ID"] ?></span></h6>
  </header> 

 <!--image header-->
  <header  class="w3-display-container w3-wide" id="home">
    <img class="w3-image" src="images.jpg" alt="Fashion Blog" width="1600" height="1060">
    <div class="w3-display-left w3-padding-large">
      <h1 class="w3-text-white">The</h1>
      <h1 class="w3-jumbo w3-text-white w3-hide-small"><b>Aid-Air +</b></h1>
</header>

<!-- !Reports! -->
 <div class="w3-container" style="margin-top:75px" id= "Reports">
 <form action="../Crud/search.php" method="post">
 <h1 class="w3-xxxlarge w3-text-red"><b>Reports</b></h1>
 <hr style="width:50px;border:6px solid red" class="w3-round">
 <input type = "text" name = "search" style = 'width:30%'><button type = "submit"  name = "Find" class="w3-button w3-padding-large w3-red w3-margin-bottom w3-round" style = "margin-top: 13px;margin-left: 10px;">Find</button>
 </form>
 <br><br>
 <?php
    $pdoQuery = "SELECT * FROM macaddress.emergency_form";
    $pdoResult =  $pdoConnect->prepare($pdoQuery);
    $pdoResult->execute();
        echo "<table border='2' cellpadding='7'>";
        echo "<tr>";
        echo "<th>No.</th>";
        echo "<th>Sender ID</th>";
        echo "<th>Name of Patient</th>";
        echo "<th>Year and Course</th>";
        echo "<th>Location</th>";
        echo "<th>Building</th>";
        echo "<th>Report</th>";
        echo "<th>Action</th>";
        echo "</tr>";

    while($row=$pdoResult->fetch(PDO::FETCH_ASSOC)) {
        extract($row);
        echo "<tr>";
        echo "<td>$ID</td>";
        echo "<td>$Sender_ID</td>";
        echo "<td>$Name_of_Patient</td>";
        echo "<td>$Year_and_Course</td>";
        echo "<td>$Location</td>";
        echo "<td>$Building</td>";
        echo "<td>$Report</td>";
        echo "<td><a href='../Crud/delete.php?ID=$ID';?>Delete</a></td>";
        echo "</tr>";
    }
 ?>
 </div>


<!--!calllogs!-->
<div class="w3-container" style="margin-top:75px" id= "Call">
<h1 class="w3-xxxlarge w3-text-red"><b>Call logs</b></h1>
<hr style="width:50px;border:6px solid red" class="w3-round">

</div>
<!--!apointments!-->
<div class="w3-container" style="margin-top:75px" id= "App">
  <form action="../Crud/search1.php" method="post">
 <h1 class="w3-xxxlarge w3-text-red"><b>Appointments</b></h1>
 <hr style="width:50px;border:6px solid red" class="w3-round">
 <input type = "text" name = "search1" style = 'width:30%'><button type = "submit"  name = "Find" class="w3-button w3-padding-large w3-red w3-margin-bottom w3-round" style = "margin-top: 13px;margin-left: 10px;">Find</button>
 </form>
 <br><br>

 <?php

 $Sender_ID1 = "";
  $Name_of_Patient1 = "";
  $Year_Course1 = "";
  $Date = "";
  $Time = "";
  $Message = "";

    $pdoQuery = "SELECT * FROM macaddress.appointment_form";
    $pdoResult =  $pdoConnect->prepare($pdoQuery);
    $pdoResult->execute();
        echo "<table border='2' cellpadding='7'>";
        echo "<tr>";
        echo "<th>No.</th>";
        echo "<th>Sender ID</th>";
        echo "<th>Name of Patient</th>";
        echo "<th>Year and Course</th>";
        echo "<th>Date</th>";
        echo "<th>Time</th>";
        echo "<th>Messsage</th>";
        echo "<th>Action</th>";
        echo "</tr>";

    while($row=$pdoResult->fetch(PDO::FETCH_ASSOC)) {
        extract($row);
        echo "<tr>";
        echo "<td>$ID</td>";
        echo "<td>$Sender_ID1</td>";
        echo "<td>$Sender_Name1</td>";
        echo "<td>$Year_Course1</td>";
        echo "<td>$Date1</td>";
        echo "<td>$Time1</td>";
        echo "<td>$Message1</td>";
        echo "<td><a href='../Crud/delete1.php?ID=$ID';?>Delete</a></td>";
        echo "</tr>";
    }
 ?>
 </div>

<!--!suggestions!-->
<div class="w3-container" style="margin-top:75px" id= "Sugg">
 <form action="../Crud/search2.php" method="post">
 <h1 class="w3-xxxlarge w3-text-red"><b>Suggestions</b></h1>
 <hr style="width:50px;border:6px solid red" class="w3-round">
 <input type = "text" name = "search2" style = 'width:30%'><button type = "submit"  name = "Find" class="w3-button w3-padding-large w3-red w3-margin-bottom w3-round" style = "margin-top: 13px;margin-left: 10px;">Find</button>
 </form>

 <?php
  $Name_of_Patient = "";
  $Email = "";
  $Message1 = "";

    $pdoQuery = "SELECT * FROM macaddress.contact_form";
    $pdoResult =  $pdoConnect->prepare($pdoQuery);
    $pdoResult->execute();
        echo "<table border='2' cellpadding='7'>";
        echo "<tr>";
        echo "<th>No.</th>";
        echo "<th>Sender ID</th>";
        echo "<th>Name of Sender</th>";
        echo "<th>Email</th>";
        echo "<th>Message</th>";
        echo "<th>Aciton</th>";
        echo "</tr>";

    while($row=$pdoResult->fetch(PDO::FETCH_ASSOC)) {
        extract($row);
        echo "<tr>";
        echo "<td>$ID</td>";
        echo "<td>$Sender_ID2</td>";
        echo "<td>$Name</td>";
        echo "<td>$Email</td>";
        echo "<td>$Message2</td>";
        echo "<td><a href='../Crud/delete2.php?ID=$ID';?>Delete</a></td>";
        echo "</tr>";
    }
 ?>
 </div>
</div>


<div id="id01" class="modal">
  
  <form class="modal-content animate" method="post" ">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      
      <div class="container">
  <form action="add.php" method="post">
        <div class="row">
      <div class="col-25">
        <label for="Username">Username</label>
      </div>
      <div class="col-75">
        <input type="text" id="Username" name="input_senderid" placeholder="Username..." required="">
      </div>
    </div>   
     <div class="row">
      <div class="col-25">
        <label for="lname">Password</label>
      </div>
      <div class="col-75">
        <input type="text" id="password" name="input_yearcourse" placeholder="Pasword..." required="">
      </div>
    </div>
    <div class="row">
    <br>
      <button onclick ="myFunction()" type="submit" name = "insert" onclick="addfunction()" style="float: right "; class="w3-button w3-padding-large w3-red w3-margin-bottom w3-round"  >Submit</button>
    </div>
  </form>
</div> 
</div>

    </div>

    </div>
  </form>
</div>
  
<!-- End page content -->
<div class="w3-light-grey w3-container w3-padding-20" style="margin-top:50px;padding-right:58px;padding-top:60"><p class="w3-right">Powered by <class="w3-hover-opacity">Aid-Air +</p></div>

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
function myAccFunc() {
    var x = document.getElementById("demoAcc");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
        x.previousElementSibling.className += " w3-green";
    } else { 
        x.className = x.className.replace(" w3-show", "");
        x.previousElementSibling.className = 
        x.previousElementSibling.className.replace(" w3-green", "");
    }
}

</script>

</body>
</html>
