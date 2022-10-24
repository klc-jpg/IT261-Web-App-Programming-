<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter+Tight:ital,wght@0,400;0,500;1,700&display=swap" rel="stylesheet">
    <title>Arithmetic Form</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>
<body>
    <h1>Arithmetic Form</h1>
    <form action="" method="post">
        <fieldset>
        <label>Name:</label>
        <input type="text" name="name">

        <label>Phone Number:</label>
        <input type="tel" name="phone">

        <label>Latte Quantity:</label>
        <input type="number" name="latte">

        <label>Cappuccino Quantity:</label>
        <input type="number" name="cappuccino">

        <label>Americano Quantity:</label>
        <input type="number" name="americano">

        <label>Special Requests:</label>
        <textarea name="comments"></textarea>

        <input type="submit" value="Order!">

        <p><a href="">RESET</a></p>
    </fieldset>
</form>  
<?php
//name, phone, lattes, cappuccinos, americanos, comments
//set timezone
//define variables 
date_default_timezone_set('America/Los_Angeles');
$our_time = date('H:i');

if(isset($_POST['name'],
        $_POST['phone'],
        $_POST['latte'],
        $_POST['cappuccino'],
        $_POST['americano'],
        $_POST['comments'])) {

//nest another if statemenbt in reference to the fields being empty
if(empty($_POST['name'] &&
        $_POST['phone'] &&
        $_POST['latte'] &&
        $_POST['cappuccino'] &&
        $_POST['americano'] &&
        $_POST['comments'])) {
    echo '<p class="error">All fields are required please</p>';                  
}else {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $latte = $_POST['latte'];
    $cappuccino = $_POST['cappuccino'];
    $americano = $_POST['americano'];
    $comments = $_POST['comments'];
    $total = $latte + $americano + $cappuccino;

//if and else statement regarding our time
if($our_time <= 11) {
    $our_time = "Good Morning";
} elseif($our_time <= 17) {
    $our_time = "Good Afternoon";
} else {
    $our_time = "Good Evening";
}

echo '
    <div class="box">
    <h2 class="hello">'.$our_time.',  '.$name.'</h2>
    <p class="thanks">Order confirmed! We texted details to this number: <u>'.$phone.'</u><br>
    <br>
    Here\'s a recap:</p>
    <ul>
        <li><b>'.$latte.'</b> latte(s)</li>
        <li><b>'.$cappuccino.'</b> cappuccino(s)</li>
        <li><b>'.$americano.'</b> americano(s)</li>
        <li>beverage total: <b>'.$total.'</b> </li>
        <li>you also request: <b>'.$comments.'</b></li>
    </ul>
    <br>
    <p class="comments"><b>Thank you!</b></p>
    </div>
    ';
    }
}//end isset
?>
    
</body>
</html>

