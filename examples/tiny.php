<?php require_once('PHPMailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->From = "snehamainkar11@gmail.com";
$mail->FromName = "Berkay Gündüz";
echo (extension_loaded('openssl')?'SSL loaded':'SSL not loaded')."\n"; 

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'tls://smtp.gmail.com:587';
  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                    
$mail->SMTPDebug = 2;
           // Enable SMTP authentication
$mail->Username = 'snehamainkar11@gmail.com';                 // SMTP username
$mail->Password = 'Shreya123$';                           // SMTP password
// $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
// $mail->Port = 587;               

if(isset($_POST['send'])){
	$to = $_POST['to'];
	$subject = $_POST['subject'];
	$text= $_POST['msg'];
	$mail->addAddress($to); //Recipient name is optional

$mail->From = "snehamainkar11@gmail.com";
$mail->FromName = "Sneha Mainkar";
$mail->addAddress($to); //Recipient name is optional
$mail->isHTML(true);
$mail->Subject = $subject;
$mail->Body =  $text;
// $mail->AltBody = "This is the plain text version of the email content";
if(!$mail->send()) 
{
	$message['type'] = 'error';
    $message['msg'] =  "Mailer Error: " . $mail->ErrorInfo;
} 
else 
{
	$message['type'] = 'success';
    $message['msg'] =  "Message has been sent successfully";
}
}?>
<table>
<?php echo @$err; ?>
<form method="post">
  <tr>
    <th scope="row">To</th>
    <td>
	<input type="text" name="to" class="form-control"/></td>
  </tr>
  <tr>
    <th  scope="row">Cc</th>
    <td><input type="text" class="form-control" name="cc"/></td>
  </tr></br>
  <tr>
    <th scope="row">Subject</th>
    <td><input type="text" class="form-control" name="sub" value="<?php echo $sub; ?>"/></td>
  </tr>
  <tr>
    <th height="70" scope="row">Upload File</th>
    <td><input type="file" name="file" id="file" value="<?php echo $att; ?>"/></td>
  </tr></br>
  <tr>
    <th height="52" scope="row">Message</th>
    <td><textarea rows="8" cols="10" class="form-control" cols="40" name="msg" value="<?php echo $msg ?>"></textarea></td>
  </tr>
  <tr>
    <th height="35" colspan="2" scope="row">
	<input type="submit" name="send" class="btn btn-primary pull-right" value="Send" onclick="composeMail.php"/>&nbsp;&nbsp;
	<input type="submit" name="save" class="btn btn-primary pull-right" value="Save" onclick="saveMail.php"/>&nbsp;&nbsp;
	<input type="reset" value="Cancel" class="btn btn-primary pull-right" />	</th>
  </tr>
   
</table>
	
<form>
</html>