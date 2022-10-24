<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter+Tight:ital,wght@0,400;0,500;1,700&display=swap" rel="stylesheet">
    <title>Form 3 Inside My HTML</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>
<body>
    <h1>My form3.php</h1>
    <form action="" method="post">
        <fieldset>
        <label>First Name:</label>
        <input type="text" name="first_name">

        <label>Last Name:</label>
        <input type="text" name="last_name">

        <label>Email:</label>
        <input type="email" name="email">

        <label>Comments:</label>
        <textarea name="comments"></textarea>

        <input type="submit" value="send it!">

        <p><a href="">RESET</a></p>
    </fieldset>
</form>
    
<?php
//logic:
//first if statement
// if isset first_name, last_name--- we are good

//second if statement
//if i have empty fields, that is not good. 
//I will echo "please fill out all of the fields!!!
//if the fields are populated, then my else statment will display an echo of the information

if(isset($_POST['first_name'],
            $_POST['last_name'],
                $_POST['email'],
                    $_POST['comments'])) {
    $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
            $email = $_POST['email'];
                $comments = $_POST['comments'];

//nest another if statemenbt in reference to the fields being empty
if(empty($_POST['first_name'] &&
            $_POST['last_name'] &&
                $_POST['email'] &&
                    $_POST['comments'])) {
                        echo '<p class="error">All fields are required please</p>';                  
}else {
    echo '
    <div class="box">
    <h2 class="hello">Hello  '.$first_name.' '.$last_name.'</h2>
    <p class="thanks">We have recieved your <b>email</b> as:  '.$email.'. 
    We will review your <b>comments:</b></p>
    <br>
    <p class="comments"><b>"'.$comments.'"</b></p>
    </div>
    ';
    }
}//end isset
?>
    
</body>
</html>