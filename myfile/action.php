<?php 
if(isset($_REQUEST['token'])) {
	require 'DbConnect.php';
#require 'User_agent.php';
	$db = new DbConnect;
	$conn = $db->connect();
	$cdate = date('Y-m-d');
	$remote_address      = $_SERVER['REMOTE_ADDR'];
	$http_user_agent     = $_SERVER['HTTP_USER_AGENT'];

	$geo_loc = json_decode(file_get_contents("https://extreme-ip-lookup.com/json/$remote_address?key=w6dCS9zHWlFQ6Og14IER"));
	$city = isset($geo_loc->city) ? $geo_loc->city : '';
	$country = isset($geo_loc->country) ? $geo_loc->country : '';
	$isp = isset($geo_loc->isp) ? $geo_loc->isp : '';
	$geo_loc = (array) $geo_loc;
	$geo_loc = implode(" " ,$geo_loc);

	if(isMobile()){
		$device = 'mobile';
	}
	else {
		$device = 'Wap';
	}
	$stmt = $conn->prepare('INSERT INTO tokens VALUES(null, :token, :ipaddress, :user_agent, :device, :city, :country, :isp, :full_data, :cdate)');
	$stmt->bindParam(':token', $_REQUEST['token']);
	$stmt->bindParam(':ipaddress', $remote_address);
	$stmt->bindParam(':user_agent', $http_user_agent);
	$stmt->bindParam(':device', $device);
	$stmt->bindParam(':city', $city);
	$stmt->bindParam(':country', $country);
	$stmt->bindParam(':isp', $isp);
	$stmt->bindParam(':full_data', $geo_loc);
	$stmt->bindParam(':cdate', $cdate);
	if($stmt->execute()) {
		echo 'Token Saved..';
	} else {
		echo 'Failed to saved token..';
	}
}

function isMobile() {
	return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}
?>
