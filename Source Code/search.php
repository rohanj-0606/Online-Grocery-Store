<?php
include("config.php");
$item=$_GET['query'];
if($item == 'egg' or $item == 'milk' or $item == 'cheese' or $item=='butter' or $item=='yogurt' or $item=='sourcream')
{
	header("Location: dairy.php");
}
else if($item == 'coffee' or $item == 'tea' or $item == 'water' or $item=='juice' or $item=='sportdrink' or $item=='softdrink')
{
	header("Location: beverages.php");
}
else if($item == 'pizza' or $item == 'icecream' or $item == 'veggies' or $item=='frenchfries' or $item=='burgerpatty' or $item=='seafood')
{
	header("Location: frozen.php");
}
else if($item == 'bread' or $item == 'cake' or $item == 'cookies' or $item=='croissant' or $item=='cupcakes' or $item=='breadsticks')
{
	header("Location: bakery.php");
}
else if($item == 'onion' or $item == 'tomato' or $item == 'mushroom' or $item=='greenpepper' or $item=='potato' or $item=='cabbage')
{
	header("Location: produce.php");
}
else if($item == 'popcorn' or $item == 'salsa' or $item == 'chips' or $item=='pretzels' or $item=='peanuts' or $item=='crackers')
{
	header("Location: snacks.php");
}


else
  {
	header("Location: dairy.php");  
  }
  
?>