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
	left: 6px;
	top: 3px;
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
	height: auto;
	width: 262px;
	left: 349px;
	top: 184px;
	right: auto;
	bottom: auto;
}
.rt {
	position: absolute;
	height: 254px;
	width: 464px;
	left: 239px;
	top: 345px;
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
.ok90 {
}
.ok90 {
	position: absolute;
	height: auto;
	width: auto;
	left: auto;
	top: auto;
	right: auto;
	bottom: auto;
}
.ok901 {
	position: absolute;
	height: 89px;
	width: 358px;
	left: 625px;
	top: 70px;
	right: auto;
	bottom: auto;
}
.ok90 {
	position: absolute;
	height: auto;
	width: auto;
	left: auto;
	top: auto;
	right: auto;
	bottom: auto;
}
.ck {
	position: absolute;
	height: auto;
	width: 283px;
	left: 631px;
	top: 79px;
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
  <h3><a href="logout1.php" style="text-decoration: none" >LOGOUT</a> |<a href="checkout.php" style="text-decoration: none"> CHECKOUT</a></h3>
</div>
<div class="ok4">
  <h3><a href="cust_welcome.php" style="text-decoration: none">HOME</a></h3>
</div>
<div class="ok5">
  <h3>CATEGORIES</h3>
</div>
<div class="ok6"><img src="maxresdefault.jpg" width="650" height="600" alt=""/></div>
<div class="ok7">
  <h4><img src="dairy.jpg" width="223" height="167" alt=""/></h4>
</div>
<div class="ok44">
  <h2>DAIRY PRODUCTS</h2>
</div>
<div class="rt"><img src="eggs.jpg" width="125" height="109" alt=""/>
  <h4>
    <center>
      EGGS
      <form action="dairy.php" method="post">
        <select name="quant" id="quant">
<?php 
$con=mysqli_connect("localhost","root","root","new"); 
// Check connection 
if (mysqli_connect_errno()) { 
echo "Failed to connect to MySQL: " . mysqli_connect_error(); 

$results= mysqli_query("SELECT quant FROM products where prod_name='egg'"); 
while($row = mysqli_fetch_array($results)){ 
echo '<option value="' .$row['DivisionID']. '">'. $row['DivisionName']. '</option>' ; 
} 
?> 
        </select>
		
        <input type="submit" name="submit" id="submit" value="Add to cart">
      </form>
      <?php
      if(isset($_POST['submit']))
{
include("config.php");
$selected_val = $_POST['quant'];
echo "Eggs added in cart are: " .$selected_val;
$sql = "update products set quant='$selected_val' where cust_id='1' and prod_name='eggs'";
if(mysqli_query($db, $sql)){
   // echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
}
//mysql_query($sql);
}
?>
    </center>
  </h4>
</div>
<div class="ck">
  <form action="search.php" method="GET">
  <input name="query" type="text" id="textfield">
  <input type="submit" name="submit7" id="submit7" value="Search">
  </form>
</div>
</body>
</html>

 



