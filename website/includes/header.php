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
                <img id="logo" src="images/php.png" alt="logo"></img></a>
                    <nav>
                        <ul>
                            <?php echo make_links($nav);?>
                        </ul>
                    </nav>
                </div>
        <!---end inner header--->
    </header>
  <!---end header--->
