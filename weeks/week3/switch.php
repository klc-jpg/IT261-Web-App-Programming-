<?php 
//class coffee exercise
//if today is friday, it's pumpkin latte day
//introducing the isset() function
//introduce first global variable
//our switch

//starting the switch
//if $GET['today] is set, $today, then all is well. But it is not set therefore the else is the day
//else, today is TODAY

//GLOBAL VARIALBES are capitalized and start with $_GET


//what is the isset function? asking if something has been set

//$variable ='This is our variable';
//if(isset($variable)) {
    //echo 'Variable has been set';
//} else {
//echo 'Variable has not been set';
//}
//echo '<br>';

//if(isset($_GET['today'])) { 
   // echo 'Today has been set';
//} else {
   // echo 'NOT!!';
//}
//echo '<br>';

if(isset($_GET['today'])) {
    $today = $_GET['today'];
} else {
    $today = date('l');
}
echo '<br>';

switch($today) {
    case 'Friday';
    $coffee = '<h2>Friday is our Pumpkin Latte Day!</h2>';
    $pic = 'pumpkin_spice.png';
    $alt = 'pumpkin spice latte';
    $content = '<p><b>The Pumpkin Spice Latte</b> is a coffee drink 
    made with a mix of traditional autumn spice flavors, steamed milk, espresso, and often sugar, topped with whipped cream and pumpkin pie spice.
    The beverage is most commonly associated with Starbucks, which first offered the drink in the fall of 2003. 
    </p>';
    break;

    case 'Saturday';
    $coffee = '<h2>Saturday is our Green Tea Latte Day!</h2>';
    $pic = 'green_tea.png';
    $alt = 'green tea latte';
    $content = '<p>A <b>Green Tea Latte</b> is a tea-based beverage combining vivid green matcha tea powder and milk, or a dairy substitute, to create a smooth, creamy, caffeinated coffee alternative. 
    Many tearooms and coffee shops offer Green Tea Lattes both hot and iced.
    </p>';
    break;

    case 'Sunday';
    $coffee = '<h2>Sunday is our Cappuccino Day!</h2>';
    $pic = 'cappuccino.png';
    $alt = 'cappuccino';
    $content = '<p>A <b>Cappuccino</b>  is an espresso-based coffee drink that originated in Italy and is prepared with steamed milk foam. 
    Variations of the drink involve the use of cream instead of milk, using non-dairy milk substitutes and flavoring with cinnamon or chocolate powder. 
    </p>';
    break;

    case 'Monday';
    $coffee = '<h2>Monday is our Doppio Day!</h2>';
    $pic = 'doppio.png';
    $alt = 'doppio';
    $content = '<p><b>A Doppio</b>  is simply a double shot of espresso extracted from an coffee machine. 
    Doppio means "double" in Italian, so it is literally just another way of saying "double espresso". 
    </p>';
    break;

    case 'Tuesday';
    $coffee = '<h2>Tuesday is our Macchiato Day!</h2>';
    $pic = 'macchiato.png';
    $alt = 'macchiato';
    $content = '<p><b>Caffè macchiato</b>, sometimes called espresso macchiato, is an espresso coffee drink with a small amount of milk, 
    usually foamed. In Italian, macchiato means "stained" or "spotted", so the literal translation of caffè macchiato is "stained coffee" or "marked coffee". 
    </p>';
    break;

    case 'Wednesday';
    $coffee = '<h2>Wednesday is our Regular Joe Day!</h2>';
    $pic = 'coffee.png';
    $alt = 'coffee';
    $content = '<p>The definition of <b>"regular coffee"</b> varies distinctly with region in the United States; some regions having firm definitions and others no specific meaning. 
    In eastern Massachusetts (as noted), and New York, it is cream and sugar, in some areas of the Midwest, it means black (neither). The usage is in diners and coffee shops; 
    in upscale restaurants and bars it is not heard. In Canada it is commonly used in the ubiquitous Tim Horton\'s chain, where it refers to coffee with "one milk" and "one sugar."
    </p>';
    break;

    case 'Thursday';
    $coffee = '<h2>Thursday is our Flat White Day!</h2>';
    $pic = 'flat_white.png';
    $alt = 'flat_white';
    $content = '<p>A <b>flat white</b>is a coffee drink consisting of espresso with microfoam (steamed milk with small, fine bubbles and a glossy or velvety consistency). 
    It is comparable to a latte, but smaller in volume and with less microfoam, therefore having a higher proportion of coffee to milk, and milk that is more velvety in consistency,
    allowing the espresso to dominate the flavour, while being supported by the milk.
    </p>';
    break;
}
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
    <title>Switch Classwork Exercise</title>
    <style>
        *{
            margin:0;
            padding: 0;
            box-sizing: border-box;
        }

        #wrapper {
            width: 940px;
            margin: 20px auto;
        }

        h1, h2, h3 {
            font-family: 'Inter Tight', sans-serif;
            font-weight: 700;
            font-style: italic;
            color: #392e3a;
            
        }

        img {
           max-width: 60%;
           height: auto;
           margin: auto 20%;
        }

        p, h2, h1, li a, ul {
            text-align: center;
            text-decoration: none;
            list-style-type: none;
        }

        p {
            max-width: 80%;
            margin: 10px 0 20px 10%;
        }

        ul li a, p {
            color: #392e3a;
            font-family: 'Inter Tight', sans-serif;
            font-weight: 400; 
        }           
    </style>
</head>
<body>
<div id="wrapper">
    <h1>My Wonderful Switch Classwork Exercise</h1>
    <?php
    echo $coffee;
    ?>
    <img src="images/<?php echo $pic;?>" alt="<?php echo $alt; ?>">
    <?php echo $content; ?>
    <h2>Check out our daily specials:</h2>
    <ul>
        <li><a href="switch.php?today=Sunday">Sunday</a></li>
        <li><a href="switch.php?today=Monday">Monday</a></li>
        <li><a href="switch.php?today=Tuesday">Tuesday</a></li>
        <li><a href="switch.php?today=Wednesday">Wednesday</a></li>
        <li><a href="switch.php?today=Thursday">Thursday</a></li>
        <li><a href="switch.php?today=Friday">Friday</a></li>
        <li><a href="switch.php?today=Saturday">Saturday</a></li>
    </ul>
</div>
<!--end wrapper-->
    </body>
</html>





