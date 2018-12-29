<?php
include('confing.php');
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
	<title>JOB RECRUITMENT</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<!--[if IE]>
		<link rel="stylesheet" href="css/ie.css" type="text/css" charset="utf-8">
	<![endif]-->
</head>
<body>
<div id="page">
		<div id="header">
		  <ul id="navigation">
				<li>
					<a href="ahome.php" title="Home">Home</a></li>
				<li  class="selected">
					<a href="viewcompany.php">viewcompany</a></li>
				<li>
					<a href="viewstudentreg.php">viewjobregistration</a></li>
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
				<div id="news">
				  <ul>
						<li>
							
							<p><center>
						<form id="form1" name="form1" method="post" action="">
  <table width="706" height="142" border="1" style="color:#FFFF99;">
    <tr style="color:#FFFFFF;">
    
      <td height="77">companyname</td>
      <td>companyaddress</td>
      <td>contactno</td>
      <td>email</td>
      <td>comapnywebsite</td>
      <td></td>
      
    </tr>
    
    <?php
	   $ss=mysql_query("select * from company") or die(mysql_query());
	 while($res=mysql_fetch_array($ss))
	 {
	?>
    <tr>
     
      <td><?php echo $res['cname']; ?></td>
      <td><?php echo $res['caddress']; ?></td>
       <td><?php echo $res['phone']; ?></td>
        <td><?php echo $res['email']; ?></td>
         <td><?php echo $res['site']; ?></td>
         
      <td><p><a href="rem.php?id=<?php echo $res['id']; ?>">Remove</a></p></td>
	   <td><p><a href="apv.php?id=<?php echo $res['id']; ?>">approve</a></p></td>
      
    </tr>
    <?php
	}
	
	?>
  </table>
</form></center>

                          </li>
					</ul>
			  </div>
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