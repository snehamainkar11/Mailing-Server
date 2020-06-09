<?php
session_start();
$id=$_SESSION['usrnm'];
include_once('connection.php');

if(isset($_POST['delete'])) 
{
foreach($_POST['ch'] as $v)
{
//echo $v;
$sql=mysql_query("SELECT * FROM mails where rec_id='$id' and mail_id='$v'");
while($dd=mysql_fetch_array($sql))
	{
	$rec=$dd['rec_id'];
	$sen=$dd['sen_id'];
	$sub=$dd['sub'];
	$msg=$dd['msg'];
	$att=$dd['attachement'];

	mysql_query("insert into trash (rec_id,sen_id,sub,msg,date) values('$rec','$sen','$sub','$msg',now())");
	
	mysql_query("delete FROM mails where rec_id='$id' and mail_id='$v'");

	}
	
}
echo "<script>alert('Message deleted');window.location='inbox.php'</script>";
}
?>