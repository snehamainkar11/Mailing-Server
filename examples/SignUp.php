<!DOCTYPE html>
<html>
<head>
<?php
session_start();
require('connection.php');
$con=mysql_connect("localhost","root","") or die (mysql_error());
mysql_select_db("email",$con);

if ($con->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


if(isset($_POST['signUp']))
 {
  $fnm = $_POST['fname'];
  $lnm = $_POST['lname'];
  $email =  $_POST['email'];
  $password_1 = $_POST['pwd'];
  $password_2 = $_POST['cpwd'];
  $mob = $_POST['contact'];
  $dob =  $_POST['dob'];
  
  if (empty($fnm)) { array_push($errors, "First Name is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }
 if (count($errors) == 0) {
  	
  	$sql="INSERT INTO  register(firstname,lastname,email,password,cpassword,mob,dob) VALUES
    ('$fnm','$lnm','$email','$password_1','$password_2','$mob','$dob')";
	$retval=mysql_query($sql,$con);
		if(!$retval)
		{
            die("not connected".mysql_error());
		}
		else
		{
			echo "Connected...";
		}	
  	$_SESSION['usrnm'] = $email;
  	$_SESSION['success'] = "You are now logged in";
  header('location: welcome.php');

  }
 } 
/*
$sql="insert into register(firstname,lastname,email,password,cpassword,mob,dob) VALUES
('$fnm','$lnm','$email','$password_1','$password_2','$mob','$dob')";
 $retval=mysqli_query($sql,$con);
		if(!$retval)
		{
            die("not connected".mysql_error());
		}
		else
		{
			echo "Connected...";
		}	
$_SESSION['email'] = $email;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: login.php');*/

?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->

<link rel="stylesheet" href="style.css">
<style>

.signin
{
	color:white;
}
input[type=text], input[type=password],input[type=email],input[type=date] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background-color: #f1f1f1;
  border:2px solid #456879;
	border-radius:12px;
	height: 10px;

}
</style>
<script>

function validate()
{
				

var pass1=document.getElementById("pwd").value;  
var pass2=document.getElementById("cpwd").value;   
  
if(pass1==pass2)
{  
return true;  
}  
else
{  
alert("password must be same!");  
return false;  
}

  var x, text;

  
  x = document.getElementById("contact").value;

  
  if (isNaN(x) || x < 1 || x > 10) {
   alert("Input not valid");
  } else {
    false
  }
  
}
var myInput = document.getElementById("psw");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  
  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  
  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
  
</script>
</head>
<body style=" background-size: cover;
  background-image: url('mail11.jpg');" >
<div class="imgcontainer"style=" background-size: cover;
  background-image: url('mail11.jpg')">
    
<form method="post" onsubmit="return validate()"style="max-width:600px;margin:auto" >
  
  <div class="container" align="center" style="border:groove;  
   background-image: url('mail11.jpg');
  background-size: cover;color:white">
    <b><h1 align="center" style="color:white;font-size:38px">Sign Up</h1></b>
	<table height="80%" width="80%">
    <caption><p>Please fill in this form to create an account.</p></caption>
    <hr>
	<tr><td><label for="fname"><b>First Name</b></label></td>
	<td><input type="text" name="fname"  placeholder="Enter First Name"></td></tr>
<tr><td><label for="lname"><b>Last Name</b></label></td>
	<td><input type="text" name="lname"  placeholder="Enter Last Name"></td></tr>
    <tr><td><label for="email"><b>Email</b></label></td>
    <td><input type="email" placeholder="@snail.com" name="email" required></td></tr>

    <tr><td><label for="psw"><b>Password</b></label></td>
    <td><input type="password" placeholder="Enter Password" id="pwd"name="pwd"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
   </td></tr>

    <tr><td><label for="psw-repeat"><b>Confirm Password</b></label></td>
    <td><input type="password" placeholder="Confirm Password" id="cpwd"name="cpwd"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
    </td></tr>
 
	<tr><td><label for="mob"><b>Mobile Number</b></label></td>
	<td><input type="text" name="contact" maxlength="10"placeholder="Enter Mobile No."required></td></tr>
    <tr><td><label for="dob"><b>DOB</b></label></td>
	<td><input type="date" name="dob"></td></tr></table>

	<hr>
    <p align="center">By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
	<button type="submit" class="btn" name="signUp" href="welcome.php"><span>Sign Up</span></button>
  </div>

<div class="signin">
    <p>Already have an account? <a href="login.php">Sign in</a></p>
  </div>
  
</form>

	  
    
</div>
</div>
</form></td></tr></table>

</body>
</html>
