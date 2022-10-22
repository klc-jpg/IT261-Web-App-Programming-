<?php
//navigation example
echo '<h2>Navigation that contains a key and a value:</h2>';
$nav = array(
    'index.php' => 'Home',
        'about.php' => 'About',
            'daily.php' => 'Daily',
                'project.php' => 'Project',
                    'contact.php' => 'Contact',
                        'gallery.php' => 'Gallery',
);
echo '<ul>';
foreach($nav as $key => $value) {
    echo '<li><a href=" '.$key.' ">'.$value.'</a></li>';
}
echo '</ul>';
echo '<br>';

//constants
//constants are usually capitalized with an underscore if it's a two word name
//constant = 'DB_USER'
//when we are on this page do such and such to the nav
echo '<h2>Our navigation will display a different color when on the index.php page!</h2>';
//define a constant
//use basename function: this page will be whatever page we are on
define('THIS_PAGE', basename($_SERVER['PHP_SELF']));
//add if statement to foreach loop
//if we are on this_page and it is the index.php page, do something
echo '<ul>';
foreach($nav as $key => $value) {
if(THIS_PAGE == $key) {
    echo '<li><a style="color:red;" href="" '.$key.' ">'.$value.'</a></li>';
} else {
    echo '<li><a style="color:green;" href="" '.$key.' ">'.$value.'</a></li>';
    }
}       //end foreach
echo '</ul>'; //open and close ul outside loop





?>