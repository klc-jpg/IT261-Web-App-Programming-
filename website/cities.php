<?php
include('config.php');
include('./includes/header.php');
//include('credentials.php');  //new lines
?>
<div id="wrapper-city">
    <div class="heading">
        <h1>World Megalopolis Index</h1>
    </div>
<main class="city-main">
<?php
$sql = 'SELECT * FROM cities'; 
//connect to DB
// on the people.php page
// AND... if we cannot connect to the database... we DIE
$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

//If we cannot extract data....
$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

 //asking if num of rows > 0
if(mysqli_num_rows($result) > 0) {
// read the rows with a while loop
while($row = mysqli_fetch_assoc($result)) {
echo '
<h2>'.$row['city_name'].' Data</h2>
<ul class="city">
<li><b>Name:</b> '.$row['city_name'].'</li>
<li><b>Location:</b> '.$row['location'].'</li>
<li><b>Population:</b> '.$row['population'].'</li>
<li><b>Established:</b> '.$row['established'].'</li>
<li>
<p>For more information about '.$row['city_name'].', <a href="city-view.php?id='.$row['city_id'].'">click here</a></p></li>
</p>
';
}//end while
} else {// end if num rows > 0 
echo 'Nobody home';
}
//release the server
@mysqli_free_result($result);
//close the connection
@mysqli_close($iConn);
?>
</main>

<aside id="city-aside">
<img class="aside-image"<?php echo rando_images($pics);?>></img>
<img class="aside-image"<?php echo rando_images($pics);?>></img>
<img class="aside-image"<?php echo rando_images($pics);?>></img>
</aside>
</div>
<!--end wrapper-->
<?php include('./includes/footer.php'); ?>