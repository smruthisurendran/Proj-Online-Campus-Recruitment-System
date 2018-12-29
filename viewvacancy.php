
<?php 
session_start();
include("confing.php");
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
</head>
<body>
	<div id="page">
		<div id="header">
			<a href="ahome.php".php" id="logo"></a>
			<ul id="navigation">
				<li>
					<a href="ahome.php".php" title="Home">Home</a></li>
				<li  class="selected">
					<a href="viewcompany.php".html">viewcompany</a></li>
				<li>
					<a href="viewstudentreg.php".php">viewstudentreg</a></li>
				<li>
					<a href="viewvacancy.php">viewvacancy</a></li>
				<li>
					<a href="viewfeedback.php">viewfeedback</a></li>
				<li>
					<a href="logout.php">LOGOUT</a></li>
			</ul>
		</div>
		<div id="contents">
			<div class="background">
				<h4><form id="form1" name="form1" method="post" action="">
  <table width="793" border="1">
    <tr style="color:#FFFFFF;">
      <td>id</td>
      <td>company</td>
      <td>jobtitle</td>
      <td>description</td>
      <td>experience</td>
      <td>location</td>
      <td>Ug</td>
      <td>Pg</td>
      <td>email</td>
      <td>LastDate</td>
	  <td></td>
    </tr>
    <?php 
   $date=date("d-m-y");
	  //echo $date;
  $tt=mysql_query("SELECT * FROM `add_vacancy` where ldate >='$date'  ") or die(mysql_error());
  while($tr=mysql_fetch_array($tt))
  {
  ?>
    <tr>
	<?php 
	/*$km=$tr['company'];
	$kk=mysql_query("SELECT `cname` FROM `jobprovider` WHERE `id`='$km' ") or die(mysql_error());
	$kj=mysql_fetch_array($kk);
	$kn=$kj['cname'];*/
	?>
      <td><?php echo $tr['id'];  ?></td>
      <td><?php echo $tr['cname'];  ?></td>
      <td><?php echo $tr['title']; ?></td>
      <td><?php echo $tr['discription']; ?></td>
      <td><?php echo $tr['experince']; ?></td>
      <td><?php echo $tr['Location']; ?></td>
      <td><?php echo $tr['ug']; ?></td>
      <td><?php echo $tr['pg']; ?></td>
      <td><?php echo $tr['email']; ?></td>
      <td><?php echo $tr['ldate']; ?></td>
	 
    </tr>
	 <?php } ?>
  </table>
 </form></p>
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
<?php
}
else
{
echo '<script>alert("plz login");</script>';
header('location:index.php');
}