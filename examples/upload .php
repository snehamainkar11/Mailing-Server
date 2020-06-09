      <?php
session_start();
error_reporting(1);
$sid=$_SESSION['usrnm'];
include_once('connection.php');
$r=mysql_query("select * from register where email='$sid'");
$row=mysql_fetch_object($r);
$m=$row->mob;
$e=$row->email;
$f=$row->firstname;
$l=$row->lastname;

$mob=$_POST['mob'];
$dob=$_POST['dob'];

if(isset($_POST['submit']))
{
$file=$_FILES['file']['name'];
$folder = "/wampp/www/MailServer/examples/profile/";
$target_file = $folder . basename($_FILES['file']['name']);
    
move_uploaded_file($_FILES['file']['tmp_name'], $target_file);

$retval=mysql_query("UPDATE register set mob='$mob',dob='$dob' where email='$sid'"); 
	
		mysql_query("UPDATE register set photo='$file' where email='$sid'"); 
	
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