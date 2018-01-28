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
	top: 61px;
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
	left: 423px;
	top: 346px;
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
	top: 581px;
	right: auto;
	bottom: auto;
}
.ok80 {
	position: absolute;
	height: 208px;
	width: 188px;
	left: 434px;
	top: 577px;
	right: auto;
	bottom: auto;
}
.ck {
	position: absolute;
	height: auto;
	width: auto;
	left: 651px;
	top: 78px;
	right: auto;
	bottom: auto;
}
</style>
</head>

<body>
<div class="ok70"><img src="pretzels.jpg" width="150" height="120" alt=""/><h4>
    <center>
    PRETZELS
      <form action="snacks.php" method="post">
        <select name="quant5" id="quant">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
        </select>
        <input type="submit" name="submit5" id="submit5" value="Add to cart">
      </form>
      <?php


if(isset($_POST['submit5']))
{
include("config.php");
$selected_val5 = $_POST['quant5'];
echo "Pretzels added in cart are: " .$selected_val5;
$sql5 = "INSERT INTO products VALUES ('pretzels','$selected_val5')";
if(mysqli_query($db, $sql5)){
    //echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
}
//mysql_query($sql3);
}
?>
</center></h4></div>
<div class="pk0"><img src="cheezeit.jpg" width="143" height="113" alt=""/>
  <h4>
    <center>
      CRACKER
        <form action="snacks.php" method="post">
        <select name="quant4" id="quant">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
        </select>
        <input type="submit" name="submit4" id="submit4" value="Add to cart">
      </form>
      <?php


if(isset($_POST['submit4']))
{
include("config.php");
$selected_val4 = $_POST['quant4'];
echo "Crackers added in cart are: " .$selected_val4;
$sql4 = "INSERT INTO products VALUES ('crackers','$selected_val4')";
if(mysqli_query($db, $sql4)){
    //echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
}
//mysql_query($sql3);
}
?>
    </center>
  </h4>
</div>
<div class="ok67"><img src="chips.jpg" width="137" height="115" alt=""/>
  <h4>
    <center>
      CHIPS
        <form action="snacks.php" method="post">
        <select name="quant3" id="quant">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
        </select>
        <input type="submit" name="submit3" id="submit3" value="Add to cart">
      </form>
      <?php


if(isset($_POST['submit3']))
{
include("config.php");
$selected_val3 = $_POST['quant3'];
echo "Chips added in cart are: " .$selected_val3;
$sql3 = "INSERT INTO products VALUES ('chips','$selected_val3')";
if(mysqli_query($db, $sql3)){
    //echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
}
//mysql_query($sql3);
}
?>
    </center>
  </h4>
</div>
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
<div class="ck">
<form action="search.php" method="GET">
  <input name="query" type="text" id="textfield">
  <input type="submit" name="submit7" id="submit7" value="Search">
  </form></div>
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
  <h4><img src="snck.jpg" width="290" height="155" alt=""/></h4>
</div>
<div class="ok44">
  <h2>SNACK PRODUCTS</h2>
</div>
<div class="rt"><img src="popcorn.jpg" width="125" height="109" alt=""/>
  <h4>
    <center>
    POPCORN
      <form action="snacks.php" method="post">
        <select name="quant" id="quant">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
        </select>
        <input type="submit" name="submit" id="submit" value="Add to cart">
      </form>
      <?php
      if(isset($_POST['submit']))
{
include("config.php");
$selected_val = $_POST['quant'];
echo "Popcorn added in cart are: " .$selected_val;
$sql = "INSERT INTO products VALUES ('popcorn','$selected_val')";
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
<div class="ok55"><img src="salsa.jpg" width="126" height="115" alt=""/>
  <h4>
    <center>
    SALSA
    <form action="snacks.php" method="post">
        <select name="quant2" id="quant2">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
        </select>
        <input type="submit" name="submit2" id="submit2" value="Add to cart">
      </form>
      <?php
     if(isset($_POST['submit2']))
{
include("config.php");
$selected_val1 = $_POST['quant2'];
echo "Salsa added in cart are: " .$selected_val1;
$sql2 = "INSERT INTO products VALUES ('salsa','$selected_val1')";
if(mysqli_query($db, $sql2)){
   // echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
}
//mysql_query($sql2);
}
?>
    </center>
  </h4>
</div>
<div class="ok80"><img src="peanuts.jpg" width="130" height="120" alt=""/>
<h4><center>
  PEANUTS
      <form action="snacks.php" method="post">
        <select name="quant6" id="quant6">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
        </select>
        <input type="submit" name="submit6" id="submit6" value="Add to cart">
      </form>
<?php
     if(isset($_POST['submit6']))
{
include("config.php");
$selected_val6 = $_POST['quant6'];
echo "Peanuts added in cart are: " .$selected_val6;
$sql6 = "INSERT INTO products VALUES ('peanuts','$selected_val6')";
if(mysqli_query($db, $sql6)){
   // echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
}
//mysql_query($sql2);
}
?></center></h4></div>
</body>
</html>

 



