<html>
<head> 
<meta name="viewport" content="width=device-width , initial-scale=1.0">
<meta name="description" content="Historic Date is an application that shows highlighted past events took place on a particular day." />
<link rel="icon" href="Taba.jpg ">

<title> Historic Date </title>
<center>

<style>

body{
background-image: url("his4.jpeg");
background-position: center;
background-repeat: no-repeat;
background-attachment: fixed;
background-size: cover;
background-color: lavender;
}

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

</style>
</head> 

<div class="topnav">
  <a class="active" href="index.php">Home</a>
  <a class="active" href="about.php">About</a>
  <a class="active" href="contact.php">Contact</a>
  
</div>

<div style="padding-left:16px">
</div> 




<body>
<h3><font color="darkkhaki" face="comic sans ms"><strong>........what happened on this day? </strong></font></h3>

<b><font color="gray" size="5"> Enter Date: </font> <br/>
<form method="POST" action="knowledge.php">

<b><font color="khaki" size=5 face="comic sans ms"> Month: </font> <input type="month" name="d" required> 
<br>
<font color="olive" size=5 face="comic sans ms">&nbsp; &nbsp; Day: <input type="number" name="m" required> <br/><br/><br/>

<button style="background-color: snow; width:51; height:26" onClick="knowledge.php">
<b>View</b></button>


</form>
</body>
</html>