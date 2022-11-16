<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ;?>" method="post">
        <fieldset>
            <legend>Contact Kelly</legend>
            <div class="wrapper2">
                <label>First Name</label>
                    <span class="error"><?php echo $first_name_err ;?></span>
                        <input type="text" name="first_name" value="<?php if(isset($_POST['first_name'])) echo htmlspecialchars($_POST['first_name']) ;?>">

                <label>Last Name</label>
                    <span class="error"><?php echo $last_name_err ;?></span>
                        <input type="text" name="last_name" value="<?php if(isset($_POST['last_name'])) echo htmlspecialchars($_POST['last_name']) ;?>">

                <label>Email</label>
                    <span class="error"><?php echo $email_err ;?></span>
                        <input type="email" name="email" value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']) ;?>">
               
                <label>Phone</label>
                    <span class="error"><?php echo $phone_err ;?></span> 
                        <input type="tel" name="phone" placeholder=" xxx-xxx-xxxx" value="<?php if(isset($_POST['phone'])) echo htmlspecialchars($_POST['phone']) ;?>">
                 
                <label>Favorite Food (check all that apply)</label>
                    <span class="error"><?php echo $food_err ;?></span> 
                        <ul> 
                            <li><input type="checkbox" name="food[]" value="Italian" <?php if(isset($_POST['food']) && in_array('Italian', $food)) echo 'checked = "checked" ' ;?>>&nbsp;Italian</li>
                            <li><input type="checkbox" name="food[]" value="Indian" <?php if(isset($_POST['food']) && in_array('Indian', $food)) echo 'checked = "checked" ';?>>&nbsp;Indian</li>
                            <li><input type="checkbox" name="food[]" value="Mexican" <?php if(isset($_POST['food']) && in_array('Mexican', $food)) echo 'checked = "checked" ';?>>&nbsp;Mexican</li>
                            <li><input type="checkbox" name="food[]" value="Thai" <?php if(isset($_POST['food']) && in_array('Thai', $food)) echo 'checked = "checked" ';?>>&nbsp;Thai</li>
                            <li><input type="checkbox" name="food[]" value="Japanese" <?php if(isset($_POST['food']) && in_array('Japanese', $food)) echo 'checked = "checked" ';?>>&nbsp;Japanese</li>
                            <li><input type="checkbox" name="food[]" value="Chinese" <?php if(isset($_POST['food']) && in_array('Chinese', $food)) echo 'checked = "checked" ';?>>&nbsp;Chinese</li>
                            <li><input type="checkbox" name="food[]" value="Other" <?php if(isset($_POST['food']) && in_array('Other', $food)) echo 'checked = "checked" ';?>>&nbsp;Other<input class="other" type="text" name="food[]" placeholder="Tell us!" value="<?php if(isset($_POST['food'])) echo htmlspecialchars($_POST['food']) ;?>"></li>
                        </ul>
 
                <label>Age</label>
                    <span class="error"><?php echo $age_err ;?></span> 
                        <select name="age"> 
                            <option value="" NULL <?php if(isset($_POST['age']) && $_POST['age'] == NULL) echo 'selected = "unselected" ';?>>Select One</option>
                            <option value="18 - 24" <?php if(isset($_POST['age']) && $_POST['age'] == '18 - 24') echo 'selected = "selected" ';?>>18 - 24</option>
                            <option value="25 - 34" <?php if(isset($_POST['age']) && $_POST['age'] == '25 - 34') echo 'selected = "selected" ';?>>25 - 34</option>
                            <option value="35 - 44" <?php if(isset($_POST['age']) && $_POST['age'] == '35 - 44') echo 'selected = "selected" ';?>>35 - 44</option>
                            <option value="45 - 54" <?php if(isset($_POST['age']) && $_POST['age'] == '45 - 54') echo 'selected = "selected" ';?>>45 - 54</option>
                            <option value="55 - 64" <?php if(isset($_POST['age']) && $_POST['age'] == '55 - 64') echo 'selected = "selected" ';?>>55 - 64</option>
                            <option value="65+" <?php if(isset($_POST['age']) && $_POST['age'] == '65+') echo 'selected = "selected" ';?>>65+</option>
                        </select>

                <label>Comments</label>
                    <span class="error"><?php echo $comment_err ;?></span> 
                        <textarea name="comments"><?php if(isset($_POST['comments'])) echo htmlspecialchars( $_POST['comments']) ;?></textarea>

                <label>Privacy Policy</label>
                    <span class="error"><?php echo $privacy_err ;?></span> 
                        <ul> 
                            <li><input type="radio" name="privacy" value="yes" <?php if(isset($_POST['privacy']) && $_POST['privacy'] == 'yes') echo 'checked = "checked" ';?>>&nbsp;Agree</li>   
                        </ul>

                <input type="submit" value="Send It!">
                <input type="button" onclick="window.location.href='<?php echo $_SERVER['PHP_SELF'] ;?>'" value="Reset">
          </div>
    </fieldset>
    </form>