<?php
include("config.php");
$sql2="UPDATE address SET name='$val1', street='$val2', city='$val3', zipcode='$val4', country='$val5' WHERE id='$iid'";

if(mysqli_query($db, $sql2))
{
  header("Location: view.php");
}

 else{
  
 echo "ERROR: Could not able to execute $sql";
}
?>