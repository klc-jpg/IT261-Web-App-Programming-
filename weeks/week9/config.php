<?php
//our config file
ob_start();  // prevents header errors before reading the whole page!
define('DEBUG', 'TRUE');  // We want to see our errors

include('credentials.php');

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

switch(THIS_PAGE) {
    case 'index.php';
    $titles = 'Home Page';
    break;

    case 'register.php';
    $titles = 'Registration Page';
    break;

    case 'login.php';
    $titles = 'login page';
    break;
}

$success = 'You have successfully logged in!';
$errors = array();

function myError($myFile, $myLine, $errorMsg){
if(defined('DEBUG') && DEBUG){
    echo 'Error in file: <b> '.$myFile.' </b> on line: <b> '.$myLine.' </b>';
    echo 'Error message: <b> '.$errorMsg.'</b>';
    die();
  }else {
        echo ' Houston, we have a problem!';
        die();
  } 
}

?>
