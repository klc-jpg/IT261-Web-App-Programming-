<?php
ob_start();

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

//navigational array
$nav = array(
    'index.php' => 'HOME',
        'about.php' => 'ABOUT',
            'daily.php' => 'DAILY',
                'project.php' => 'PROJECT',
                    'contact.php' => 'CONTACT',
                        'gallery.php' => 'GALLERY',
);  

//nav function
function make_links($nav) {
    $my_return = '';
    foreach($nav as $key => $value) {
        if ($key == THIS_PAGE) {
            $my_return .= '<li><a class="current" style="color:#EDBB68;" href=" '.$key.' ">
            '.$value.'</a></li>';
        } else {
            $my_return .= '<li><a style="color:#392e3a;" href=" '.$key.' ">'.$value.'</a></li>';
        }
    }//end foreach
    return $my_return;
}//end function

//switch for HW3
if(isset($_GET['today'])) {
    $today = $_GET['today'];
} else {
     $today = date('l');
}

switch($today) {
    case 'Friday';
    $place = 'Fujisan';
    $location = '<h4>Japan</h4>';
    $pic = 'fujisan.png';
    $alt = 'mountain';
    $content = '<p>Fujisan, sacred place and source of artistic inspiration. The beauty of the solitary, often snow-capped, stratovolcano, known around the world as Mount Fuji, rising above villages and tree-fringed sea and lakes has long been the object of pilgrimages and inspired artists and poets. 
    The inscribed property consists of 25 sites which reflect the essence of Fujisan\'s sacred and artistic landscape. In the 12th century, Fujisan became the centre of training for ascetic Buddhism, which included Shinto elements. On the upper 1,500-metre tier of the 3,776m mountain, pilgrim routes and 
    crater shrines have been inscribed alongside sites around the base of the mountain including Sengen-jinja shrines, Oshi lodging houses, and natural volcanic features such as lava tree moulds, lakes, springs and waterfalls, which are revered as sacred. Its representation in Japanese art goes back to 
    the 11th century, but 19th century woodblock prints of views, including those from sand beaches with pine tree groves have made Fujisan an internationally recognized icon of Japan and have had a deep impact on the development of Western art. 
    </p>';
    break;
   
    case 'Saturday';
    $place = 'Serengeti National Park';
    $location = '<h4>Tanzania</h4>';
    $pic = 'serengeti.png';
    $alt = 'savannah';
    $content = '<p>The vast plains of the <b>Serengeti National Park</b> comprise 1.5 million ha of savannah. The annual migration to permanent water holes of vast herds of herbivores (wildebeest, gazelles and zebras), followed by their predators, is one of the most impressive natural events in the world.
    </p>';
    break;

    case 'Sunday';
    $place = 'Statue of Liberty';
    $location = '<h4>New York, NY, USA</h4>';
    $pic = 'statue.png';
    $alt = 'statue';
    $content = '<p>The <b>Statue of Liberty</b> was made in Paris by the French sculptor Bartholdi, in collaboration with Gustave Eiffel (who was responsible for the steel framework), 
    this towering monument to liberty was a gift from France on the centenary of American independence. Inaugurated in 1886, the sculpture stands at the entrance to New York Harbour 
    and has welcomed millions of immigrants to the United States ever since.
    </p>';
    break;

    case 'Monday';
    $place = 'Machu Picchu';
    $location = '<h4>Peru</h4>';
    $pic = 'machu.png';
    $alt = 'hills';
    $content = '<p><b>Machu Picchu</b> stands 2,430 m above sea-level, in the middle of a tropical mountain forest, in an extraordinarily beautiful setting. 
    It was probably the most amazing urban creation of the Inca Empire at its height; its giant walls, terraces and ramps seem as if 
    they have been cut naturally in the continuous rock escarpments. The natural setting, on the eastern slopes of the Andes, encompasses the upper Amazon 
    basin with its rich diversity of flora and fauna.
    </p>';
    break;

    case 'Tuesday';
    $place = 'Taj Mahal';
    $location = '<h4>Agra, Uttar Pradesh, India</h4>';
    $pic = 'taj.png';
    $alt = 'Taj Mahal';
    $content = '<p> An immense mausoleum of white marble, built in Agra between 1631 and 1648 by order of the Mughal emperor Shah Jahan in memory of his favourite wife, 
    the Taj Mahal is the jewel of Muslim art in India and one of the universally admired masterpieces of the world\'s heritage.
    </p>';
    break;

    case 'Wednesday';
    $place = 'Great Wall';
    $location = '<h4>China</h4>';
    $pic = 'wall.png';
    $alt = 'The Great Wall';
    $content = '<p><b>The Great Wall</b> was continuously built from the 3rd century BC to the 17th century AD on the northern border of the country as the great military defence project of successive Chinese Empires, with a total length of more than 20,000 kilometers. The Great Wall begins in the east at Shanhaiguan in Hebei province and ends at Jiayuguan in Gansu province to the west. Its main body consists of walls, horse tracks, watch towers, and shelters on the wall, and includes fortresses and passes along the Wall.
    </p>';
    break;

    case 'Thursday';
    $place = 'Teotihuacan';
    $location = '<h4>Mexico</h4>';
    $pic = 'teo.png';
    $alt = 'ancient temple';
    $content = '<p>The holy city of <b>Teotihuacan</b> ("the place where the gods were created") is situated some 50 km north-east of Mexico City. Built between the 1st and 7th centuries A.D., it is characterized by the vast size of its monuments – in particular, the Temple of Quetzalcoatl and the Pyramids of the Sun and the Moon, laid out on geometric and symbolic principles. As one of the most powerful cultural centres in Mesoamerica, Teotihuacan extended its cultural and artistic influence throughout the region, and even beyond.
    </p>';
    break;
}

//form's PHP
//define vars
$first_name = '';
$last_name = '';
$gender = '';
$phone = '';
$email = '';
$wines = '';
$comment = '';
$privacy = '';
$regions = '';

//define error vars
$first_name_err = '';
$last_name_err = '';
$gender_err = '';
$phone_err = '';
$email_err = '';
$wines_err = '';
$comment_err = '';
$privacy_err = '';
$regions_err = '';

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    if(empty($_POST['first_name'])) {
        $first_name_err = 'Please fill out your first name';
    } else {
        $first_name = $_POST['first_name'];
    }

    if(empty($_POST['last_name'])) {
        $last_name_err = 'Please fill out your last name';
    } else {
        $last_name = $_POST['last_name'];
    }

    if(empty($_POST['gender'])) {
        $gender_err = 'Please select an option';
    } else {
        $gender = $_POST['gender'];
    }
    //if(empty($_POST['phone'])) {
      //  $phone_err = 'Please add your phone number';
    //} else {
      //  $phone = $_POST['phone'];
    //}
    if(empty($_POST['phone'])) {            // if empty, type in your number
        $phone_err = 'Please add your phone number';
        } elseif(array_key_exists('phone', $_POST)) {
            if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone'])) {      // if you are not typing the requested format of xxx-xxx-xxxx, display Invalid format            
                $phone_err = 'Invalid format!';
        } else {
            $phone = $_POST['phone'];
        } // end else
    } // end main if
         
    if(empty($_POST['email'])) {
        $email_err = 'Email ID is required please';
    } else {
        $email = $_POST['email'];
    }

    if(empty($_POST['wines'])) {
        $wines_err = 'What no wines?';
    } else {
        $wines = $_POST['wines'];
    }

    if(empty($_POST['comments'])) {
        $comment_err = 'Please share your thoughts with us';
    } else {
        $comments = $_POST['comments'];
    }

    if(empty($_POST['privacy'])) {
        $privacy_err = 'Please read and agree to our privacy policy';
    } else {
        $privacy = $_POST['privacy'];
    }

    if($_POST['regions'] == NULL) {
        $regions_err = 'Please select your region';
    } else {
        $regions = $_POST['regions'];
    }

    //start wines function
    function my_wines($wines) {
        $my_return = ' ';
        if(!empty($_POST['wines'])) {
            $my_return = implode(', ', $_POST['wines']);
        } else {
            $wines_err = 'Please select your favorite wines';
        }
        return $my_return;
    }//end wines function

    if(isset($_POST['first_name'],
    $_POST['last_name'],
    $_POST['email'],
    $_POST['gender'],
    $_POST['phone'],
    $_POST['wines'],
    $_POST['regions'],
    $_POST['comments'],
    $_POST['privacy'] )) {

    $to = 'kelly.chapman@seattlecolleges.edu';
    $subject = 'Test email on ' .date('m/d/y, h:i A');
    $body = '
    First Name : '.$first_name.' '.PHP_EOL.'
    Last Name : '.$last_name.' '.PHP_EOL.'
    Email : '.$email.' '.PHP_EOL.'
    Gender : '.$gender.' '.PHP_EOL.'
    Phone : '.$phone.' '.PHP_EOL.'
    Region : '.$regions.' '.PHP_EOL.'
    Wines : '.my_wines($wines).' '.PHP_EOL.'
    Comments : '.$comments.' '.PHP_EOL.' 
    Privacy : '.$privacy.' '.PHP_EOL.' ';

    $headers = array(
        'From' => 'noreply@kellychapman.xyz'
    );

    if(!empty($first_name && 
                $last_name &&
                    $email &&
                        $gender && 
                            $regions && 
                                $wines && 
                                    $comments &&
                                        $phone &&
                                            $privacy) &&
                                                preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone'])) {
        mail($to, $subject, $body, $headers); 
        header('Location:thx.php');
        }// end !empty if statement
    }//end isset
}// end server request method

