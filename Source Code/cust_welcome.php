
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
  <h3><a href="logout1.php" style="text-decoration: none" >LOGOUT</a> | <a href="account.php">ACCOUNT</a> |<a href="checkout.php" style="text-decoration: none"> CHECKOUT</a></h3>
</div>
<div class="ok4">
  <h3><a href="cust_welcome.php" style="text-decoration: none">HOME</a></h3>
 </div>
<div class="ok5">
  <h3>CATEGORIES</h3>
</div>

<div class="ok6"><img src="maxresdefault.jpg" width="650" height="600" alt=""/></div>
<div class="ok7">
  <h4><a href="dairy.php"><img src="dairy.jpg" width="177" height="133" alt=""/></a> </h4>
  <center>
    <h3><a href="dairy.php" style="text-decoration: none">DAIRY</a></h3>
  </center>
</div>
<div class="ok9"><a href="beverages.php"><img src="pepsico.jpg" width="201" height="151" alt=""/></a> 
<center>
    <h3><a href="beverages.php" style="text-decoration: none">BEVERAGES</a></h3>
  </center></div>
<div class="ok88"><a href="frozen.php"><img src="frozen_food_2.jpg" width="213" height="159" alt=""/></a>
<center>
    <h3><a href="frozen.php" style="text-decoration: none" >FROZEN</a></h3>
  </center></div>
<div class="ok12"><a href="bakery.php"><img src="baking.jpg" width="183" height="153" alt=""/></a>
<center>
    <h3><a href="bakery.php" style="text-decoration: none">BAKERY</a></h3>
  </center></div>
<div class="ok10"><a href="produce.php"><img src="Produce.jpg" width="205" height="175" alt=""/></a>
  <center>
    <h3><a href="produce.php" style="text-decoration: none">PRODUCE</a></h3>
  </center>
</div>
  
<div class="ok23"><a href="snacks.php"><img src="snacks.jpg" width="190" height="180" alt=""/></a><center>
    <h3><a href="snacks.php" style="text-decoration: none">SNACKS</a></h3>
</center></div>
<div class="ok90">
<form action="search.php" method="GET">
  <input name="query" type="text" id="textfield">
  <input type="submit" name="submit2" id="submit2" value="Search">
  </form>
 
</div>
</body>
</html>