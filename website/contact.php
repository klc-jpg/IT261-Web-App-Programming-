<?php
include('config.php'); 
include('./includes/header.php'); 
?>
<div id="wrapper">
<main id="main_home">
    <div class="main_text">
        <h1>Welcome to our contact page!</h1>
            <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor 
            in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
        </p>
        </div>
        <div class= "main_form">
        <?php
        include('./includes/form.php');?>
        </div>
    </main>
    <aside>
            <div class="aside_text">
                <h3>Here's an example of a size three headline for this lovely aside</h3>
                <p>
                    Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem
                    eum fugiat quo voluptas nulla pariatur?
                </p>
            </div>
            <!---end aside_text--->
        </aside>
        <!---end aside--->
    </div>
    <!---end wrapper--->
<?php
include('includes/footer.php'); ?>