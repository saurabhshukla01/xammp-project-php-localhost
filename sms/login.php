<?php 
    session_start();
    if (isset($_SESSION['uid']))
    {
        header('location:admin/admindash.php');
    }
?>

<html>
<head>
	<title>
		Student management system
	</title>
</head>
<body>
<form action="" method="POST">
	<h3 align="center"> Admin Login Page </h3>
<table style="width:30%" align="center" border="1">
	<tr>
		<td>Username</td>
		<td><input type="text" name="uname" placeholder="Enter the Username" required="required"/></td>
	</tr>
	<tr>
		<td>Password</td>
		<td><input type="password" name="pass" placeholder="Enter the Password" required="required"/></td>
	</tr>
	<tr>
		<td colspan="3" align="center"><input type="submit" name="login" value="Login"></td>
	</tr>
</table>
</form>
<h4 align="right"> <a href="logout.php">Logout </a> </h4>
<body>
</html>

<?php include("dbcon.php") ?>
<?php
if (isset($_POST['login']))
{
$username = $_POST['uname'];
$password = $_POST['pass'];
$qry ="SELECT * FROM `admin` WHERE `username`='$username' AND `password`='$password'";
$run = mysqli_query($con,$qry);
$row = mysqli_num_rows($run);
    if ($row <1)
    {
        ?>
        <script>
        alret("username and Password cannot matched !! ");
        window.open('login.php','_self');
        </script>
        <?php
    }
    else
    {
        $data = mysqli_fetch_assoc($run);
        $id = $data['id'];
        echo "Id = ".$id;
        //session_start();
        $_SESSION['uid'] = $id;
    }
header('location:admin/admindash.php');
}
?>