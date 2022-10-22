<?php
// if statement -- has a condition
// if else statement -- has a different condition
// if elseif statement -- has yet another different condition
// else -- no condition

$temp = 55;
if($temp <= 60) {      
    echo 'It is a semi-warm day!'; //The code (condition) goes here
} else {
    echo 'It may be getting warmer';  //The new code (condition) goes here
}
echo '<br>';
$new_temp = 81;
    if($new_temp <= 60) {
    echo 'Not a very warm day';
}       elseif ($new_temp <= 70) {     //elseif = multiple conditions
        echo 'It\'s getting warmer';
}           elseif ($new_temp <= 80) {
            echo 'We might be going to the beach!';
}               else {
                echo 'We will <b>definitely</b> go to the beach';
}

echo '<h2>This exercise will be about a salary, a bonus and sales!</h2>';
// a salary of 95000 -annual
// Sales need to be above 100000 to start making bonuses!
// 100000 = 5%
// 120000 = 10%
// 140000 = 15%
// 150000 = 20%

$salary  = 95000;
$sales = 148000;
//if sales is equal to or less than 99999 then you do not recieve a bonus
//if sales is equal or less than 119000 then you will recieve 5%
//if sales is equal or less than 139999 you will recieve 10%
//if sales is equal or less than 149999 you will recieve 15%
if($sales <= 99999) {
echo 'Sorry you did not make your bonus :(';
}   elseif($sales <= 119999) {
    $salary *= 1.05;
    echo ' $'.number_format($salary, 2).' dollars ';
}       elseif($sales <= 139999) {
        $salary *= 1.10;
        echo ' $'.number_format($salary, 2).' dollars ';
}           elseif($sales <= 149999) {
            $salary *= 1.15;
            echo ' $'.number_format($salary, 2).' dollars ';
}               else {
                $salary *= 1.20;
                echo 'Congrats! You made 20% bonus. 
                Your annual salary including bonus totals $'.number_format($salary, 2).' dollars ';
}

?>