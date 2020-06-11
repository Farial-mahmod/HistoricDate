<html>
<head> 
<title> Historic Date </title>
<meta name="viewport" content="width=device-width , initial-scale=1.0">
<meta name="description" content="Historic Date is an application that shows highlighted past events took place on a particular day." />
<link rel="icon" href="Taba.jpg ">

<style>

.topnav {
  overflow: hidden;
  background-color: ;

}

.topnav a {
  float: center;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: red;
  
}

.topnav a.active {
  background-color: lightgray;
  color: crimson;
}

body{
background-image: url(" ");
background-position: center;
background-repeat: no-repeat;
background-attachment: fixed;
background-size: ;
background-color: powderblue;
}

</style>

</head> 

<body>
<center>

<div class="topnav">
  <a class="active" href="index.php">Home</a>
  <a class="active" href="about.php">About</a>
  <a class="active" href="contact.php">Contact</a>
  
</div>

<div style="padding-left:16px">
</div> 



<?php
error_reporting(0);

// api

$a ='http://numbersapi.com/';

// receiving user input and avoiding xss

$d = htmlentities($_POST['d']);
$m = htmlentities($_POST['m']);

// valid range of date

if($m > 31 || $m< 1 || $d >12 || $d <1)
{
	print "<br/><br/><br/><br/>";
	
	echo "<h1><font face=verdana color=navy><i>. . Invalid Date . . . </font></h1> ";
}

else
{
	
$date = $d . "/" . $m ;

// historic event

$result = $a . $date;

print "<br/><br/><br/><br/>";

// output
echo file_get_contents($result);
}


?>

<br/><br/><br/><br/>
<form method=POST action=index.php>

<button style="background-color: peachpuff; width:135; height:47" onClick="index.php"> <b><font color="teal" face="comic sans ms"> Try Another Date </font></button>

</form>
</html>