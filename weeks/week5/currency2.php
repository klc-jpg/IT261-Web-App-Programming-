<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter+Tight:ital,wght@0,400;0,500;1,700&display=swap" rel="stylesheet">
    <title>Currency Two: Form with Dropdown (Select an Option)</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
<body>
    <h1>Currency Two</h1>
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

        <label>Choose your banking institution</label>
        <select name="bank">
            <option value="" NULL>Select one</option>
            <option value="boa">Bank of America</option>
            <option value="chase">Chase Bank</option>
            <option value="banner">Banner Bank</option>
            <option value="wells">Wells Fargo</option>
            <option value="becu">Boeing Employee Credit Union</option>
        </select>

        <input type="submit" value="convert it!">
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
    if(empty($_POST['email'])) {
        echo '<p class="error">Please fill out your email!</p>';
    }
    if(empty($_POST['amount'])) {
        echo '<p class="error">Please fill out the amount!</p>';
    }
    if(empty($_POST['currency'])) {
        echo '<p class="error">Please specify your currency!</p>';
    }
    if($_POST['bank'] == NULL) {
        echo '<p class="error">Please select your banking institution!</p>';
    }
    if (isset($_POST['name'],
    $_POST['email'],
    $_POST['amount'],
    $_POST['currency'],
    $_POST['bank'])) {
        $name = $_POST['name']; 
        $email = $_POST['email']; 
        $amount = $_POST['amount'];
        $currency = $_POST['currency'];
        $bank = $_POST['bank'];
        $dollars = $amount * $currency;

    echo '
    <div class="box">
    <h2> Hello <b>'.$name.'!</b></h2>
    <p class="summary">You now have <b>'.floor($dollars).'</b> American dollars! 
    Check your inbox at: <b>'.$email.'</b> for details about your upcoming deposit at <b>'.$bank.'</b> bank.</p>
    </div>
    ';
    
} //end isset
}//end server request
?>
</body>
</html>