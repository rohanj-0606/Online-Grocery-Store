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
	left: 6px;
	top: 62px;
	right: auto;
	bottom: auto;
}
.ok2 {
	position: absolute;
	height: 101px;
	width: 558px;
	left: 11px;
	top: -1px;
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
	width: 216px;
	left: 1041px;
	top: 58px;
	right: auto;
	bottom: auto;
}
.ok4 {
	position: absolute;
	height: 46px;
	width: 84px;
	left: 14px;
	top: 72px;
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
	height: 199px;
	width: 292px;
	left: 30px;
	top: 116px;
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
.ok44 {
	position: absolute;
	height: 313px;
	width: 439px;
	left: 54px;
	top: 147px;
	right: auto;
	bottom: auto;
}
.rt {
	position: absolute;
	height: 131px;
	width: 147px;
	left: 34px;
	top: 352px;
	right: auto;
	bottom: auto;
}
.ok55 {
	position: absolute;
	height: 206px;
	width: 174px;
	left: 221px;
	top: 352px;
	right: auto;
	bottom: auto;
}
.jk {
	position: absolute;
	height: 204px;
	width: 167px;
	left: 433px;
	top: 335px;
	right: auto;
	bottom: auto;
}
.ok67 {
	position: absolute;
	height: 204px;
	width: 176px;
	left: 421px;
	top: 351px;
	right: auto;
	bottom: auto;
}
.pk0 {
	position: absolute;
	height: 185px;
	width: 156px;
	left: 31px;
	top: 580px;
	right: auto;
	bottom: auto;
}
.ok70 {
	position: absolute;
	height: 207px;
	width: 182px;
	left: 217px;
	top: 585px;
	right: auto;
	bottom: auto;
}
.ok80 {
	position: absolute;
	height: 208px;
	width: 188px;
	left: 434px;
	top: 584px;
	right: auto;
	bottom: auto;
}
.tg {
	position: fixed;
	height: auto;
	width: auto;
	left: auto;
	top: auto;
	right: auto;
	bottom: auto;
}
.ok6 {
}
.ok55 {
	position: absolute;
	height: auto;
	width: auto;
	left: auto;
	top: auto;
	right: auto;
	bottom: auto;
}
.ok7 {
	position: absolute;
	height: auto;
	width: auto;
	left: auto;
	top: auto;
	right: auto;
	bottom: auto;
}
.ok89 {
	position: absolute;
	height: auto;
	width: auto;
	left: 61px;
	top: 482px;
	right: auto;
	bottom: auto;
}
.ok90 {
	position: absolute;
	height: 89px;
	width: 358px;
	left: 620px;
	top: 78px;
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
  <h3><a href="logout1.php" style="text-decoration: none" >LOGOUT</a> | CHECKOUT</h3>
</div>
<div class="ok4">
  <h3><a href="cust_welcome.php" style="text-decoration: none">HOME</a></h3>
</div>
<div class="ok5">
  <h3>CATEGORIES</h3>
</div>
<div class="ok6"><img src="maxresdefault.jpg" width="650" height="600" alt=""/></div>
<div class="ok44">
  <h2>&nbsp;</h2>
  <h2>&nbsp;</h2>
  <h2>CUSTOMER CHECK OUT !!</h2>
  <p>
    <?php
$link = mysqli_connect("localhost", "root", "root", "new");

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
$sql = "SELECT * FROM products where cust_id='{$_SESSION['cid']}' and quant>=1";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table border='1'>";
            echo "<tr>";
                echo "<th>Customer_id</th>";
                echo "<th>Product_name</th>";
                echo "<th>Quantity</th>";
                echo "<th>Price</th>";
				echo "<th>Total</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['cust_id'] . "</td>";
                echo "<td>" . $row['prod_name'] . "</td>";
                echo "<td>" . $row['quant'] . "</td>";
                echo "<td>" . $row['price'] . "</td>";
				echo "<td>" . $row['quant'] * $row['price'] . "</td>";
			
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
<h3> YOUR TOTAL IS : </h3
  ><p></p>
</div>
<div class="ok89">
<form action="pay.php" method="post">
  <input type="submit" name="submit" id="submit" value="CHECK OUT">
 
  </form>
</div>
<div class="ok90">
  <form action="search.php" method="GET">
  <input name="query" type="text" id="textfield">
  <input type="submit" name="submit7" id="submit7" value="Search">
  </form>
</div>
</body>
</html>

 



