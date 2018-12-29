<?php 
//error_reporting(0);

include("confing.php");
/*session_start();
$email=$_SESSION['email'];
include('check.php');*/
$rmid=intval($_GET['rmid']);
	$hj=mysql_query("delete from `job_reg` where id='$rmid'") or die(mysql_error());
	if($hj)
	{
	echo '<script> alert("REMOVED FROM LIST"); </script>';
	header("refresh:0; url=viewstudentreg.php");
	}

?>