<?php
// this is the first form
// we will be using the $_GET global variable

// logic:
// will ask for a POST name and POST email in the form
// if it is set, I'm good
// if not, show me the form
// VIDEO 16:53

if(isset($_POST['name'],
$_POST['email'])) {
$name = $_POST['name'];
$email = $_POST['email'];
echo $name;
echo '<br>';
echo $email;
} else {
    echo '
    <form action="" method="post">
    <label>NAME</label>
    <input type="text" name="name">
    <label>EMAIL</label>
    <input type="email" name="email">
    <input type="submit" value="Send it">
</form>
    ';
}


