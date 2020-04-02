<!DOCTYPE html>
<html>
<head>
  <title>Found</title>
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
</head>
<body>
<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-red w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:20%;font-weight:bold;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
  <div class="w3-container">
    <h3 class="w3-padding-64"><b>Aid-Air + </b></h3>
  </div>
  <div class="w3-bar-block">
    <a href="../admin/newadmin.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Home</a> 
    <a href="../admin/newadmin.php#Reports" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Reports</a> 
    <a href="../admin/newadmin.php#App" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Appointments</a> 
    <a href="../admin/newadmin.php#Sugg" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Suggestions</a> 
   <button class="w3-button w3-block w3-left-align w3-red " onclick="myAccFunc()"> User
  </button>
  <div id="demoAcc" class="w3-hide w3-white w3-card">
    <a href="" class="w3-bar-item w3-button w3-hover-white">My Account</a>
    <a href="../admin/logout.php" class="w3-bar-item w3-button w3-hover-white ">Log Out</a>
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
<div class="w3-main" style="margin-left:312.5px;margin-right:40px;">
<?php
// php search data in mysql database using PDO
// set data in input text

$ID = "";

if(isset($_POST['Find']))
{
        // connect to mysql
    try {
        $pdoConnect = new PDO("mysql:host=localhost;dbname=macaddress","root","");
    } catch (PDOException $exc) {
        echo $exc->getMessage();
        exit();
    }
    
    // id to search
    $ID = $_POST['search2'];
    
      // mysql search query
    $pdoQuery = "SELECT * FROM macaddress.contact_form WHERE Sender_ID2 LIKE '%" . $ID . "%'";
     $pdoResult =  $pdoConnect->prepare($pdoQuery);
    $pdoResult->execute();
        echo "<h1>Displaying rows using: $ID</h1>";
        echo "<table border='2' cellpadding='7'>";
        echo "<tr>";
        echo "<th>No.</th>";
        echo "<th>Sender ID</th>";
        echo "<th>Name of Patient</th>";
        echo "<th>Email</th>";
        echo "<th>Message</th>";
        echo "<th>Action</th>";
        echo "</tr>";

    while($row=$pdoResult->fetch(PDO::FETCH_ASSOC)) {
        extract($row);
        echo "<tr>";
        echo "<td>$ID</td>";
        echo "<td>$Sender_ID2</td>";
        echo "<td>$Name</td>";
        echo "<td>$Email</td>";
        echo "<td>$Message2</td>";
        echo "<td><a href='delete2.php?ID=$ID';?>Delete</a></td>";
    echo "</tr>";
    }
}
$pdoConnect = null;
?>
</div>
</body>
</html>
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
