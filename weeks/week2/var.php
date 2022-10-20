<?php
//my variables
//call out vars $name and calculate arithmetic

$name = "Kelly"; // Kelly in double quotes is a string
$name = 'Kelly'; //Kelly in single quotes is also a string
echo $name;

$body_temp = 98; //98 is an integer
$body_temp_new = 96.6; //this is a float data type
echo '<br>'; // adds a break tag single or double is fine
echo "<br>"; 
echo $body_temp;
echo "<br>"; 
echo $body_temp_new;
echo "<br>"; 
echo "My name is $name!";
echo "<br>"; 
echo 'My name is $name!'; //When echoing a string must use double quotes

echo "<br>"; 
echo 'My name is '.$name.'!'; //When echoing a variable inside single quote, use quote dot.

echo "<br>"; 
echo 'The normal body temperature for a human being is '.$body_temp_new.' ';

echo "<br>"; 
$name = 'Ravi';  //reassign var $name
echo $name;
$x = 20;
$y = 5;
echo "<br>"; 

$z = $x + $y; //assigning value of var z
echo $z;
echo "<br>"; 
$z = $x * $y;  // reassign var z
echo $z;
echo "<br>"; 
$z = $x / $y; // reassign var z
echo $z;
echo "<br>"; 

$first_name = 'Kelly';
$last_name = 'Chapman';
echo $first_name." ".$last_name; //join two vars with ." ".
echo "<br>"; 
echo $first_name.' '.$last_name; //join two vars with .' '.
echo "<br>"; 

echo "My full name is $first_name $last_name";  // can echo two vars with a double quote around outside
echo "<br>";    
echo 'My full name is '.$first_name.' '. $last_name.' ';  

?>










