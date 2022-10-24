<?php
//more on forms--additional fields AND>>>
//logic:
//if I do not enter anything inside the input field, there will be a message!!
    //if fiels is empty--do something (sounds like if else)
//first_name, last_name, email, comments
//careful with the braces!

if(isset($_POST['first_name'],
$_POST['last_name'],
$_POST['email'],
$_POST['comments'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email= $_POST['email'];
    $comments= $_POST['comments'];

// create another if statement, if fields are empty, echo please fill out the fields
if(empty($_POST['first_name'] &&
$_POST['last_name'] &&
$_POST['email'] &&
$_POST['comments'])) {
    echo 'Please fill out all of the fields';
} else {
    echo $first_name;
    echo '<br>';
    echo $last_name;
    echo '<br>';
    echo $email;
    echo '<br>';
    echo $comments;
    echo '<br>';
} // end isset
} else {
    echo '
    <form action="" method="post">
    <label>First Name:</label>
    <input type="text" name="first_name">

    <label>Last Name:</label>
    <input type="text" name="last_name">

    <label>Email:</label>
    <input type="email" name="email">

    <label>Comments:</label>
    <textarea name="comments"></textarea>
  
    <input type="submit" value="send it!">
    
    </form>
    
    <p><a href="">RESET</a></p>
    ';
} //end else
?>