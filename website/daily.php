<?php
if(isset($_GET['today'])) {
   $today = $_GET['today'];
} else {
    $today = date('l');
}
//echo '<br>';

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
include('includes/header.php'); ?>
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