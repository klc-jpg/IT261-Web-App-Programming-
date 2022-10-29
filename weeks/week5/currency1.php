<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter+Tight:ital,wght@0,400;0,500;1,700&display=swap" rel="stylesheet">
    <title>Currency One PHP Form</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
<body>
    <h1>Currency One</h1>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
    <fieldset>
        <label>Name</label>
        <input type="text" name="name">

        <label>Email</label>
        <input type="email" name="email">

        <label>How much money do you have?</label>
        <input type="number" name="amount">

<!--Radio button with additional attribute of VALUE-->
        <label>Choose your currency:</label>
        <ul>
            <li><input type="radio" name="currency" value="0.016">Rubles (₽)</li>
            <li><input type="radio" name="currency" value="0.73">Canadian Dollars (C$)</li>
            <li><input type="radio" name="currency" value="1.12">Pounds (£)</li>
            <li><input type="radio" name="currency" value="0.98">Euros (€)</li>
            <li><input type="radio" name="currency" value="0.0067">Yen (¥)</li>
        </ul>
        <input type="submit" value="convert it!">
        <p><a href="">RESET</a></p>
    </fieldset>
    </form>
    <?php 
    //We will start with server request method
    //then, we will ask ourselves if any fields are empty
    //if the fields are not empty, we will elseif they are set

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
       
    if(empty($_POST['name'] &&
    $_POST['email'] &&
    $_POST['amount'] &&
    $_POST['currency'])) {
  
    echo '<p class="error">Please fill out all fields</p>';

    } elseif (isset($_POST['name'],
    $_POST['email'],
    $_POST['amount'],
    $_POST['currency'])) {
        $name = $_POST['name']; 
        $email = $_POST['email']; 
        $amount = $_POST['amount'];
        $currency = $_POST['currency'];
        $dollars = $amount * $currency;

    echo '
    <div class="box">
    <h2> Hello <b>'.$name.'!</b></h2>
    <p class="summary">You now have <b>'.floor($dollars).'</b> American dollars! 
    Check your inbox at: <b>'.$email.'</b> with all the details.</p>
    </div>
    ';
    
} //end isset
}//end server request
?>
</body>
</html>