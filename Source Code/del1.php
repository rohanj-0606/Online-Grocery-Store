<?php
include("config.php");
$sql = "update products set quant='0' where cust_id='1'";
if(mysqli_query($db, $sql))
{

header("Location: confirm.php");
} else
{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
}

?>