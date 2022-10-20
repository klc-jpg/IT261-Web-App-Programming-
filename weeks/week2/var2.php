<?php
// concatenation
// operators - assignment operators
// preset functions
// arrays

$name = 'Kelly'; // assignment operator is = sign
$first_name = 'Kelly';
$last_name = 'Chapman';
echo "<br>"; 
$name = 'Kelly'; 
$name .= ' Chapman'; //   .= is a join operator
echo $name;
echo "<br>"; 

$color = 'red';
echo $color;
echo "<br>"; 

echo 'Kelly\'s favorite color is '.$color.' ';  // use of \
echo "<br>"; 

$x = 20;
$y = 5;
$z = $x + $y; 
echo $z;
echo "<br>"; 

$x = 20;
$x += 5;
echo $x;
echo "<br>"; 
$x = 100;
$x *= 10; // assign $x and multiply it by 10;
echo $x;
echo "<br>"; 

echo '<h3>Our product, quantity and tax exercise</h3>'; //insert HTML
$product = 120;
$quantity = 5;
$total = $product * $quantity;
$total *= 1.097; //multiply var total to include sales tax
echo $total;
echo "<br>"; 

// preset function: number_format()
echo '<h3>We would like our amount to reflect two decimal places-- 
this relates to floats and a new function: number_format()</h3>'; 
$product = 120; //is our integer
$quantity = 5;
$total = $product * $quantity;
$total *= 1.105; 
$total_friendly = number_format($total, 2);  // two args: variable and decimal
echo 'We have a total of <b>$'.$total_friendly.'</b> dollars';
echo "<br>"; 

$product = 120; //is our integer
$quantity = 5;
$total = $product * $quantity;
$total *= 1.098; 
echo 'We have a total of <b>$'.number_format($total, 2 ).'</b> dollars';
echo "<br>"; 

//Preset function: date
echo '<h3>Our second preset function is our date function! </h3>'; 
echo date('Y'); // ''Y' is year
echo "<br>"; 
echo date('l'); // lowercase l = day of the week
echo "<br>"; 
echo date("l jS \of F Y h:i:s A"); // Prints the day, date, month, year, time, AM or PM
echo "<br>"; 
echo date("l jS \of F Y h:i A"); // F = month, Y = year, h:i:s = hours, minutes, seconds, A= am/pm
echo "<br>"; 

//default timezone function
date_default_timezone_set('America/Los_Angeles');
echo "<br>"; 
echo date("l jS \of F Y h:i A");
echo "<br>"; 

//arrays
echo '<h3>Time for an array!</h3>';
echo '<h4>Below is an indexed array:</h4>';
// can we echo an array?? no we cannot.
$fruit[] = 'bananas';   //0
$fruit[] = 'cherries';  //1
$fruit[] = 'melon';     //2
$fruit[] = 'kiwi';      //3
$fruit[] = 'oranges';   //4
$fruit[] = 'apples';    //5

//instead we can echo one of our fruit options and use index position
echo $fruit;
echo "<br>"; 
$fruit[2]; 

// Here's another way to do it
$fruit = array(
    'bananas',
    'cherries',
    'melon',
    'kiwi',
    'oranges',
    'apples'
);

// One more way to store an array
$fruit = [
    'bananas',
    'cherries',
    'melon',
    'kiwi',
    'oranges',
    'apples'
];

//two ways to display
echo "<br>"; 
print_r($fruit);
echo "<br>"; 
var_dump($fruit);

echo '<h3>Now we have an associative array:</h3>';

//This is a good way to store a navbar
$nav = array(
    'index.php' => 'Home', //index is the key and home is the value
    'about.php' => 'About',
    'daily.php' => 'Daily',
    'project.php' => 'Project',
    'contact.php' => 'Contact',
    'gallery.php' => 'Gallery',
);

//And display the navbar
echo '<pre>';
var_dump($nav);
echo '</pre>';










echo "<br>"; 
echo "<br>"; 


?>