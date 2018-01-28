<?php
include("config.php");
$id=$_GET['id'];
$sql2="delete from address where id='$id'";
if(mysqli_query($db, $sql2))
{
  header("Location: view.php");
}
 else
 {
 echo "ERROR: Could not able to execute $sql. " ;
}

?>