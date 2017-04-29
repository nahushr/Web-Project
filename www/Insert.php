<?php

$hostname="localhost";


$conn=mysql_connect("localhost","root","") or die("Unable");
echo "Connected To MySql";
$selected=mysql_select_db("CONTACT_INFO",$conn) or die("can't");
$query1="INSERT into CONTACT1 VALUES(".$_POST['firstname'].",".$_POST['lastname'].",".$_POST['email'].",".$_POST['city'].",".$_POST['gender'].",".$_POST['Comment'].")";
$result=mysql_query($query1,$conn);
echo "Your Suggestion has been Submitted Succesfully";
mysql_close($conn);
?>