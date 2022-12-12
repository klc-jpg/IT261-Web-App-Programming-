<?php
//server.php where the session will start
//session = a way to store information

session_start();
include('config.php');
//eventually header include goes here
//include('./includes/header.php');

//this is where server.php communicates with the database
$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

// register user using if(isset)
if(isset($_POST['reg_user'])) {
    $first_name = mysqli_real_escape_string($iConn, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($iConn, $_POST['last_name']);
    $email = mysqli_real_escape_string($iConn, $_POST['email']);
    $username = mysqli_real_escape_string($iConn, $_POST['username']);
    $password = mysqli_real_escape_string($iConn, $_POST['password']);
    $password_2 = mysqli_real_escape_string($iConn, $_POST['password_2']);

//make sure all input fields are not empty
//if empty we are going to use a new function called array_push()
if(empty($first_name)) {
    array_push($errors, 'First name is required!');
}
if(empty($last_name)) {
    array_push($errors, 'Last name is required!');
}
if(empty($email)) {
    array_push($errors, 'Email is required!');
}
if(empty($username)) {
    array_push($errors, 'Username is required!');
}
if(empty($password)) {
    array_push($errors, 'Password is required!');
}
if($password !== $password_2) {// LOGIC = is password_1 !== password_2
    array_push($errors, 'Passwords do not match!');
}

// check the username and password AND selecting it from the table
$user_check_query = "SELECT * FROM users WHERE username = '$username' OR email = '$email' LIMIT 1 ";

$result = mysqli_query($iConn, $user_check_query) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

$rows = mysqli_fetch_assoc($result); //assign result to var $rows
//we are going to have an if statement and will nest two additional if statements inside main if statement
//cannot have duplicate if statements or duplicate emails
if($rows) {
    if($rows['username'] == $username) {
        array_push($errors, 'Username already exists');
    }
    if($rows['email'] == $email) {
        array_push($errors, 'Email already exists');
    }
  }//close big if statement
//do we have any errors?
//now we count errors
if(count($errors) == 0 ) {
//if errors == 0 we take empty function and assign to new var $password
$password = md5($password);
//now we insert information into the table
$query = "INSERT INTO users (first_name, last_name, email, username, password) VALUES ('$first_name', '$last_name', '$email', '$username', '$password') "; 

mysqli_query($iConn, $query);

$_SESSION['username'] = $username;
$_SESSION['success'] = $success;

//if we are successful then we will be directed to our login page
header('Location:login.php');
    }// close if count errors
}//end if isset reg_user


//Here we communicate with the login page
if(isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($iConn, $_POST['username']);
    $password = mysqli_real_escape_string($iConn, $_POST['password']);

    if(empty($username)) {
        array_push($errors, 'Username is required');
    }
    if(empty($password)) {
        array_push($errors, 'Password is required');
    }
//count errors again
    if(count($errors) == 0 ) {
        $password = md5($password);
        $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password' ";
        $results = mysqli_query($iConn, $query);

        if(mysqli_num_rows($results) == 1) { //if this is successful user will be directed to home page (index.php)
            $_SESSION['username'] = $username;
            $_SESSION['success'] = $success;

            header('Location:index.php');

        }else {
            array_push($errors, 'Wrong username/password combination');  
        }//close else
    }//close count errors
}//close isset login_user

?>