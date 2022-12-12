<?php
//use foreach loop for errors
//counting errors 
//if we have > 0 errors = echo error message!

if(count($errors) > 0):?>
    <div class="error">
        <?php foreach($errors as $error):?>
           <p>
                <?= $error ?>
           </p> 
        <?php endforeach;?>
    </div>
    <!-- end div error-->
<?php endif; ?>