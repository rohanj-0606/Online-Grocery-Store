<?php
define('DB_SERVER', 'localhost');
//echo "rohan";
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'root');
define('DB_DATABASE', 'new');
$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
} 
else
{
//echo "connected";
}

?>