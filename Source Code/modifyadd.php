
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
	height: 414px;
	width: 502px;
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
    <h1>ADDRESS    </h1>
    <h3><form action="modifyadd.php" method="post">
      <label for="textfield2">NAME:  </label>
      <input type="text" name="name" text="<?php echo $name ?>"/>
    <p>
      <label for="textfield3">STREET:</label>
      <input type="text" name="street" text="<?php echo $street ?>"/>
      </p>
      <label for="textfield4">CITY:</label>
      <input type="text" name="city" id="city"/>

      <label for="textfield5"><br>
        <br>
      ZIPCODE:</label>
      <input type="text" name="zip" id="zip"/>
      <label for="textfield6"><br>
        <br>
        COUNTRY:</label>
      <input type="text" name="country" id="country"/>
    
    <p>
    
      <input type="submit" name="submit" id="submit" value="ADD">
      <p>
        <input type="submit" name="submit2" id="button" value="MODIFY">
    </form></h3>
	  	
    </p>
   
</center>
</div>
<div class="ok90">
<form action="search.php" method="GET">
  <input name="query" type="text" id="textfield">
  <input type="submit" name="submit2" id="submit2" value="Search">
  </form>
 
</div>
</body>
</html>
