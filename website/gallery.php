<?php
include('config.php'); 
include('./includes/header.php'); 
?>
<div id="wrapper">
    <div id="parks">
        <h1>National Parks Around the USA</h1>
    </div>
    <div class="np_table">
        <table class="national">
        <?php foreach($parks as $name => $image):?>
            <tr>
                <td class="np"><img src="images/<?php echo substr($image, 0, 5);?>.png" alt="<?php echo str_replace('_',' ', $name);?>"></img></td>
                <td><?php echo str_replace('_',' ', $name);?></td>
                <td><?php echo substr($image, 6);?></td>
            </tr>
        <?php endforeach;?>
    </table>
    </div>
</div>
<?php include('./includes/footer.php'); ?>