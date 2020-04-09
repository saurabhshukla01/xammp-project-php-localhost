<?php include("common/header1.php")?>
<?php
// $_GET & $POST me method na pta ho to hum  $_REQUEST method se value featch kr skte hai Jab hume form ka method na pta ho tb.
echo "<br>";
echo "<center><b>All SERVER INfORAMTIONS </b></center>"."<br>";
echo "SERVER HOST NAME IS : <b>". $_SERVER['HTTP_HOST'] ."</b><br>";
echo "SERVER USER AGENT IS : <b>". $_SERVER['HTTP_USER_AGENT'] ."</b><br>";
echo "SERVER NAME IS : <b>". $_SERVER['SERVER_NAME'] ."</b><br>";
echo "PHP CURRENT FILE NAME IS : <b>". $_SERVER['PHP_SELF'] ."</b><br>";
echo "SERVER PORT NAME IS : <b>". $_SERVER['SERVER_PORT'] ."</b><br>";
echo "SERVER ADDRESS IS : <b>". $_SERVER['REMOTE_ADDR'] ."</b><br>";

?>
<?php include("common/footer1.php")?>




