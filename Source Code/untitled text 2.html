<?php
ob_start();
include("config.php");
session_start();
$myusername=mysqli_real_escape_string($db,$_POST['username']); 
$mypassword=mysqli_real_escape_string($db,$_POST['password']); 
$passwordSecure=md5($mypassword);
$sql="SELECT * FROM staff WHERE id='$myusername' and pwd='$mypassword'";
$result=mysqli_query($db,$sql);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
$active=$row['active'];
$count=mysqli_num_rows($result);

if($count == 1)
{
$sql2="SELECT sid FROM staff WHERE id='$myusername' and pwd='$mypassword'";
$result2=mysqli_query($db,$sql2);
$row1=mysqli_fetch_array($result2,MYSQLI_ASSOC);
$active1=$row['active1'];
$cnt=mysqli_num_rows($result2);
if($cnt== 1)
{
$_SESSION['cid'] = $row1['sid'];
header("Location: staff_welcome.php");
$_SESSION['username'] = $_POST['username'];
ob_end_flush();
}
}
else 
{
echo "Your Login Name or Password is invalid";
}
?>