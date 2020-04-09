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
<h2 align="center"> Show All Data Student Management System Data </h2>
<main id="showstudent">
	<div class="container-fluid">
<?php
// code method All data inside featch all data  print all data in database connection show to all value in Php page .................
echo "<table border='1' width=97.5% align='center'>";
	echo "<thead >";
		echo "<tr>";
		    echo "<th  width='5%'><center>" . "ID" . "</center></th>";
		    echo "<th  width='10%'><center>"  . "Roll No" . "</center></th>";
		    echo "<th  width='15%'><center>" . "Name" . "</center></th>";
		    echo "<th  width='10%'><center>" . "City" . "</center></th>";
		    echo "<th  width='15%'><center>" . "Parents Contact" . "</center></th>";
		    echo "<th  width='10%'><center>" .  "Standerd" . "</center></th>";
		    echo "<th  width='15%'><center>" . "Image" . "</center></th>";
		    echo "<th  colspan='3' width='15%'><center>" . "Action" . "</center></th>";
		echo "</tr>";
	echo "</thead>";
echo "</table>";
include('../dbcon.php');
function showData(){
	global $con;
	$sql = "SELECT * FROM `student`";
	$run = mysqli_query($con,$sql);
	if ($run==TRUE){ 
		while($row = mysqli_fetch_assoc($run)){
			echo "<table border='1' width=95% align='center'>";
	            echo "<tbody align='center'>";
		            echo "<tr>";
		                echo "<td width='5%'>" . $row['id'] . "</td>";
		                echo "<td width='10%'>" . $row['rollno'] . "</td>";
		                echo "<td width='15%'>" . $row['name'] . "</td>";
		                echo "<td width='10%'>" . $row['city'] . "</td>";
		                echo "<td width='15%'>" . $row['pcont'] . "</td>";
		                echo "<td width='10%'>" . $row['standerd'] . "</td>";
		                echo "<td width='15%'>" . $row['image'] . "</td>";
		                echo "<td width='5%'><a href='addstudent.php'>Add</a></td>";
		                echo "<td width='5%'><a href='updatestudent.php'>Update</a></td>";
		                echo "<td width='5%'><a href='deletestudent.php'>Delete</a></td>";
		            echo "</tr>";
	            echo "</tbody>";
            echo "</table>";

        }
    }
	else{
		echo "Error!";
	}
}

?>
</div>
</main>
<strong><?php showData();?></strong>
<?php include('../common/footer.php') ?>
