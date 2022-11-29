<?php
//points to config but not header
include('config.php');
//is our get(AKA isset) set?
if(isset($_GET['id'])) {
    $id = (int)$_GET['id'];
}else {
    header('Location:cities.php');
}
//select from the table where peopleid = id
$sql = 'SELECT * FROM cities WHERE city_id ='.$id.' ';

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));
$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));
if(mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
    $city_name = stripcslashes($row['city_name']);
    $location = stripcslashes($row['location']);
    $population = stripcslashes($row['population']);
    $established = stripcslashes($row['established']);
    $blurb = stripcslashes($row['blurb']);
    $details = stripcslashes($row['details']);
    $feedback = '';
        
    }//end while
} else {//end if statement
$feedback = 'There is a problem!';
}//end else
include('./includes/header.php');
?>
<div id="wrapper-city">
<div class="heading">
    <h1>City View</h1>
</div>
<main class="city-view-main">
    <h2>All About <?php echo $city_name;?></h2>
    <ul class="details">
    <?php 
        echo '
        <li><b>Name:</b> '.$city_name.'</li>
        <li><b>Location:</b> '.$location.'</li>
        <li><b>Population:</b> '.$population.'</li>
        <li><b>Established:</b> '.$established.'</li>
        <li><b>Details:</b>
            <p>'.$details.'</p>
        </li>';
        ?>
    </ul>
    <p><a href="cities.php">Return to the cities page</a></p>

</main>
<aside id="city-view-aside">
    <!--<h3>This is my aside</h3>-->
    <figure>
    <img class="city" src="images/city<?php echo $id;?>.png" alt="<?php echo $city_name;?>"></img>
    <figcaption>
    <?php 
    echo '
    '.$city_name.', '.$location.'
    ';?>
    </figcaption>
    </figure>
    <p><?php echo $blurb ?></p>
<!--end aside-->
</aside>
<?php 
//release the server
@mysqli_free_result($result);
//close the connection
@mysqli_close($iConn);
?>
<!--end wrapper-->
</div>
<?php include('./includes/footer.php'); ?>