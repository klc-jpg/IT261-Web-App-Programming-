<?php
// our wine list, an array of wines
//Apply this example to navbar
echo '<h2>This is a wine list array:</h2>';
$wines = array (
    'Cabernet',
    'Merlot',
    'Syrah',
    'Malbec',
    'Red Blend',
);
echo '<ul>';     //Since we cannot echo an array of wines                                
foreach($wines as $key) {   //We use foreach loop
    echo '<li> '.$key.'</li>';
}
echo '</ul>';
echo '<br>';


//Another example
echo '<h2>Movies and shows list which will have both a key and a value:</h2>';
$shows = [
'Apple TV' => 'Severance',   //key then value  
'Apple TV' => 'For All Mankind', 
'Showtime' => 'City on a Hill', 
'Showtime' => 'Homeland', 
'Movie' => 'Top Gun Maverick', 
'HBO Max' => 'Hacks',                    
];
echo '<ul>';
foreach($shows as $key => $value) {
    echo '<li><b>'.$key.'</b>: '.$value.'</li>';
}
echo '</ul>';
echo '<br>';


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










?>