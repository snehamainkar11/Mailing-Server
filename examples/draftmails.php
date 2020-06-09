<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
     Mailing Server
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">

  <link href="../assets/css/material-dashboard.css?v=2.1.1" rel="stylesheet" />
 
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
      
      <div class="logo">
        <a  class="simple-text logo-normal">
         Mailing Server
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
		 <li class="nav-item ">
            <a class="nav-link" href="./user.php">
              <i class="material-icons">person</i>
              <p>User Profile</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./compose.php">
              <i class="material-icons">create</i>
              <p>Compose Mail</p>
            </a>
          </li>
         
          <li class="nav-item ">
            <a class="nav-link" href="./inbox.php">
              <i class="material-icons">inbox</i>
              <p>Inbox</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./sent.php">
              <i class="material-icons">send</i>
              <p>Sent</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./draft.php">
              <i class="material-icons">save</i>
              <p>Drafts</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./trash.php">
              <i class="material-icons">delete</i>
              <p>Trash</p>
            </a>
          </li>
         
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <b><a class="navbar-brand">Welcome&nbsp;&nbsp;<?php session_start(); echo @$_SESSION['usrnm'];?></a>
          </b></div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <form class="navbar-form">
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <button type="submit" class="btn btn-white btn-round btn-just-icon">
                  <i class="material-icons">search</i>
                  <div class="ripple-container"></div>
                </button>
              </div>
            </form>
            <ul class="navbar-nav">
       <li class="nav-item dropdown">
                <a class="nav-link" href="#pablo" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Settings
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  <a class="dropdown-item" href="profile.php">Profile</a>
                  <a class="dropdown-item" href="changePass.php">Change Password</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="logout.php">Log out</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
 <div class="content">
        <div class="container-fluid">
            <div class="col-md-26">
              <div class="card">
             <div class="card-header card-header-primary">
                  <h4 class="card-title">Edit Mail</h4>
                  
                </div>
<div class="w3-container">
<form method='POST' enctype='multipart/form-data'>
<?php
session_start();
include_once('connection.php');
$id=$_SESSION['usrnm'];
@$did=$_GET['condraft'];
$sql=mysql_query("SELECT * FROM draft where uid='$id' and id='$did'");
$row=mysql_fetch_object($sql);
echo"<table border='0' width='800px' height='50%' class='w3-table-all'>";
echo "<div class='card card-profile'><div class='card-avatar'>";
echo "<tr>";
echo "<td>Subject:</td>";
echo "<td><input  class='form-control' type='text' name='sub' value='$row->sub'></td>";
echo "</tr>";
echo "</h2><tr>";

echo "<td>To :</td>";
echo "<td><input type='text' class='form-control' name='to' value='$row->rec_id'></td>";
echo "</tr>";

echo "<tr>";
echo "<td colspan='2' align='center'><input type='textArea' rows='10' cols='40'class='form-control' name='msg' value='$row->msg'></td>";
echo "</tr>";

echo "<tr>";
echo "<td>Attachment:</td>";
echo "<td><input type='file' name='file'></td>";

echo "</tr>";
echo "<td><input type='submit' name='send' class='btn btn-primary pull-left' value='Send'/>
</td><td><input type='submit' value='Save' name='save' class='btn btn-primary pull-left' /></td></tr></table></form>";
@$to=$_POST['to'];
@$sub=$_POST['sub'];
@$msg=$_POST['msg'];
@$file=$_FILES['file']['name'];
$id=@$_SESSION['usrnm'];
$send = true;
	if(@$_REQUEST['save'])
{
    $sql=mysql_query("SELECT * FROM draft where uid='$id' and id='$did'");
	$query="UPDATE DRAFT set sub='$sub',fill='$file',msg='$msg',cdate=NOW(),rec_id='$to' where  uid='$id' and id='$did'";
	mysql_query($query);
	$err= "<font color='green'>Message Saved into Drafts..</font>";
	
}	

if(isset($_REQUEST['send'])){
	
		if($to=="" || $sub=="" || $msg=="")
	{
	$err= "fill the related data first";
	}
	
	else
	{
	$d=mysql_query("SELECT email FROM register where email='$to'");
	$row=mysql_num_rows($d);
	if($row==1)
		{
		$file_name = "";
      if(isset($_FILES['file'])){
      $errors= array();
      $file_name = $_FILES['file']['name'];
      $file_size =$_FILES['file']['size'];
      $file_tmp =$_FILES['file']['tmp_name'];
      $file_type=$_FILES['file']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['file']['name'])));
       if($file_size >= 2050505){
         $send = false;
         $errors[]='File size must be exactly 2 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"C:/wamp/www/Mailserver/examples/uploads/".$id.'/'.$file_name);
       
require_once('PHPMailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->From = "snehamainkar11@gmail.com";
$mail->FromName = "Sneha Mainkar";
//echo (extension_loaded('openssl')?'SSL loaded':'SSL not loaded')."\n"; 

$mail->isSMTP();                                    
$mail->Host = 'tls://smtp.gmail.com:587';

$mail->SMTPAuth = true;                    
$mail->SMTPDebug = 2;
          
$mail->Username = 'snehamainkar11@gmail.com';                 
$mail->Password = 'Shreya123$';                          
// $mail->SMTPSecure = 'tls';                            
// $mail->Port = 587;               

$mail->From = "snehamainkar11@gmail.com";
$mail->FromName = "Sneha Mainkar";
$mail->addAddress($to); 
$mail->isHTML(true);
$mail->Subject = $sub;
$mail->Body =  $msg;
$mail->AddAttachment($file);

try{
if(!$mail->send()) 
{
	$message['type'] = 'error';
    $message['msg'] =  "Mailer Error: " . $mail->ErrorInfo;


} 
else 
{
	$message['type'] = 'success';
    $message['msg'] =  "Message has been sent successfully";
		
mysql_query("INSERT INTO mails (rec_id,sen_id,sub,msg,attachment,msgdate) values('$to','$id','$sub','$msg','$file',NOW())");
		$err= "<h5 style='color:green'>Message sent Successfully.....</h5>";
 
$sql=mysql_query("SELECT * FROM mails where rec_id='$id' and mail_id='$did'");

mysql_query("delete from draft where uid='$id' and id='$did'");
	
}
}
catch (phpmailerException $e) {
echo $e->errorMessage(); 
} catch (Exception $e) {
echo $e->getMessage(); 
}
}
	  }
		}
	}
}
?>
	