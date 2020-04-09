<h2 align="center">
<?php
	session_start();
    if ($_SESSION['uid'])
    {
    echo "Welcome UserId Is ".$_SESSION['uid'];
    }
    else
    {
    header('location:login.php');
    }

?>
</h2>
<center>
<?php include('common/title.php'); ?>
</center>
<html>
<head>
	<title>
	Welcome To My Page.
</title>
	</head>
	<body style="background:skyblue">
		<!--<h4 align="right"><a href="logout.php">Logout</a></h4>-->
		<img src="images/welcome.jpg" align="Welcome Image" width="100%" height="100%">

	</body>
</html>