<?php
define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

switch(THIS_PAGE) {
    case 'index.php';
    $title = 'website project home page';
    $body = 'home inner';
    break;

    case 'about.php';
    $title = 'website project about page';
    $body = 'about inner';
    break;

    case 'daily.php';
    $title = 'daily page for website project';
    $body = 'daily inner';
    break;

    case 'project.php';
    $title = 'website project page';
    $body = 'project inner';
    break;

    case 'contact.php';
    $title = 'website project contact page';
    $body = 'contact inner';
    break;

    case 'gallery.php';
    $title = 'website project gallery page';
    $body = 'gallery inner';
    break;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex,nofollow">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter+Tight:ital,wght@0,400;0,500;1,700&display=swap" rel="stylesheet">
    <link href="css/styles.css" type="text/css" rel="stylesheet">
    <title><?php echo $title; ?></title>
</head>
<body class="<?php echo $body; ?>">
    <header>
        <div class="inner-header">
            <a href="../index.php">
                <img id="logo" src="images/php.png" alt="logo"></img>
            </a>
            <!--<nav>
                <ul>
                    <li><a href="../index.php">HOME</a></li>
                    <li><a href="">ABOUT</a></li>
                    <li><a href="">DAILY</a></li>
                    <li><a href="">PROJECT</a></li>
                    <li><a href="">CONTACT</a></li>
                    <li><a href="">GALLERY</a></li>
                         </ul>-->
        <nav>
        <?php
        $nav = array(
            'index.php' => 'HOME',
                'about.php' => 'ABOUT',
                    'daily.php' => 'DAILY',
                        'project.php' => 'PROJECT',
                            'contact.php' => 'CONTACT',
                                'gallery.php' => 'GALLERY',
        );      
        echo '<ul>';
            foreach($nav as $key => $value) {
                if($key == THIS_PAGE) {
                    echo '<li><a style="color:#EDBB68;" href=" '.$key.' ">'.$value.'</a></li>';
                } else {
                    echo '<li><a style="color:#392e3a;" href=" '.$key.' ">'.$value.'</a></li>';
                    }
                }
                //end foreach    
        echo '</ul>';
        ?>
            </nav>
        </div>
        <!---end inner header--->
    </header>
  <!---end header--->