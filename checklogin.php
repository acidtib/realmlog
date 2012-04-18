<?php
ob_start();
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password="kurubit825"; // Mysql password 
$db_name="realmlog"; // Database name 
$tbl_name="account"; // Table name

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// Define $myusername and $mypassword 
$myusername=$_POST['myusername']; 
$mypassword=$_POST['mypassword'];

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);

// encrypt password 
$encrypted_mypassword=md5($mypassword);

$sql="SELECT * FROM $tbl_name WHERE username='$myusername' and password='$encrypted_mypassword'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);
// If result matched $myusername and $mypassword, table row must be 1 row

if($count==1){
// Register $myusername, $mypassword and redirect to file "log.php"
session_register("myusername");
session_register("mypassword"); 
header("location:log.php");
}
else {
echo "Wrong Username or Password";
}

ob_end_flush();
?>