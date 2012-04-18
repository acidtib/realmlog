<? 
session_start();
if(!session_is_registered(myusername)){
header("location:index.php");
}
?>

<html>
<body>
<a href="logout.php">Log out</a>
Im log
</body>
</html>
