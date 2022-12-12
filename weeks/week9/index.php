<?php
//index page must show the session_start() function
session_start();
include('config.php');

//did the user log in correctly?  If not the user will recieve a message and be directed to the login page
if(!isset($_SESSION['username'])) {
    $_SESSION['msg'] = 'You must login first!';
    header('Location:login.php');
}

if(isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header('Location:login.php');
}

//Need to have closing php tag when using header include
include('./includes/header.php');
?>
<header>
<!--open header-->

<?php
//logic-- is our session success set?
if(isset($_SESSION['success'])):?>
<div class="success">
    <h3>
        <?php echo $_SESSION['success'];
        unset($_SESSION['success']);?>
    </h3>
</div>
<!--close success div-->
<?php endif; ?>

<?php //is our username set?
if(isset($_SESSION['username'])) :?>
    <div class="welcome_logout">
        <h3>Hi,
          <?= $_SESSION['username'] ?>
        </h3>
        <p class="logout_button"><button class="logout"><a href="index.php?logout='1'"><strong><i>Logout</i></strong></a></button></p>
    </div>
    <!--close welcome logout-->
<?php endif; ?>
    </header>
    <!--close header-->
    <div id="wrapper">
        <h1 class="center">Welcome to our home page!</h1>
    </div>
    <!--end wrapper-->
<?php include('./includes/footer.php'); ?>