<?php 
//error_reporting(0);

include("confing.php");
session_start();

//$username=$_SESSION['username'];
//include('check.php');
$rmid=intval($_GET['id']);

  
    $check=mysql_query("select * from company where id='$rmid' and status='1'");
    $checkrows=mysql_num_rows($check);
	if($checkrows>0)
	{
	echo '<script>alert("customer exists");</script>';
	header("refresh:0; url=viewcompany.php"); 
	}  
    else{
	
		  $hj=mysql_query("UPDATE company SET status='1' where id='$rmid'") or die(mysql_error());
		if($hj)
		{
		  echo '<script> alert(" verified"); </script>';
		  header("refresh:0; url=viewcompany.php");  
		}
	}
	