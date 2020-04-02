<?php
include_once './include/dbcon.php';
?>
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
    <a href="#er" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Emergency Form</a> 
    <a href="#setapp" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Set an Appointment</a> 
    <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Contact Us</a> 
    <a href="#aboutus" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Designers</a> 
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
<div class="w3-main" style="margin-left:312.5px;margin-right:40px;margin-top:75px">


  <!-- Header -->
    <div class="w3-container">   
      <h1 class="w3-jumbo w3-text-red"><b>Need help?</b></h1>   
      <h1> "We Aid fast like Air"</h1>
       <!-- Photo grid (modal) -->
    <div class="w3-row">
      <div class="w3-half">
          <img src="images.jpg" style="width:100%" onclick="onClick(this)" alt="">
          <img src="images.jpg" style="width:100%" onclick="onClick(this)" alt="">
          <img src="images.jpg" style="width:100%" onclick="onClick(this)" alt="">
        </div>
    
    <div class="w3-half">
          <img src="images.jpg" style="width:100%" onclick="onClick(this)" alt="">
          <img src="images.jpg" style="width:100%" onclick="onClick(this)" alt="">
          <img src="images.jpg" style="width:100%" onclick="onClick(this)" alt="">
        </div>
      </div>
    
  

  <!-- Modal for full size images on click-->
  <div id="modal01" class="w3-modal w3-black" style="padding-top:0" onclick="this.style.display='none'">
    <span class=" w3-black">×</span>
    <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
      <img id="img01" class="w3-image">
      <p id="caption"></p>
    </div>
  </div>
</div>
 
<!-- !REGISTRATION FORM! -->
<div class="w3-container" style="margin-top:75px" id="er">
<h1 class="w3-xxxlarge w3-text-red"><b>Emergency Form</b></h1>
 <hr style="width:50px;border:6px solid red" class="w3-round">
<p> Emergency? We can aid you fast!</p>

<div class="container">
  <form action="add.php" method="post">
    <div class="row">
      <div class="col-25">
        <label for="fname">Name of Patient</label>
      </div>
      <div class="col-75">
        <input type="text" id="fullname" name="input_nameofpatient" placeholder="Patient's name.." required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="idsender">Sender's ID</label>
      </div>
      <div class="col-75">
        <input type="text" id="idsender" name="input_senderid" placeholder="Sender's ID.." required="">
      </div>
    </div>   
     <div class="row">
      <div class="col-25">
        <label for="lname">Year and Course</label>
      </div>
      <div class="col-75">
        <input type="text" id="ycname" name="input_yearcourse" placeholder="Patient's year and course.." required="">
      </div>
    </div>
        <div class="row">
      <div class="col-25">
        <label for="lname">Location</label>
      </div>
      <div class="col-75">
        <input type="text" id="location" name="input_location" placeholder="Location of Incident.." required="">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="building">Building</label>
      </div>
      <div class="col-75">
        <select id="building" name="input_bldg" >
          <option value="CCS">CCS</option>
          <option value="CEP">CEP</option>
          <option value="IT">IT</option>
          <option value="Other">Other</option>
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="subject">Case</label>
      </div>
      <div class="col-75">
        <textarea id="report" name="input_report" placeholder="Write the discription.." style="height:200px" required=""></textarea>
      </div>
    </div>
    <div class="row">
    <br>
      <button onclick ="myFunction()" type="submit" name = "insert" onclick="addfunction()" style="float: right "; class="w3-button w3-padding-large w3-red w3-margin-bottom w3-round"  >Submit</button>
    </div>
  </form>
</div> 
</div>

  <!-- Setapp -->

  <div class="w3-container" id="setapp" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>Set an Appointment.</b></h1>
     <hr style="width:50px;border:6px solid red" class="w3-round">
    <p>You can set your appointments via call or filling up the form.</p>


  <img src="images.jpg" style="width:100%;height:30%" onclick="onClick()" alt="Set your appointmens.">

<br><br>
    <button id="mycallBtn" class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom">Call</button>
    <!-- The Modal -->
    <div id="mycallModal" class="callmodal">
    <!-- Modal content -->   
       <div class="callmodal-content w3-animate-zoom">
          <span class="close"></span>  
            <div class="w3-container" style="margin-top:0px">
                <p>nothing</p>
          </div>
        </div>
    </div>
    

    <button id="myBtn" class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom">Appointment Form</button>
    <!-- The Modal -->
<div id="myModal" class="modal">
<!-- Modal content -->
<div class="w3-container" style="margin-top:0px">
  <div class="modal-content w3-animate-zoom">
    <h1 class="w3-xxxlarge w3-text-red"><b>Set an appointment.</b></h1>
    <hr style="width:50px;border:6px solid red" class="w3-round">
    <form action="add1.php" method="post">
      <div class="w3-section">
        <label>Name</label>
        <input class="w3-input w3-border" type="text" name="input_name1" required>
      </div>
      <div class="w3-section">
        <label>ID Number</label>
        <input class="w3-input w3-border" type="text" name="input_id1" required>
      </div>
      <div class="w3-section">
        <label>Year and Section</label>
        <input class="w3-input w3-border" type="text" name="input_yrsec1" required>
      </div>
      <div class="w3-section">
        <label>Date</label>
        <input class="w3-input w3-border" type="date" name="input_date" required>
      </div>
      <div class="w3-section">
        <label>Time</label>
        <input class="w3-input w3-border" type="time" name="input_time" required>
      </div>
      <div class="w3-section">
        <label>Message</label>
        <input class="w3-input w3-border" type="text" name="input_message" required>
      </div>
      <button onclick ="myFunction()" type="submit" name = "insert" class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom">Send Message</button>
    </form>  
  </div>
  </div>
  </div>
  </div>
<!-- CONTACT US -->
  <div>
<div class="w3-container" id="contact" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>Contact.</b></h1>
    <hr style="width:50px;border:6px solid red" class="w3-round">
    <p>Do you have any suggestions? Fill out the form and fill us in with the details :) We love meeting new people!</p>
    <form action="add2.php" method="post">
      <div class="w3-section">
        <label>Name</label>
        <input class="w3-input w3-border" type="text" name="input_name2" required>
      </div>
      <div class="w3-section">
        <label>Email</label>
        <input class="w3-input w3-border" type="text" name="input_email" required>
      </div>
      <div class="w3-section">
        <label>Message</label>
        <input class="w3-input w3-border" type="text" name="input_message1" required>
      </div>
      <button onclick ="myFunction()" type="submit" name = "insert" class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom">Send Message</button>
    </form>  
  </div>

  <!--DESIGNERS-->
  <div class="w3-container" id="aboutus" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>Designers.</b></h1>
    <hr style="width:50px;border:6px solid red" class="w3-round">
    <p>The best team in the world.</p>
  </div>

  <!-- The Team -->
  <div class="w3-row-padding w3-grayscale">
    <div class="w3-col m4 w3-margin-bottom">
      <div class="w3-light-grey">
        <img src="/w3images/team2.jpg" alt="Rom" style="width:100%">
        <div class="w3-container">
          <h3>Rom Mendoza</h3>
          <p class="w3-opacity">Full Stack</p>
          <p>blah blah blah blah blah blah blah blah blah blah blah blah blah.</p>
        </div>
      </div>
    </div>
    <div class="w3-col m4 w3-margin-bottom">
      <div class="w3-light-grey">
        <img src="/w3images/team1.jpg" alt="Daryll" style="width:100%">
        <div class="w3-container">
          <h3>Daryll Felipe</h3>
          <p class="w3-opacity">Backend</p>
          <p>blah blah blah blah blah blah blah blah blah blah blah blah blah.</p>
        </div>
      </div>
    </div>
    <div class="w3-col m4 w3-margin-bottom">
      <div class="w3-light-grey">
        <img src="/w3images/team3.jpg" alt="Ross" style="width:100%">
        <div class="w3-container">
          <h3>Daniel Galang</h3>
          <p class="w3-opacity">Front End</p>
          <p>blah blah blah blah blah blah blah blah blah blah blah blah blah</p>
        </div>
      </div>
    </div>
  </div>
  </div>  
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
</script>

</body>
</html>
