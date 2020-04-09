<?php
$variable ="PHP is code function";
echo strval( $variable )."<br>"; 
?>
<?php 
  
$var_name = 32.360; 
  
// prints the value of above variable  
// as a string 
echo strval($var_name)."<br>";
  
?> 
<?php 
  
class geeksforgeeks 
{ 
    public function __toString() 
    {    
        // returns the class name  
        return __CLASS__; 
    } 
} 
  
// prints the name of above class as 
// a string 
echo strval(new geeksforgeeks)."<br>"; 
  
?> 
<?php 
// Program to illustrate the strval() function 
// when an array is passed as parameter 
  
// Input array 
$arr = array(1,2,3,4,5); 
  
// This will print only the type of value 
// being converted i.e. 'Array' 
echo strval($arr[0])."<br>";
echo "<pre>"; 
print_r($arr);
echo "</pre>";  
?> 

<?php
echo "String length is : ".strlen("Hello world!")."<br>"; // string length find function.
?>

<?php
echo "String sentence count all word : ".str_word_count("Hello world!")."<br>"; // string world count in the Given sentence used this is same function.
?>

<?php
echo "String reverse output : ".strrev("Hello world!")."<br>"; // string reverse method used same function.
?>

<?php
echo "Find the world whoose the postion in given sentence : ".strpos("Hello world!", "world")."<br>"; // find the postion of given charter or world use the same function.
// find the world postion in the given sentence...
// strpos($sentence,$world);
?>

<?php
echo str_replace("world", "Dolly", "Hello world!")."<br>"; // replace world to dolly in given sentence /
// syntax ==>   str_replace("first world","replaceworld",$sentence);
// Given sentence is first replace to another replace world to in Given sentenece...
?>





