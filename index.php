<?php
include("confing.php");
session_start();
if(isset($_POST['button']))
{
	$username=$_POST['username'];
	$password=$_POST['password'];
		$sql=mysql_query("select * from admin where username='$username' and password='$password'") or die(mysql_error());
		//$res=mysql_query($sql);
		
	if($row=mysql_fetch_row($sql)>=1)
	{
	  $_SESSION['username']=$username;
		header('location:ahome.php');
	}
	else
	{
		echo '<script>alert("LOGIN ERROR"); </script>';
	}

}

?>


<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>student</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<!--[if IE]>
		<link rel="stylesheet" href="css/ie.css" type="text/css" charset="utf-8">
	<![endif]-->
	
	
<script>
function valid()
{
 var username=document.getElementById('username').value;
  if(username=="")
 {
  alert("username Missing");
  document.getElementById('username').focus();
  return false;
 }
 var Password=document.getElementById('password').value;
  if(Password=="")
 {
  alert("Password Missing");
  document.getElementById('password').focus();
  return false;
 }
 }
 </script>
	
</head>
<body>
	<div id="page">
		<div id="header">
			<a href="index.html" id="logo"></a>
			
			<div id="adbox">
			
			<center>
			<form id="form1" name="form1" method="post" action="">
  <table width="422" height="191" style="margin-top:15%; border:2px solid; border-radius:3px; color:#DDCA7B; ">
    <tr>
      <td width="202" align="center">username</td>
      <td width="202"><label>
        <input type="text" name="username" id="username" />
      </label></td>
    </tr>
    <tr>
      <td align="center">Password</td>
      <td><label>
        <input type="password" name="password" id="password" />
      </label></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <label>
        <input type="submit" name="button" id="button" value="Submit" onClick="return valid();"/>
        </label>
      </div></td>
    </tr>
  </table>
</form>
    </center>                    
				
			</div>
		</div>
		<div id="contents">
			<div>
			  <div id="main">
					
					<p>
					
					</ul>
				</div>
			</div>
		</div>
		<div id="footer">
			<div class="connect">
				<a href="http://freewebsitetemplates.com/go/facebook/" target="_blank" class="facebook"></a> <a href="http://freewebsitetemplates.com/go/twitter/" target="_blank" class="twitter"></a> <a href="http://freewebsitetemplates.com/go/googleplus/" target="_blank" class="googleplus"></a>
			</div>
			
		</div>
	</div>
</body>
</html>