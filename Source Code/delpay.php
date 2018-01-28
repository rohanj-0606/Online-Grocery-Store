<?php
include("config.php");
$id=$_GET['id'];
$sql2="delete from payment where id='$id'";
if(mysqli_query($db, $sql2))
{
  header("Location: viewpay.php");
}
 else
 {
 echo "ERROR: Could not able to execute $sql. " ;
}

?>