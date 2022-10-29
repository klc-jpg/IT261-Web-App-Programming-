<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter+Tight:ital,wght@0,400;0,500;1,700&display=swap" rel="stylesheet">
    <title>Currency Three: Sticky Form</title>
    <link href="css/ifelsestyles.css" type="text/css" rel="stylesheet">
<body>
<div id="wrapper">
    <!--https://www.geeksforgeeks.org/how-to-prevent-xss-with-html-php/ -->
    <h1>Currency if/else</h1>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
    <fieldset>
        <label>Name</label>
        <input type="text" name="name" value="<?php if (isset($_POST['name'])) echo htmlspecialchars($_POST['name']) ;?>">

        <label>Email</label>
        <input type="email" name="email" value="<?php if (isset($_POST['email'])) echo htmlspecialchars($_POST['name']) ;?>">

        <label>How much money do you have?</label>
        <input type="number" name="amount" value="<?php if (isset($_POST['amount'])) echo htmlspecialchars($_POST['name']) ;?>">

<!--Radio button with additional attribute of VALUE-->
        <label>Choose your currency:</label>
        <ul>
            <li><input type="radio" name="currency" value="0.016" <?php if(isset($_POST['currency']) && $_POST['currency'] == 0.016) echo 'checked="checked" ' ;?>>Rubles (₽)</li>
            <li><input type="radio" name="currency" value="0.73" <?php if(isset($_POST['currency']) && $_POST['currency'] == 0.73) echo 'checked="checked" ' ;?>>Canadian Dollars (C$)</li>
            <li><input type="radio" name="currency" value="1.12" <?php if(isset($_POST['currency']) && $_POST['currency'] == 1.12) echo 'checked="checked" ' ;?>>Pounds (£)</li>
            <li><input type="radio" name="currency" value="0.98" <?php if(isset($_POST['currency']) && $_POST['currency'] == 0.98) echo 'checked="checked" ' ;?>>Euros (€)</li>
            <li><input type="radio" name="currency" value="0.0067" <?php if(isset($_POST['currency']) && $_POST['currency'] == 0.0067) echo 'checked="checked" ' ;?>>Yen (¥)</li>
        </ul>

        <label>Choose your banking institution</label>
        <select name="bank">
            <option value="" NULL <?php if(isset($_POST['bank']) && $_POST['bank'] == NULL) echo 'selected = "unselected"';?>>Select one</option>
            <option value="Bank of America" <?php if(isset($_POST['bank']) && $_POST['bank'] == 'Bank of America') echo 'selected = "selected"';?>>Bank of America</option>
            <option value="Chase" <?php if(isset($_POST['bank']) && $_POST['bank'] == 'Chase') echo 'selected = "selected"';?>>Chase</option>
            <option value="Banner" <?php if(isset($_POST['bank']) && $_POST['bank'] == 'Banner') echo 'selected = "selected"';?>>Banner</option>
            <option value="Wells Fargo" <?php if(isset($_POST['bank']) && $_POST['bank'] == 'Wells Fargo') echo 'selected = "selected"';?>>Wells Fargo</option>
            <option value="BECU" <?php if(isset($_POST['bank']) && $_POST['bank'] == 'BECU') echo 'selected = "selected"';?>>Boeing Employee Credit Union</option>
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
        $amount = floatval($_POST['amount']);
        $currency = floatval($_POST['currency']);
        $bank = $_POST['bank'];
        $dollars = $amount * $currency;

    if(!empty($name && $email && $currency && $bank)) {

    echo '
    <div class="box">
    <h2> Hello <b>'.$name.',</b></h2>
    <p class="summary">You now have <b>$'.number_format($dollars, 2).'</b> American dollars! 
    Check your inbox at: <b>'.$email.'</b> for details about your upcoming deposit at <b>'.$bank.'</b> bank.</p>
    </div>
    ';
} //end if !empty

if($dollars <= 50 ) {
echo '<body class="sad"><h1 class="sad"><div class="sad"style="width:580px; height: auto; background-color: #ccc;"><h3 style="text-align:center; color:#f2f2f2;">'.$dollars.' dollars? Not pleased</h3><iframe width="560" height="315" src="https://www.youtube.com/embed/nFZP8zQ5kzk?start=10" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div></body>';
}
elseif($dollars > 50) {
    echo '<body class="happy"><h1 class="happy"><div class="happy" style="width:580px; height: auto; background-color: #FFF600;"><h3 style="text-align:center; color:#5E00CF;">'.$dollars.' dollars? We\'re rich! $$$</h3><iframe width="560" height="315" src="https://www.youtube.com/embed/vbCH5lnZ6sA?start=39" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div></body>';
}//end ifelse

} //end isset
}//end server request?>
</div>
<footer>
<hr>
<ul>
    <li>Copyright &copy;2022</li>
    <li>All Rights Reserved</li>
    <li><a href="../../index.php">By Kelly Chapman</a></li>
    <li><a id="html-checker" href="#">HTML Validation</a></li>
    <li><a id="css-checker" href="#">CSS Validation</a></li>
</ul>
<script>
    document.getElementById("html-checker").setAttribute("href", "https://validator.w3.org/nu/?doc=" + location.href);
    document.getElementById("css-checker").setAttribute("href", "https://jigsaw.w3.org/css-validator/validator?uri=" + location.href);
</script>
</footer>
</body>
</html>