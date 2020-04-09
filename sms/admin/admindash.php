<?php 
session_start();

    if (isset($_SESSION['uid']))
    {
        echo "";
    }
    else{
        header('location:../login.php');
    }
?>
<?php 
    include('../common/header.php'); 
    include('../common/title.php'); 
?>
<main id="dash">
    <h4 align="center"> Student DashBoard Table With All Action </h4>
    <div class="container">
        <table align="center" border="" width="30%">
            <tr align="center">
            <td>Id</td><td>Action</td>
            </tr>
            <tr align="center">
            <td>1.</td><td><a href="addstudent.php">Add Student Data</a></td>
            </tr>
            <tr align="center">
            <td>2.</td><td><a href="Updatestudent.php">Update Student Data</a></td>
            </tr>
            <tr align="center">
            <td>3.</td><td><a href="deletestudent.php">Delete Student Data</a></td>
            </tr>
            <tr align="center">
            <td>4.</td><td><a href="showstudent.php">Show Student Data</a></td>
            </tr>
        </table>
    </div>
</main>
<?/*php
	session_start();
    if ($_SESSION['uid'])
    {
    //echo $_SESSION['uid'];
    }
    else
    {
    header('location:../login.php');
    }

*/?>
<?php include('../common/footer.php') ?>