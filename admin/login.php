 <?php  
 session_start();  

 try  
 {  
      $pdoConnect = new PDO("mysql:host=localhost;dbname=macaddress","root",""); 
      $pdoConnect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
      if(isset($_POST["login"]))  
      {  
           if(empty($_POST["ID"]) || empty($_POST["Password"]))  
           {  
                $message = '<label>All fields are required</label>';  
           }  
           else  
           {  
                $pdoQuery = "SELECT * FROM macaddress.admin_info WHERE Admin_ID = :ID AND Password = :Password";  
                $pdoResult = $pdoConnect->prepare($pdoQuery);  
                $pdoResult->execute(  
                     array(  
                          'ID'     =>     $_POST["ID"],  
                          'Password'     =>     $_POST["Password"]  
                     )  
                );  
                $count = $pdoResult->rowCount();  
                if($count > 0)  
                {  
                     $_SESSION["ID"] = $_POST["ID"];  
                      header("Location: newadmin.php");
                }  
                else  
                {  
                       echo 'Invalid Credentials';
                }  
           }  
      }  
 }  
 catch(PDOException $error)  
 {  
      $message = $error->getMessage();  
 }  
 ?> 

<!DOCTYPE html>
<html>
<title>AID-AIR Admin Log In</title>
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
.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
.w3-half img:hover{opacity:1}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

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
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 60%; /* Could be more or less, depending on screen size */
    height: 80%;
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

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
body {
    background-image: url("../pictures/img1.jpg");
    background-repeat: no-repeat;
    background-attachment: fixed;
     background-size: 100% 100%;
}
</style>
</head>
<body>


    <div class="w3-display-left w3-padding-large">
    <br>
      <h1 class="w3-text-white">The</h1>
      <h1 class="w3-jumbo w3-text-white w3-hide-small"><b>Aid-Air +</b></h1>
      <h6><button class="w3-button w3-red w3-padding-large w3-large w3-opacity w3-hover-opacity-off" onclick="document.getElementById('id01').style.display='block'">Login</button></h6>
    </div>

<div id="id01" class="modal">
  
  <form class="modal-content animate" method="post" ">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="img_avatar2.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="ID"><b>Admin ID</b></label>
      <input type="text" placeholder="Enter ID" name="ID" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="Password" required>
        
      <button type="submit" name="login">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
</html>
