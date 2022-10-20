<?php

//Conversion logic
    //Step one: get exchange rates to dollars
        $ruble_rate = 0.016;
        $pound_rate = 1.12;
        $canadian_rate = 0.73; 
        $euro_rate = 0.98;
        $yen_rate = 0.0067;

    //Step two: create a value for each currency
        $ruble = 1010; 
        $pound = 200;  
        $canadian = 1730;  
        $euro= 1980;   
        $yen = 100067; 

    //Step three arithmetic with variables:
        $ruble_converted = $ruble * $ruble_rate;  // (1010 * 0.016 = $16.16)
        $pound_converted = $pound * $pound_rate;   //(200 * 1.12 = $224)
        $canadian_converted = $canadian * $canadian_rate;   // (1730 * 0.73 = $1262.90)
        $euro_converted = $euro * $euro_rate;   //(1980 * 0.98 = $1940.4)
        $yen_converted = $yen * $yen_rate;   //(100067 * 0.0067 = $670.45)

        $total = $ruble_converted + $pound_converted + $canadian_converted + 
                 $euro_converted + $yen_converted;
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
    <title>Currency Logic Exercise</title>
    
    <style>
* {
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
    width: 500px;
    margin-top: 10px;
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
}

ul li, td {
    list-style-type: none;
    color: #392e3a;
    font-family: 'Inter Tight', sans-serif;
    font-weight: 400;
}

ul li, tr.currency th {
    text-align: center;
}

div.type tr th {
    text-align: justify; 
}
    </style>
</head>
<body>
    <div id="wrapper">
        <h2>After our whirlwind travels, we have returned home with the following currencies:</h2>
        <br>
        <ul>
        <li>Rubles</li>
        <li>Pound Sterling</li>
        <li>Canadian Dollars</li>
        <li>Euros</li>
        <li>Yen</li>
        </ul>
        <br>
        <h3>Whatever shall we do?</h3>
        
        <table>
            <tr class="currency">
                <th colspan="2">Currency</th>
                <th>Dollars</th>
            </tr>
            <tr>
            <th>Rubles</th>
            <td>₽<?php echo $ruble; ?></td>
            <td>$<?php echo ''.number_format($ruble_converted, 2).''; ?></td>
            </tr>
            <tr>
            <th>Pound Sterling</th>
            <td>£<?php echo $pound; ?></td>
            <td>$<?php echo ''.number_format($pound_converted, 2).''; ?></td>
            </tr>
            <tr>
            <th>Canadian Dollars</th>
            <td>C$<?php echo $canadian; ?></td>
            <td>$<?php echo ''.number_format($canadian_converted, 2).''; ?></td>
            </tr>
            <tr>
            <th>Euros</th>
            <td>€<?php echo $euro; ?></td>
            <td>$<?php echo ''.number_format($euro_converted, 2).''; ?></td>
            </tr>
            <tr>
            <th>Yen</th>
            <td>¥<?php echo $yen; ?></td>
            <td>$<?php echo ''.number_format($yen_converted, 2).''; ?></td>
            </tr>
            <tr>
            <th>Total</th>
            <td>American Dollars</td>
            <td>$<?php echo ''.number_format($total, 2).''; ?></td>
            </tr>
        </table>

    </div>
<!--end wrapper-->    
</body>
</html>