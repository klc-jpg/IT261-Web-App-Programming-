<?php
//login page
include('server.php');
include('./includes/header.php');
?>
<div id="wrapper">
<h1 class="center">Login Page</h1>
<form class="sign" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ;?>" method="post">
    <fieldset class="sign">
        <label>Username</label> 
            <input type="text" name="username" value="<?php if(isset($_POST['username'])) echo htmlspecialchars($_POST['username'])    ;?>">
    
        <label>Password</label>
            <input type="password" name="password">

        <div class="buttons">
            <button type="submit" class="btn" name="login_user"><strong><i>Login</i></strong></button>
            <button type="button"  onclick="window.location.href='<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ;?>'"><strong><i>Reset</i></strong></button>
        </div>
        <?php include('errors.php');?>
    </fieldset>
</form>
<p class="center">Not registered? Please create an <a href="register.php"> account </a></p>
</div>
<!-- close wrapper-->
<?php include('./includes/footer.php');?>