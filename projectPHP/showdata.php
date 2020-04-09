<?php 
/*
// code method only print one data in database connection .................
$contdb = mysqli_connect('localhost','root','','shukla_db');

$sql = "SELECT * FROM `insertdb`";
$run = mysqli_query($contdb,$sql);
$data = mysqli_fetch_assoc($run);
echo"<pre>";
print_r($data);
echo"</pre>";
echo"<br>";
if ($run=TRUE){
	echo "All Data is show successfully Show<br>";
}
else{
	echo "Error! in Database connection<br>";
}
*/?>



<?php include('common/header1.php') ?>
<h2 align="center"> Show All Data in PHP File All IN Print Array </h2>

<?php
// code method All data inside featch all data  print all data in database connection show to all value in Php page .................
$contdb = mysqli_connect('localhost','root','','shukla_db');
echo "<table border='1' width=60% align='center'>";
	echo "<thead align='center'>";
		echo "<tr>";
		    echo "<th width='33.33%'>" . "ID" . "</th>";
		    echo "<th width='33.33%'>" . "NAME" . "</th>";
		    echo "<th width='33.33%'>" . "EMAIL" . "</th>";
		echo "</tr>";
	echo "</thead>";
echo "</table>";
function showData(){
	global $contdb;
	$sql = "SELECT * FROM `insertdb`";
	$run = mysqli_query($contdb,$sql);
	if ($run==TRUE){
		while($row = mysqli_fetch_assoc($run)){
			echo "<table border='1' width=60% align='center'>";
	            echo "<tbody align='center'>";
		            echo "<tr>";
		                echo "<td width='33.33%'>" . $row['id'] . "</td>";
		                echo "<td width='33.33%'>" . $row['name'] . "</td>";
		                echo "<td width='33.33%'>" . $row['email'] . "</td>";
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

<strong><?php showData();?></strong>
<?php include('common/footer1.php') ?>
