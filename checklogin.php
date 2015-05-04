<?php

ob_start();
$host="127.0.0.1"; // Host name 
$username="root"; // Mysql username 
$password="abc123"; // Mysql password 
$db_name="pdm"; // Database name 
$tbl_name="member"; // Table name 

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// Define $myusername and $mypassword 
$myusername=$_POST['inputID']; 
$mypassword=$_POST['password']; 

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);
$sql="SELECT * FROM $tbl_name WHERE username='$myusername' and pword='$mypassword'";
$result=mysql_query($sql);

$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){

// Register $myusername, $mypassword and redirect to file "profile_page.php"
session_start();
$_SESSION["myusername"]=$myusername;
$_SESSION["mypassword"]=$mypassword;
header("Location:profile_page.php");
}

else {
echo "<script> alert('Invalid user name or password'); window.location.href='Login.php'; </script>";
}
ob_end_flush();
?>
