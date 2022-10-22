<?php
//date function and if statement
echo date('Y');
echo '<br>';
echo date('l, F j, Y h:i: A');  // l=day, F=month, j=date number, Y=year, H:=hours(24 hr format), h:=hours(American format), i:=minutes, A=AM 
echo '<br>';

date_default_timezone_set('America/Los_Angeles');
echo '<br>';

echo date('l, F j, Y h:i: A');
echo '<br>';

$name = 'Kelly';
$our_time = date('H:i A');
echo '<br>';
echo $our_time;

//logic: 
//if the time is less or equal to 11, then it is morning
//if the time is less or equal to 17, which equals 5, then it is afternoon
//Now we will have an else, and that means it's evening

if($our_time <= 11) {
echo '<h2 style="color:yellow;">Good morning, '.$name.'!</h2>
<img src="../../images/sunrise.png" alt="sun"  style="max-width: 500px; height:auto;">
<p>It\'s time to get up!</p>';
}   elseif($our_time <= 17) {
    echo '<h2 style="color:green;">Good afternoon, '.$name.'!</h2>
    <img src="../../images/afternoon.png" alt="buildings" style="max-width: 300px; height:auto;">
    <p>Get to work!</p>';
}       else {
        echo '<h2 style="color:blue;">Good evening, '.$name.'!</h2>
        <img src="../../images/evening.png" alt="moon" style="max-width: 500px; height:auto;">
        <p>Rest well!</p>';
}
?>

