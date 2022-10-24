<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celcius Document</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>
<body>
<h1 class="cel">Celcius Form Converter</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']  ;?>" method="post">
        <fieldset>
            <label>Enter your celcius value:</label>
            <input type="number" name="cel">
            <input type="submit" value="convert it!">
            <p><a href="">RESET</a></p>
        </fieldset>
    </form>
<?php
if($_SERVER['REQUEST_METHOD']== 'POST') {
    if(isset($_POST['cel'])) {
        $cel = $_POST['cel'];
        $cel_int = intval($cel);
        $far = ($cel_int * 9/5) +32;

    if($cel == NULL) {  ////if the user does not enter a value, say something   
        echo '<p class="error">Please enter a value!</p>';

    } elseif($far <= 32) {
        echo '<div class="boxOne"><p class="celcius">'.$cel_int.' degrees <b>celcius</b> equals '.$far.' degrees <b>fahrenheit</b><br>
        It is prettay prettay cold out there!</p></div>';
    }
    elseif($far <= 40) {
        echo '<div class="boxOne"><p class="celcius">'.$cel_int.' degrees <b>celcius</b> equals '.$far.' degrees <b>fahrenheit</b><br>
        Warmer but still very cold!</p></div>';
    }
    elseif($far <= 60) {
        echo '<div class="boxOne"><p class="celcius">'.$cel_int.' degrees <b>celcius</b> equals '.$far.' degrees <b>fahrenheit</b><br>
        Sweater weather!</p></div>';
    }
    elseif($far <= 75) {
        echo '<div class="boxOne"><p class="celcius">'.$cel_int.' degrees <b>celcius</b> equals '.$far.' degrees <b>fahrenheit</b><br>
        Time for a stroll outside!</p></div>';
    }
    elseif($far <= 90) {
        echo '<div class="boxOne"><p class="celcius">'.$cel_int.' degrees <b>celcius</b> equals '.$far.' degrees <b>fahrenheit</b><br>
        Let\s go to the beach!</p></div>';
    }
    elseif($far <= 90) {
        echo '<div class="boxOne"><p class="celcius">'.$cel_int.' degrees <b>celcius</b> equals '.$far.' degrees <b>fahrenheit</b><br>
        Let\s go to the beach!</p></div>';
    }
    else {
        echo '<div class="boxOne"><p class="celcius">'.$cel_int.' degrees <b>celcius</b> equals '.$far.' degrees <b>fahrenheit</b><br>
        Beach day!</p></div>';
    } 
    }//end isset
}// end post
?>
</body>
</html>