<?php
// this is the first form
// we will be using the $_GET global variable

// logic:
// will ask for a name and email in the form
// if it is set, I'm good
// if not, show me the form
///VIDEO 7:53

if(isset($_GET['name'],
    $_GET['email'])) {
        $name = $_GET['name'];
        $email = $_GET['email'];
    } else {
    echo '
    <form action ="" method="get">
    <label>NAME</label>
    <input type="text" name="name">
    <label>EMAIL</label>
    <input type="email" name="email">
    <input type="submit" value="Confirm">
    </form>
    ';
}

//form in browser http://localhost/it261/weeks/week4/form-get.php?name=Kelly&email=kellylchap%40gmail.com   
?>