<?php
$x = 34;
$string = " PHP with Edureka";
echo "Genrated the Unique ID : ".uniqid()."<br>";
echo "Convert the Int In password : ".md5($x)."<br>";
echo "Convert the string In password : ".md5($string)."<br>";
?>


<!--<?/*php
$max = 770000; //large enough number within memory allocation
$arr = range(1,$max,3);
$arr2 = range(1,$max,2);
$arr = array_merge($arr,$arr2);

$time = -microtime(true);
$res1 = array_unique($arr);
$time += microtime(true);
echo "deduped to ".count($res1)." in ".$time;
// deduped to 513333 in 1.0876770019531

$time = -microtime(true);
$res2 = array();
foreach($arr as $key=>$val) {   
    $res2[$val] = true;
}
$res2 = array_keys($res2);
$time += microtime(true);
echo "<br />deduped to ".count($res2)." in ".$time;
// deduped to 513333 in 0.054931879043579
*/?>-->