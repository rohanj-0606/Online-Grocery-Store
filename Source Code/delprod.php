<?php
include("config.php");
$id=$_GET['id'];
$sql2="delete from products where pid='$id'";
if(mysqli_query($db, $sql2))
{
  header("Location: staff_welcome.php");
}
 else
 {
 echo "ERROR: Could not able to execute $sql. " ;
}

?>