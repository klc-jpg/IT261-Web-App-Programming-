<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex,nofollow">
    <script src="https://use.fontawesome.com/fc8e666ffc.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter+Tight:ital,wght@0,400;0,500;1,700&display=swap" rel="stylesheet">
    <title>My Portal Page!</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>

<body>
    <!--WRAPPER START -->
    <div id="wrapper">
        <header>
            <h1 class="portal"><a href="website/index.html">Kelly's Portal Page</a></h1>
            <nav>
                <ul class="navigation">
                    <li><a href="">SWITCH</a></li>
                    <li><a href="">TROUBLESHOOT</a></li>
                    <li><a href="">CALCULATOR</a></li>
                    <li><a href="">EMAIL</a></li>
                    <li><a href="">DATABASE</a></li>
                    <li><a href="">GALLERY</a></li>
                </ul>
            </nav>
        </header>

        <main>
            <h2 class="about">About Me</h2><br>
            <img class="kelly" src="images/me.png" alt="Kelly">
            <p class="portal_p1">Hi! I’m Kelly, a web development student at Seattle Central.<br> <br> Beyond my school life, I love to write and do photography. Another love is traveling, which can involve any one or a combination of these: a walk, a hike, a camping trip,
                road-trip, short-flight, long-flight. All travel excites me, regardless of the destination or trip size.</p><br><br><br>
            <div class="mamp_screenshots">
                <h4><strong>WEEK ONE</strong></h4><br>
                <img class="mamp" src="images/mamp.svg" alt="MAMP"><br>
                <img class="mampError" src="images/mamp_error.svg" alt="MAMP_error">
            </div>
        </main>
        <aside>
            <div class="aside_text">
                <h2 class="exercises">Weekly Class Exercises</h2><br>
                <h4>WEEK TWO</h4>
                <ul>
                    <li><a href="weeks/week2/var.php">&nbsp;&nbsp;&nbsp;Var</a></li>
                    <li><a href="weeks/week2/var2.php">&nbsp;&nbsp;&nbsp;Var Two</a></li>
                  <!-- <li><a href="weeks/week2/currency-logic.php">&nbsp;&nbsp;&nbsp;Currency Logic</a></li>-->
                    <li><a href="weeks/week2/currency.php">&nbsp;&nbsp;&nbsp;Currency</a></li>
                   <!-- <li><a href="weeks/week2/heredoc.php">&nbsp;&nbsp;&nbsp;Heredoc</a></li>-->
                </ul>
                <br>
                <h4>WEEK THREE</h4>
                <ul>
                    <li><a href="weeks/week3/if.php">&nbsp;&nbsp;&nbsp;If</a></li>
                    <li><a href="weeks/week3/date.php">&nbsp;&nbsp;&nbsp;Date</a></li>
                    <li><a href="weeks/week3/forloop.php">&nbsp;&nbsp;&nbsp;For Loop</a></li>
                    <li><a href="weeks/week3/foreach.php">&nbsp;&nbsp;&nbsp;For Each</a></li>
                    <li><a href="weeks/week3/switch.php">&nbsp;&nbsp;&nbsp;Switch</a></li>
                </ul>
            </div>
            <!--end aside_text-->
        </aside>
    </div>
    <!--WRAPPER end -->
    <footer>
        <p><small>&copy; 2022 - <?=date('Y')?> by Kelly Chapman, All Rights Reserved ~ <a href="https://validator.w3.org/nu/?doc=https%3A%2F%2Fkellychapman.xyz%2Fit261%2Findex.php" target="_blank">Valid HTML</a> ~ <a href="http://jigsaw.w3.org/css-validator/validator?lang=en&profile=css3svg&uri=+https%3A%2F%2Fkellychapman.xyz%2Fit261%2Findex.php&usermedium=all&vextwarning=&warning=1" target="_blank">Valid CSS</a></small></p>
    </footer>
</body>

</html>