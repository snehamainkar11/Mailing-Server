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
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
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
          <li class="nav-item active ">
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
            <div class="col-md-16">
              <div class="card">
<div class="card-header card-header-primary">
                  <h4 class="card-title">Compose Mail</h4>
                  <p class="card-category">Please fill all fields</p>
                </div>
<div class="w3-container">
<form style= "text-align:left; background-color: rgba(240, 249, 240, 0.6);" method="post" enctype="multipart/form-data">


<table width="80%" border="0" >
  <?php echo @$err; ?>
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
</div>
</div>
</div>
</div>
<?php
session_start();
include_once('connection.php');
@$to=$_POST['to'];
@$sub=$_POST['sub'];
@$msg=$_POST['msg'];
@$file=$_FILES['file']['name'];
$id=@$_SESSION['usrnm'];
$send = true;

if(@$_REQUEST['save'])
{
	if($sub=="" || $msg=="")
	{
	$err= "<font color='red'>Fill subject and message first</font>";
	}
	
	else
	{
	$query="INSERT INTO draft (uid,sub,fill,msg,cdate,rec_id) values('$id','$sub','$file','$msg',NOW(),'$to')";
	mysql_query($query);
	$err= "<font color='green'>Message Saved into Drafts..</font>";
	}
}	



$sql=mysql_query("SELECT * FROM draft where id='$id' ");
while($dd=mysql_fetch_array($sql))
	{
	$uid=$dd['uid'];
	$rec=$dd['rec_id'];
	$sub=$dd['sub'];
	$msg=$dd['msg'];
	$att=$dd['fill'];
	

	mysql_query("insert into mails (rec_id,sen_id,sub,msg,attachment,msgdate) values('$rec','$uid','$sub','$msg','$att','')");
	
	
	mysql_query("delete from draft where id='$id' and id='$v'");

	}


if(@$_REQUEST['send'])
{
	if($to=="" || $sub=="" || $msg=="")
	{
	$err= "fill the related data first";
	}
	
	else
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
$mail->AddAttachment($file_name);

try{
if(!$mail->send()) 
{
	$message['type'] = 'error';
    $message['msg'] =  "Mailer Error: " . $mail->ErrorInfo;
	mysql_query("INSERT INTO mails values('','$id','$id','$sub','$msg','',NOW())");
		$err= "<h5 style='color:green'>message failed....</h5>";

} 
else 
{
	$message['type'] = 'success';
    $message['msg'] =  "Message has been sent successfully";
	
mysql_query("INSERT INTO mails (rec_id,sen_id,sub,msg,attachment,msgdate) values('$to','$id','$sub','$msg','$file_name',NOW())");
		$err= "<h5 style='color:green'>Message sent Successfully.....</h5>";
     
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
?>


    </div>
  </div>
  <div class="fixed-plugin">
    <div class="dropdown show-dropdown">
      <a href="#" data-toggle="dropdown">
        <i class="fa fa-cog fa-2x"> </i>
      </a>
      <ul class="dropdown-menu">
        <li class="header-title"> Sidebar Filters</li>
        <li class="adjustments-line">
          <a href="javascript:void(0)" class="switch-trigger active-color">
            <div class="badge-colors ml-auto mr-auto">
              <span class="badge filter badge-purple" data-color="purple"></span>
              <span class="badge filter badge-azure" data-color="azure"></span>
              <span class="badge filter badge-green" data-color="green"></span>
              <span class="badge filter badge-warning" data-color="orange"></span>
              <span class="badge filter badge-danger" data-color="danger"></span>
              <span class="badge filter badge-rose active" data-color="rose"></span>
            </div>
            <div class="clearfix"></div>
          </a>
        </li>
        <li class="header-title">Images</li>
        <li class="active">
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="../assets/img/sidebar-1.jpg" alt="">
          </a>
        </li>
        <li>
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="../assets/img/sidebar-2.jpg" alt="">
          </a>
        </li>
        <li>
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="../assets/img/sidebar-3.jpg" alt="">
          </a>
        </li>
        <li>
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="../assets/img/sidebar-4.jpg" alt="">
          </a>
        </li>
       
      </ul>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap-material-design.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!-- Plugin for the momentJs  -->
  <script src="../assets/js/plugins/moment.min.js"></script>
  <!--  Plugin for Sweet Alert -->
  <script src="../assets/js/plugins/sweetalert2.js"></script>
  <!-- Forms Validations Plugin -->
  <script src="../assets/js/plugins/jquery.validate.min.js"></script>
  <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
  <script src="../assets/js/plugins/jquery.bootstrap-wizard.js"></script>
  <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
  <script src="../assets/js/plugins/bootstrap-selectpicker.js"></script>
  <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
  <script src="../assets/js/plugins/bootstrap-datetimepicker.min.js"></script>
  <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
  <script src="../assets/js/plugins/jquery.dataTables.min.js"></script>
  <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
  <script src="../assets/js/plugins/bootstrap-tagsinput.js"></script>
  <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
  <script src="../assets/js/plugins/jasny-bootstrap.min.js"></script>
  <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
  <script src="../assets/js/plugins/fullcalendar.min.js"></script>
  <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
  <script src="../assets/js/plugins/jquery-jvectormap.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="../assets/js/plugins/nouislider.min.js"></script>
  <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
  <!-- Library for adding dinamically elements -->
  <script src="../assets/js/plugins/arrive.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chartist JS -->
  <script src="../assets/js/plugins/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.js?v=2.1.1" type="text/javascript"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      $().ready(function() {
        $sidebar = $('.sidebar');

        $sidebar_img_container = $sidebar.find('.sidebar-background');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');

        window_width = $(window).width();

        fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

        if (window_width > 767 && fixed_plugin_open == 'Dashboard') {
          if ($('.fixed-plugin .dropdown').hasClass('show-dropdown')) {
            $('.fixed-plugin .dropdown').addClass('open');
          }

        }

        $('.fixed-plugin a').click(function(event) {
          // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
          if ($(this).hasClass('switch-trigger')) {
            if (event.stopPropagation) {
              event.stopPropagation();
            } else if (window.event) {
              window.event.cancelBubble = true;
            }
          }
        });

        $('.fixed-plugin .active-color span').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-color', new_color);
          }

          if ($full_page.length != 0) {
            $full_page.attr('filter-color', new_color);
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.attr('data-color', new_color);
          }
        });

        $('.fixed-plugin .background-color .badge').click(function() {
          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('background-color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-background-color', new_color);
          }
        });

        $('.fixed-plugin .img-holder').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).parent('li').siblings().removeClass('active');
          $(this).parent('li').addClass('active');


          var new_image = $(this).find("img").attr('src');

          if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            $sidebar_img_container.fadeOut('fast', function() {
              $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
              $sidebar_img_container.fadeIn('fast');
            });
          }

          if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $full_page_background.fadeOut('fast', function() {
              $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
              $full_page_background.fadeIn('fast');
            });
          }

          if ($('.switch-sidebar-image input:checked').length == 0) {
            var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
            $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
          }
        });

        $('.switch-sidebar-image input').change(function() {
          $full_page_background = $('.full-page-background');

          $input = $(this);

          if ($input.is(':checked')) {
            if ($sidebar_img_container.length != 0) {
              $sidebar_img_container.fadeIn('fast');
              $sidebar.attr('data-image', '#');
            }

            if ($full_page_background.length != 0) {
              $full_page_background.fadeIn('fast');
              $full_page.attr('data-image', '#');
            }

            background_image = true;
          } else {
            if ($sidebar_img_container.length != 0) {
              $sidebar.removeAttr('data-image');
              $sidebar_img_container.fadeOut('fast');
            }

            if ($full_page_background.length != 0) {
              $full_page.removeAttr('data-image', '#');
              $full_page_background.fadeOut('fast');
            }

            background_image = false;
          }
        });

        $('.switch-sidebar-mini input').change(function() {
          $body = $('body');

          $input = $(this);

          if (md.misc.sidebar_mini_active == true) {
            $('body').removeClass('sidebar-mini');
            md.misc.sidebar_mini_active = false;

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

          } else {

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

            setTimeout(function() {
              $('body').addClass('sidebar-mini');

              md.misc.sidebar_mini_active = true;
            }, 300);
          }

          // we simulate the window Resize so the charts will get updated in realtime.
          var simulateWindowResize = setInterval(function() {
            window.dispatchEvent(new Event('resize'));
          }, 180);

          // we stop the simulation of Window Resize after the animations are completed
          setTimeout(function() {
            clearInterval(simulateWindowResize);
          }, 1000);

        });
      });
    });
  </script>


</body>
</form>
</html>

