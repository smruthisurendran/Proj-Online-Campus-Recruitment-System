
<?php 
error_reporting(0);
include("confing.php");
session_start();
$username=$_SESSION['username'];
include('check.php');
if(isset($_SESSION['username']))
{

?>

<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>about</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<!--[if IE]>
		<link rel="stylesheet" href="css/ie.css" type="text/css" charset="utf-8">
	<![endif]-->
	<style>
	 .contents{
	  width:100%;
	 }
	 .contents img{
	 width:100%;
	 }
	</style>
</head>
<body>
	<div id="page">
		<div id="header">
			<a href="ahome.php" id="logo"></a>
			<ul id="navigation">
				<li>
					<a href="ahome.php" title="Home"></a></li>
				<li >
					<a href="viewcompany.php">viewcompany</a></li>
				<li class="selected">
					<a href="viewstudentreg.php">viewjobregistration</a></li>
				<li>
					<a href="viewvacancy.php">viewvacancy</a></li>
					<li>
					<a href="viewfeedback.php">viewfeedback</a></li>
				<li>
					<a href="logout.php">LOGOUT</a></li>
			</ul>
		</div>
		
		<div>
			<div style="width:100%; color:#FFFFFF;">
				<h4><form id="form1" name="form1" method="post" action="">
  <table width="960" border="1" style="border:1px solid #CCCC00;"><br>
    <tr>
      <td width="73">name</td>
      <td width="105">address</td>
      <td width="92">gender</td>
      <td width="126">qualification</td>
      <td width="70">phone</td>
      <td width="55">email</td>
      <td width="66">picture</td>
      <td width="43">&nbsp;</td>
    </tr></br>
    
    <?php 
  $tt=mysql_query("SELECT * FROM `job_reg` ") or die(mysql_error());
  while($tr=mysql_fetch_array($tt))
  {
  ?>
    <tr>
      <td><?php echo $tr['name'];?></td>
      <td><?php echo $tr['address'];?></td>
      <td><?php echo $tr['gender'];?></td>
      <td><?php echo $tr['qualification'];?></td>
      <td><?php echo $tr['phoneno'];?></td>
      <td><?php echo $tr['email'];?></td>
	 
	  <td><img src="../student/upload/image/<?php echo $tr['image'];?>" width="70" height="70"></td>
	  
    <td><a href="remove.php?rmid=<?php echo $tr['id']; ?>">Remove</a></td>
	<td><a href="aprove.php?rmid=<?php echo $tr['id']; ?>">Aprove</a></td>
	 <td><a href="notif.php?rmid=<?php echo $tr['email']; ?>">Sent Notification</a></td>
    </tr>
     <?php } ?>
  </table>
</form></p>
			</div>
		</div>
</div>
</body>
</html>
<?php
}
else
{
echo '<script>alert("plz login");</script>';
header('location:index.php');
}
?>