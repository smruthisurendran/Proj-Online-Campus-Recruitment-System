<?php
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
	<title>Solutions - Business Solution Website Template</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<!--[if IE]>
		<link rel="stylesheet" href="css/ie.css" type="text/css" charset="utf-8">
	<![endif]-->
</head>
<body>
<div id="page">
		<div id="header">
		  <ul id="navigation">
				<li class="selected">
				<li  class="selected">
					<a href="ahome.php" title="Home"home></a></li>
				<li>
					<a href="viewcompany.php">viewcompany</a></li>
				<li>
					<a href="viewstudentreg.php">viewjobregistration</a></li>
				<li>
					<a href="viewvacancy.php">VACANCY LIST</a></li>
				
				<li>
					<a href="viewfeedback.php">viewfeedback</a></li>
				<li>
					<a href="logout.php">LOGOUT</a></li>
			</ul>
</div>
		<div id="contents">
			<div class="background">
				<div id="solutions">
					<h4>This is a campus recruitment software for companies.</h4>
					<div>
						<img src="images/solutions.jpg" alt="Img" height="420" width="920">
						<div>
							<h2></p>
						</div>
					</div>
					<p>
						This portal enables companies to manage end to end campus placement process,
						right from advertising jobs,to conducttin online assessment,interacting with
						 students,shortlisting students for interview and final offer.</p>
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
?>