<?php
//PHP forloop
//SYNTAX:
    //for (init counter; test counter; increment counter) {
        //code to be executed for each iteration;
//PARAMETERS:
    //init counter: Initialize the loop counter value
    //test counter: Evaluated for each loop iteration. If it evaluates to TRUE, the loop continues. If it evaluates to FALSE, the loop ends.
    //increment counter: Increases the loop counter value 

//celcius and fahrenheit
//$far = ($cel * 9/5) +32;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter+Tight:ital,wght@0,400;0,500;1,700&display=swap" rel="stylesheet">
    <title>My Conversion Tables</title>
    <style>
*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}

#wrapper {
    width: 500px;
    margin: 30px auto;
    background: #FBF7F4;
}

table {
    border: 3px solid #392e3a;
    border-collapse: collapse;
    width: 100%;
    margin: 20px auto;
}

div.distance {
    float: right;
    width: 40%;
    margin-right: 3%;
}

div.temp {
    float: left;
    width: 40%;
    margin-left: 3%;
}

th, td {
    border: 3px solid #392e3a;
    padding: 8px;
}

h1, h2, h3, th {
    text-align: center;
    font-family: 'Inter Tight', sans-serif;
    font-weight: 700;
    font-style: italic;
    color: #392e3a;
    margin: 10px 0;
}

ul li, td {
    list-style-type: none;
    color: #392e3a;
    font-family: 'Inter Tight', sans-serif;
    font-weight: 400;
}
</style>
</head>
<body>
    <div class="temp">
    <h1 >My Celcius / <br>
    Fahrenheit Table</h1>
<table>
    <tr>
        <th>Celcius</th>
        <th>Fahrenheit</th>
    </tr>
    <?php
    for($cel = 0; $cel <= 100; $cel += 2){
        $far = ($cel * 9/5) +32;
    echo '<tr>';
    echo '<td>'.$cel.' degrees</td>';
    echo '<td>'.number_format($far, ).' degrees</td>';
    echo '</tr>';
    }
   // <?php echo ''.number_format($ruble_converted, 2).''; 
?>
</table>
</div>
<div class="distance">
<h1> My Kilometer / <br>
Mile Table</h1>
<table>
    <tr>
        <th>Kilometer</th>
        <th>Mile</th>
    </tr>
    <?php
    for($kil = 5; $kil <= 100; $kil += 5){
        $mile = $kil * 0.6214;
    echo '<tr>';
    echo '<td>'.$kil.' kilometers</td>';
    echo '<td>'.$mile.' miles</td>';
    echo '</tr>';
    }
?>
</table>
</div>
</body>
</html>


    