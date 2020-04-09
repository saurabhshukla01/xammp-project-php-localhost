<?php
include("DAO.php");

if(isset($_POST["group_no"])){
	
	$group_number = filter_var($_POST["group_no"], FILTER_SANITIZE_NUMBER_INT, FILTER_FLAG_STRIP_HIGH);
	$dao = new DAO();
	echo $dao->getData($group_number);
}

?>