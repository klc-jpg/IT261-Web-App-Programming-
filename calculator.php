<?php
//trip calculator logic
//drive time = (distance/speed)
//driving days = (drive time/ hours per day)
//total gallons = (distance/fuel efficiency)
//price = (total gallons * fuel cost)
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
    <title>Travel Calculator</title>
    <link href="css/calculator.css" type="text/css" rel="stylesheet">
<body>
<div id="wrapper">
    <h1>Travel Calculator</h1>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
    <fieldset>
        <label>Name</label>
        <input type="text" name="name" value="<?php if (isset($_POST['name'])) echo htmlspecialchars($_POST['name']) ;?>">

        <label>Trip distance (total miles)</label>
        <input type="number" name="miles" value="<?php if (isset($_POST['miles'])) echo htmlspecialchars($_POST['miles']) ;?>">

        <label>Average driving speed (MPH)</label>
        <input type="number" name="speed" value="<?php if (isset($_POST['speed'])) echo htmlspecialchars($_POST['speed']) ;?>">

        <label>How many hours per day do you plan to drive?</label>
        <input type="number" name="hours" value="<?php if (isset($_POST['hours'])) echo htmlspecialchars($_POST['hours']) ;?>">

<!--Radio button with additional attribute of VALUE-->
        <label class="gas">Gas price</label>
        <ul>
            <li><input type="radio" name="gas" value="4.5" <?php if(isset($_POST['gas']) && $_POST['gas'] == floatval(4.5)) echo 'checked="checked" ' ;?>> $4.50</li>
            <li><input type="radio" name="gas" value="5.0" <?php if(isset($_POST['gas']) && $_POST['gas'] == floatval(5.0)) echo 'checked="checked" ' ;?>> $5.00</li>
            <li><input type="radio" name="gas" value="5.5" <?php if(isset($_POST['gas']) && $_POST['gas'] == floatval(5.5)) echo 'checked="checked" ' ;?>> $5.50</li>
            <li><input type="radio" name="gas" value="6.0" <?php if(isset($_POST['gas']) && $_POST['gas'] == floatval(6.0)) echo 'checked="checked" ' ;?>> $6.00</li>
        </ul>

        <label class="fuel">Fuel efficiency</label>
        <select name="fuel">
            <option value="" NULL <?php if(isset($_POST['fuel']) && $_POST['fuel'] == NULL) echo 'selected = "unselected"';?>><b>Select one</b></option>
            <option value="10" <?php if(isset($_POST['fuel']) && $_POST['fuel'] == intval(10)) echo 'selected = "selected"';?>>Terrible @ 10mpg</option>
            <option value="25" <?php if(isset($_POST['fuel']) && $_POST['fuel'] == intval(25)) echo 'selected = "selected"';?>>Decent @ 25mpg</option>
            <option value="40" <?php if(isset($_POST['fuel']) && $_POST['fuel'] == intval(40)) echo 'selected = "selected"';?>>Great @ 40mpg</option>
        </select>

        <input type="submit" value="calculate!">
        <p class="reset"><a href="">RESET</a></p>
    </fieldset>
    </form>
    <?php 
    //We will start with server request method
    //then, we will ask ourselves if any fields are empty
    //if the fields are not empty, we will elseif they are set
    if($_SERVER['REQUEST_METHOD'] == 'POST') {

    if(empty($_POST['name'])) {
        echo '<p class="error">Please fill out your name!</p>';
    }
    if(empty($_POST['miles'])) {
        echo '<p class="error">Please specify the miles of your trip!</p>';
    }
    if(empty($_POST['speed'])) {
        echo '<p class="error">Please fill out your average driving speed!</p>';
    }
    if(empty($_POST['hours'])) {
        echo '<p class="error">Please note the hours you plan to drive per day!</p>';
    }
    if(empty($_POST['gas'])) {
        echo '<p class="error">Please select the price of gas!</p>';
    }
    if($_POST['fuel'] == NULL) {
        echo '<p class="error">Please select your vehicle\'s fuel efficiency!</p>';
    }
    if (isset($_POST['name'],
    $_POST['miles'],
    $_POST['speed'],
    $_POST['hours'],
    $_POST['gas'],
    $_POST['fuel'])) {
        $name = $_POST['name']; 
        $miles = floatval($_POST['miles']); 
        $speed = floatval($_POST['speed']);
        $hours = floatval($_POST['hours']);
        $gas = floatval($_POST['gas']);
        $fuel = floatval($_POST['fuel']);
        $time = floatval($miles / $speed);
        $days = floatval($time / $hours);
        $gallons = floatval($miles / $fuel);
        $cost = floatval($gallons * $gas);

    if(!empty($name && $miles && $speed && $hours && $gas && $fuel)) {
    echo '
    <div class="box">
    <h2> Hello <b>'.$name.',</b></h2>
    <p class="summary">You will be travelling a total of <b>'.number_format($time, 1).'</b> hours, over <b>'.number_format($days,1).'</b> days.
    You will need <b>'.$gallons.'</b> gallons of gas to complete your trip, at a total cost of <b>'.number_format($cost, 2).'</b> dollars.</p>
    </div>
    ';
}
} //end isset
}//end server request
?>
</div>
</body>
</html>