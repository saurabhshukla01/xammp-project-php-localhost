<?php
// syntax ==>
// set cookie(name,value,expire,path,domain,secure.httponly);
// mostly use first 3 parametrs

// create Cookie ---------->
$name='php';
$exp = time() + 86400;
SETCOOKIE('name',$name,$exp);
echo $_COOKIE['name'];
?>

<?php

// DELETE cookie  ----------->

// $unsetcookie = time() - 86400;
// setcookie('name','',$unsetcookie);
?>