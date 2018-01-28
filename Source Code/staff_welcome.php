
<html>
<head>
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
	left: 1126px;
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
	left: 204px;
	top: 149px;
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
	top: 437px;
	right: auto;
	bottom: auto;
}
.ok23 {
	position: absolute;
	height: 206px;
	width: 222px;
	left: 517px;
	top: 432px;
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
</style>
</head>

<body>
<div class="ok">
  <h3>WELCOME STAFF:
    <?php
session_start();
echo $_SESSION['username'];
echo $_SESSION['cid'];
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
  <h3><a href="logout1.php" style="text-decoration: none" >LOGOUT</a></h3>
</div>
<div class="ok4">
  <h3><a href="staff_welcome.php" style="text-decoration: none">HOME</a></h3>
 </div>
<div class="ok5">
  <h3>CATEGORIES</h3>
</div>

<div class="ok6"><img src="maxresdefault.jpg" width="650" height="600" alt=""/></div>
<div class="ok9">
  <center>
  <?php
$link = mysqli_connect("localhost", "root", "root", "new");

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
$sql = "SELECT * FROM products";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table border='1'>";
            echo "<tr>";
			echo "<th>PRODUCT ID</th>";
                echo "<th>Product_name</th>";
                echo "<th>Quantity</th>";
                echo "<th>Price</th>";
				echo "<th>Update</th>";
				echo "<th>Delete</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
				echo "<td>" . $row['pid'] . "</td>";
                echo "<td>" . $row['prod_name'] . "</td>";
                echo "<td>" . $row['quant'] . "</td>";
                echo "<td>" . $row['price'] . "</td>";
				echo "<td><a href=\"updprod.php?id=".$row['pid']."&status=app\">Update</a></td>";
				echo "<td><a href=\"delprod.php?id=".$row['pid']."&status=app\">Delete</a></td>";
			
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
    <h3>&nbsp;</h3>
</center></div>
<div class="ok90">
  <form action="search.php" method="GET">
  <input name="query" type="text" id="textfield">
  <input type="submit" name="submit2" id="submit2" value="Search">
  </form>
 
</div>
</body>
</html>