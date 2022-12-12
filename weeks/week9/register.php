<?php
include('server.php');
include('./includes/header.php');
?>
<div id="wrapper">
<h1 class="center">Register Today!</h1>
<form class="reg" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
    <fieldset class="reg">
        <label>First Name</label>
            <input type="text" name="first_name" value="<?php if(isset($_POST['first_name'])) echo htmlspecialchars($_POST['first_name']) ;?>">

        <label>Last Name</label>
            <input type="text" name="last_name" value="<?php if(isset($_POST['last_name'])) echo htmlspecialchars($_POST['last_name']) ;?>">

        <label>Email</label>
            <input type="email" name="email" value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']) ;?>">

        <label>Username</label>
            <input type="text" name="username" value="<?php if(isset($_POST['username'])) echo htmlspecialchars($_POST['username']) ;?>">

        <label>Password</label>
            <input type="password" name="password" value="<?php if(isset($_POST['password'])) echo htmlspecialchars($_POST['password']) ;?>">

        <label>Confirm Password</label>
            <input type="password" name="password_2" value="<?php if(isset($_POST['password_2'])) echo htmlspecialchars($_POST['password_2']) ;?>">

        <div class="buttons">
            <button type="submit" name="reg_user" class="btn"><strong><i>Register</i></strong></button>
            <button type="button"  onclick="window.location.href='<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ;?>'"><strong><i>Reset</i></strong></button>
        </div>
        
        <?php include('errors.php');?>
    </fieldset>
</form>
<p class="center">Already have an account?<a href="login.php"> login</a> instead</p>
</div>
<!-- close wrapper-->
<?php include('./includes/footer.php');?>