<html>
<head>
	<title>ARTICLE__1</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>


<style>
#header {
    background-color: #040198;
	height:120px;
	background-image:url("header.png");
	background-repeat:no-repeat;
}
#nav {
    background-color: red;
	height:40px;
	text-color:white;	      
}
.button {
    background-color: white; /* Green */
    border: 0px;
    color: blue;
    padding: 12px 24px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    cursor: pointer;
    float: center;
	height:40px;

}

p{
color:Red;
font-size: 26px;

}
</style>
</head>
<body>
<a href="E:\WP PROJECT DONE\FINAL PROJECT\WP - Copy\project\main - Copy.html"><img src="header.png" height="120px" width="100%"></a>

<div id="new" class="btn-group btn-group-justified">
  <a href="E:\WP PROJECT DONE\FINAL PROJECT\WP - Copy\project\club.html" class="btn btn-primary">CLUB</a>
  <a href="E:\WP PROJECT DONE\FINAL PROJECT\WP - Copy\project\football.html" class="btn btn-primary">FOOTBALL</a>
  <a href="http://localhost/form.html" class="btn btn-primary">BOOK TICKETS</a>
  <a href="E:\WP PROJECT DONE\FINAL PROJECT\WP - Copy\project\fans.html" class="btn btn-primary">FANS</a>

</div>
<p>

<?php
	
	$conn=mysqli_connect("localhost","root","");
	echo "Hello $_POST[firstname].Your Query has been Succesfully submitted.<br><br><br>";
	$db=mysqli_select_db($conn,"signup");
	$query="INSERT into login values('$_POST[firstname]','$_POST[lastname]','$_POST[email]','$_POST[city]','$_POST[Comment]','$_POST[gender]')";
	$result=mysqli_query($conn,$query);
	echo "We will revert back to you as soon as possible.Thanks For Your Opinion!!!";
	mysqli_close($conn);
?>
</p>


<hr>
<center>
<table>
	<tr>
	<td>
	<a href="https://www.facebook.com/fcbarcelona/">
	<img src="fb.jpg" height="50px" width="50px" align="right"/></td>
	</a>

	<td>
	<a href="https://twitter.com/FCBarcelona">
	<center><img src="twitter.png" height="50px" width="50px"/></center></td>
	</a>

	<td>
	<a href="https://www.instagram.com/fcbarcelona/">
	<img src="instagram.png" height="50px" width="50px" align="left" /></td>
	</a>
	</tr>
</table>
</center>
<br><br>
<center>
<div>
<button class="button"><a href="E:\WP PROJECT DONE\FINAL PROJECT\WP - Copy\project\LegalTerms.html">Legal Terms</button></a>
<button class="button"><a href="E:\WP PROJECT DONE\FINAL PROJECT\WP - Copy\project\Accessibility.html">Accessibility</button></a>

<button class="button"><a href="E:\WP PROJECT DONE\FINAL PROJECT\WP - Copy\project\Contact1.html">Contact us</button></a>

<button class="button"><a href="E:\WP PROJECT DONE\FINAL PROJECT\WP - Copy\project\History.html">Historical Archive</button></a>
</div>

<center><img src="sponsers.jpg" width="100%"></center>
</center>

</body>
</html>
