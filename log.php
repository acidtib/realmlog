<? 
session_start();
if(!session_is_registered(myusername)){
header("location:index.php");
}
?>

<html>
<head>
<META HTTP-EQUIV="refresh" CONTENT="5">
</head>

<body>
<a href="logout.php">Log out</a>


	<div>
		<?php include 'C:\trinity\logs\anticheat\Warden.log'; ?>
	</div>
	
	
</body>
</html>
