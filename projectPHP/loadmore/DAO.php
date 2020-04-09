<?php
include("config.php");
class DAO{
	
	private $items_per_group = 2 ; 
	
	public function dbConnect(){
		
		$dbhost = DB_SERVER; // set the hostname
		$dbname = DB_DATABASE ; // set the database name
		$dbuser = DB_USERNAME ; // set the mysql username
		$dbpass = DB_PASSWORD;  // set the mysql password

		try {
			$dbConnection = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass); 
			$dbConnection->exec("set names utf8");
			$dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			return $dbConnection;

		}
		catch (PDOException $e) {
			echo 'Connection failed: ' . $e->getMessage();
		}
	
		
	}
	
	public function getData($groupNo){
		
	//sanitize post value
	$group_number = $groupNo;
	
	
	//throw HTTP error if group number is not valid
	if(!is_numeric($group_number)){
		header('HTTP/1.1 500 Invalid number!');
		exit();
	}
	
	//get current starting point of records
	$position = ($group_number * $this->items_per_group);
		
		try {
			$dbConnection = $this->dbConnect();
			$stmt = $dbConnection->prepare("SELECT * FROM `post` order by 
			`POSTID` LIMIT :position , :items_per_group");
			$stmt->bindParam(':position', $position , PDO::PARAM_INT);
			$stmt->bindParam(':items_per_group', $this->items_per_group, PDO::PARAM_INT);
			$stmt->execute();

			$Count = $stmt->rowCount(); 
			//echo " Total Records Count : $Count .<br>" ;
             
			$result ="" ;
			if ($Count  > 0){
				while($data=$stmt->fetch(PDO::FETCH_ASSOC)) {
										
				   $result = $result ."<div class='user-post-right-display-main-container-upto-last'  >
					<div  style='margin-left:10px;' >
					<span style='margin-left:12px;' ><h3><a href='".$data['POSTLINK'].
					"' style='text-decoration:none;'>".$data['POSTTITLE']."<a/> </h3></span>
					<span>".$data['POSTDETAILS']."</span>
					</div>
					</div>" ;
					}
				return $result ;
			}

		}
		catch (PDOException $e) {
			echo 'Connection failed: ' . $e->getMessage();
		}
	}
	
	public function getTotalNumberOfRecordsCount(){
		
		
		try {
			$dbConnection = $this->dbConnect();
			$stmt = $dbConnection->prepare('SELECT count(*) as `total_count` FROM `post`');
			$stmt->execute();
			
			$Count = $stmt->rowCount(); 
			//echo " Total Records Count : $Count .<br>" ;

			if ($Count  > 0){
				$data=$stmt->fetch(PDO::FETCH_ASSOC) ;
				$total_groups = ceil($data['total_count']/$this->items_per_group);
				return $total_groups;

				
			}

		}
		catch (PDOException $e) {
			echo 'Connection failed: ' . $e->getMessage();
		}
	}
	
	
}


?>