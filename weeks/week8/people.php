<?php
include('config.php');
include('./includes/header.php');
?>
<div id="wrapper">
    <div class="heading">
    <h1>Welcome to our People Database Class Exercise</h1>
    </div>
<main>
<?php
$sql = 'SELECT * FROM people';
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
<h2>Information About: '.$row['first_name'].'</h2>
<ul class="people">
<li><b>First Name:</b> '.$row['first_name'].'</li>
<li><b>Last Name:</b> '.$row['last_name'].'</li>
<li><b>Born:</b> '.$row['birthdate'].'</li>
<li>
<p>For more information about '.$row['first_name'].', <a href="people-view.php?id='.$row['people_id'].'">click here</a></p></li>
</p>
';
}//end while
} else {// end if num rows > 0 
echo 'Nobody is home!';
}
//release the server
@mysqli_free_result($result);
//close the connection
@mysqli_close($iConn);
?>
</main>

<aside id="people">
<img class="aside-image"<?php echo random_images($photos);?>></img>
</aside>
</div>
<!--end wrapper-->
<?php include('./includes/footer.php'); ?>