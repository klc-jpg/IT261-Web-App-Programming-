<?php
include('config.php'); 
include('./includes/header.php'); 
?>
    <div id="wrapper">
        <div class="daily_hero">
            <img class="daily_img" src="images/<?php echo $pic;?>" alt="<?php echo $alt; ?>"></img>
                <h1>It's <?php echo $place; echo'&nbsp;';echo $today;?>!</h1>
                <p>Welcome to our daily page where we pay tribute to a different UNESCO world heritage site each day of the week.</P>
        </div>
        <!---end div hero--->
        <main id="main_daily">  
            <div class="main_text_daily">
                <h2><?php echo $place; ?></h2>
                <?php echo $location; ?>
                <?php echo $content; ?>
            </div>
            <!---end main_text--->
        </main>
          <!---end main--->
          <aside class="aside_daily">
            <div class="aside_text">
            <h2>Daily UNESCO Exploration</h2>
                <ul>
                   <h3><li><a href="daily.php?today=Sunday">SUNDAY</a></li></h3>
                   <h3><li><a href="daily.php?today=Monday">MONDAY</a></li></h3>
                   <h3><li><a href="daily.php?today=Tuesday">TUESDAY</a></li></h3>
                   <h3><li><a href="daily.php?today=Wednesday">WEDNESDAY</a></li></h3>
                   <h3><li><a href="daily.php?today=Thursday">THURSDAY</a></li></h3>
                   <h3><li><a href="daily.php?today=Friday">FRIDAY</a></li></h3>
                   <h3><li><a href="daily.php?today=Saturday">SATURDAY</a></li></h3>
                </ul>
            </div>
            <!---end aside_text--->
        </aside>
        <!---end aside--->
 
    </div>
    <!---end wrapper--->
   <?php
include('includes/footer.php'); ?>