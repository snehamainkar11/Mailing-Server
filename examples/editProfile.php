
<?php
session_start();
error_reporting(1);
$sid=$_SESSION['usrnm'];
include_once('connection.php');
$imgpath=$_FILES['file']['name'];
$r=mysql_query("select * from register where email='$sid'");
$mob=$_POST['mob'];
$dob=$_POST['dob'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];

if(isset($_POST['submit']))
{
$upload_image=$_FILES["profile"]["name"];

$folder="/wampp/www/Mailserver/examples/profile/";

move_uploaded_file($_FILES["profile"]["tmp_name"], "$folder".$_FILES["profile"]["name"]);

$retval=mysql_query("UPDATE register set firstname='$fname',lastname='$lname', mob='$mob', photo='$upload_image',dob='$dob' where email='$sid'"); 
	
		
if(!$retval)
		{
            die("Not Connected".mysql_error());
		}
		else
		{
			$err= "Profile Updated...";

    
		}
}	
?>
   
