<?php 
//error_reporting(0);

include("confing.php");
/*session_start();
$email=$_SESSION['email'];
include('check.php');*/
$rmid=$_GET['rmid'];
	$hj=mysql_query("UPDATE `job_reg` SET `status`='$rmid'") or die(mysql_error());
	if($hj)
	{
	echo '<script> alert("verified"); </script>';
	header("refresh:0; url=viewstudentreg.php");
	}

?>