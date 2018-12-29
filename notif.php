<?php 
error_reporting(0);

include("confing.php");
//session_start();
//$from=$_SESSION['email'];
//include('check.php');
 //$rmid=$_GET['rmid'];
	$hj=mysql_query("SELECT * FROM `add_vacancy` where id=(SELECT MAX(id) from add_vacancy)") or die(mysql_error());
	$dd=mysql_fetch_assoc($hj);
	 $title=$dd['title'];
	  $cname=$dd['cname'];
	 
	        $rmid=$_GET['rmid'];
	        $from="vismayapramod5@gmail.com";
	            $name="Admin";		
				//$email=$_POST['email'];
					$subject="NOTIFICATION ALERT.";
				   	$to=$rmid;
					//$from=$_POST['cemail'];
					$message='title'. $title."\n".
					          'cname'.$cname;   
	
$headers='MIME-Version:1.0'."\r\n";
$headers.='Content-type:text/html'."\r\n";
$headers.='From:'.$from."\r\n";
$body="Senders Name:$name <br>";
$body.="Message:$message <br>";

if(mail($to,$subject,$body,$headers))
{
echo "success";
header("location:sucess.php");	
}
else
{
$sendmail=1;
	echo "success";
	header("location:sucess.php");	
	}

?>
<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>NOTIFICATION</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<!--[if IE]>
		<link rel="stylesheet" href="css/ie.css" type="text/css" charset="utf-8">
	<![endif]-->

</head>
<body>
	<div id="page">
		<div id="header">
			<a href="index.html"></a>
			<div id="adbox">
	
			</div>
			
			
	  </div>
		<div id="contents">
			<div>
				<div id="headline">
					<div class="body">
						<!--<h2>About</h2>
						<p>
							This website template has been designed by <a href="http://www.freewebsitetemplates.com/">Free Website Templates</a> for you, for free. You can replace all this text with your own text. <a href="about.html" class="more">more</a>
						</p>-->
                        
    <center>                    
 
    </center>                    
					</div>
				</div>
			  <div id="main">
					
			    <p></div>
			</div>
		</div>
		<div id="footer">
		  <div class="connect">
				<a href="http://freewebsitetemplates.com/go/facebook/" target="_blank" class="facebook"></a> <a href="http://freewebsitetemplates.com/go/twitter/" target="_blank" class="twitter"></a> <a href="http://freewebsitetemplates.com/go/googleplus/" target="_blank" class="googleplus"></a>
		  </div>
			<p>
				Copyright &copy; 2012. All Rights Reserved.
			</p>
		</div>
	</div>
</body>
</html>