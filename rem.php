<?php
include("confing.php");
$id=$_GET['id'];

$sql=mysql_query("delete from company where id='$id'") or die(mysql_error());
if($sql)
{
 echo '<script> alert("REMOVED FROM LIST"); </script>';
  header('location:viewcompany.php');
}

?>