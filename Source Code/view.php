<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
<style type="text/css">
.ok {
	position: absolute;
	height: 72px;
	width: 352px;
	left: 911px;
	top: 21px;
	right: auto;
	bottom: auto;
}
.ok1 {
	position: absolute;
	height: auto;
	width: 1231px;
	left: 9px;
	top: 63px;
	right: auto;
	bottom: auto;
}
.ok2 {
	position: absolute;
	height: 101px;
	width: 558px;
	left: 8px;
	top: 0px;
	right: auto;
	bottom: auto;
}
.ok2 {
}
.ok2 {
}
.ok3 {
	position: absolute;
	height: 42px;
	width: 362px;
	left: 907px;
	top: 56px;
	right: auto;
	bottom: auto;
}
.ok4 {
	position: absolute;
	height: 46px;
	width: 84px;
	left: 11px;
	top: 65px;
	right: auto;
	bottom: auto;
}
.ok4 {
}
.ok5 {
	position: absolute;
	height: auto;
	width: auto;
	left: 450px;
	top: 61px;
	right: auto;
	bottom: auto;
}
.ok6 {
	position: absolute;
	height: 753px;
	width: 715px;
	left: 669px;
	top: 111px;
	right: auto;
	bottom: auto;
}
.ok7 {
	position: absolute;
	height: 158px;
	width: 160px;
	left: 35px;
	top: 155px;
	right: auto;
	bottom: auto;
}
.ok9 {
	position: absolute;
	height: 182px;
	width: 184px;
	left: 249px;
	top: 157px;
	right: auto;
	bottom: auto;
}
.ok88 {
	position: absolute;
	height: 188px;
	width: 212px;
	left: 502px;
	top: 146px;
	right: auto;
	bottom: auto;
}
.ok12 {
	position: absolute;
	height: 173px;
	width: 183px;
	left: 25px;
	top: 455px;
	right: auto;
	bottom: auto;
}
.ok10 {
	position: absolute;
	height: 185px;
	width: 208px;
	left: 261px;
	top: 438px;
	right: auto;
	bottom: auto;
}
.ok23 {
	position: absolute;
	height: 45px;
	width: 503px;
	left: 65px;
	top: 167px;
	right: auto;
	bottom: auto;
}
.ok90 {
	position: absolute;
	height: 89px;
	width: 358px;
	left: 639px;
	top: 80px;
	right: auto;
	bottom: auto;
}
.lp {
	position: absolute;
	height: 367px;
	width: 426px;
	left: 105px;
	top: 251px;
	right: auto;
	bottom: auto;
}
</style>
</head>

<body>
<div class="ok">
  <h3>WELCOME CUSTOMER:
    <?php
session_start();
echo $_SESSION['username'];
?>
  </h3>
  <p>&nbsp;</p>
</div>
<div class="ok1"> 
  <hr>
</div>
<div class="ok2">
  <h1>WALMART GROCERY SHOPPING</h1>
</div>

<div class="ok3">
  <h3><a href="logout1.php" style="text-decoration: none" >LOGOUT</a> | ACCOUNT |<a href="checkout.php" style="text-decoration: none"> CHECKOUT</a></h3>
</div>
<div class="ok4">
  <h3><a href="cust_welcome.php" style="text-decoration: none">HOME</a></h3>
</div>
<div class="ok5">
  <h3>CATEGORIES</h3>
</div>

<div class="ok6"><img src="maxresdefault.jpg" width="650" height="600" alt=""/></div>
<div class="ok23"><center>
    <h1>ADDRESS OF CUSTOMER  </h1>
   
</center>
</div>
<div class="ok90">
<form action="search.php" method="GET">
  <input name="query" type="text" id="textfield">
  <input type="submit" name="submit2" id="submit2" value="Search">
  </form>
 
</div>
<div class="lp">
  <p>
    <?php
$link = mysqli_connect("localhost", "root", "root", "new");

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
$sql = "SELECT * FROM address";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table border='1'>";
            echo "<tr>";
                echo "<th>Name</th>";
                echo "<th>Street</th>";
                echo "<th>City</th>";
                echo "<th>Zipcode</th>";
				echo "<th>Country</th>";
				echo "<th>Update</th>";
				echo "<th>Delete</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['street'] . "</td>";
                echo "<td>" . $row['city'] . "</td>";
                echo "<td>" . $row['zipcode'] . "</td>";
				echo "<td>" . $row['country'] . "</td>";
				echo "<td><a href=\"update.php?id=".$row['id']."&status=app\">Update</a></td>";
				echo "<td><a href=\"deladd.php?id=".$row['id']."&status=app\">Delete</a></td>";
            echo "</tr>\n";
        }
        echo "</table>";
        // Close result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

mysqli_close($link);
?>
  </p>
  <p>&nbsp; </p>
  <form action="address.php">
    <input type="submit" name="submit" id="submit" value="Modify">
</form>
</div>
</body>
</html>