<!DOCTYPE html>
<html>
<?php
session_start();
require('connection.php');

if(isset($_POST['signIn']))
{
	if($_POST['usrnm']=="" || $_POST['pwd']=="")
	{
	echo "fill your id and passwrod first";
	}
	else
	{
	$d=mysql_query("SELECT email,password FROM register where email='{$_POST['usrnm']}'");
	$row=mysql_fetch_object($d);
		$fid=$row->email;
		$fpass=$row->password;
		if($fid==$_POST['usrnm'] && $fpass==$_POST['pwd'])
		{
		$_SESSION['usrnm']=$_POST['usrnm'];
		
		header("location:welcome.php"); 

		echo "Login Succssfull";
		//echo "<script>window.location='welcome.php'</script>";
		}
		else
		{
		echo"<h4>invalid id or pass<h4>";
		}
	}
}
?>	

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="login.css">


<script>

function validate()
{
				

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
<style>



</style>
</head>
<body>
<form class="form1" method="post" style="border:groove; background-size: cover;
  background-image: url('mail11.jpg')"onsubmit="return validate()" >
  <h1 align="center">Sign In</h1>
  
 <div class="imgcontainer" >
    <img src="mail1.gif" alt="Logo" class="avatar">
  </div>

  <div class="input-container" >
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="Username" name="usrnm" required>
  </div>

  
  <div class="input-container">
    <i class="fa fa-key icon"></i>
<input type="password" class="input-field" name="pwd" placeholder="Password"pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
    
   
  </div>

  <button type="submit" class="btn" name="signIn" value="Submit"><span>Sign In</span></button>
  <button type="Reset" class="btn" name="cancel"value="Cancel"><span>Cancel</span></button>
  
  <div id="message">
  <h3>Password must contain the following:</h3>
  <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
  <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
  <p id="number" class="invalid">A <b>number</b></p>
  <p id="length" class="invalid">Minimum <b>8 characters</b></p>
</div>
<div class="rem">  
  <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label></div>

    <div class="col1" align="center">
     <a href="SignUp.php" style="color:white;" class="btn1"> New User?? Sign up</a>
    </div>
   
</div>
</div>
</form>
</body>
</html>
