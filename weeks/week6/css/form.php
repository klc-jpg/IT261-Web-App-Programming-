<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter+Tight:ital,wght@0,400;0,500;1,700&display=swap" rel="stylesheet">
    <title>Form One in Week Six</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>
<body>
<div id="wrapper">
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ;?>" method="post">
        <fieldset>
            <legend>Contact Kelly</legend>

                <label>First Name</label>
                    <input type="text" name="first_name" value="<?php if(isset($_POST['first_name'])) echo htmlspecialchars($_POST['first_name']) ;?>">

                <label>Last Name</label>
                    <input type="text" name="last_name" value="<?php if(isset($_POST['last_name'])) echo htmlspecialchars($_POST['last_name']) ;?>">

                <label>Email</label>
                    <input type="email" name="email" value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']) ;?>">

                <label>Gender</label>
                    <ul> 
                        <li><input type="radio" name="gender" value="female" <?php if(isset($_POST['gender']) && $_POST['gender'] == 'female') echo 'checked = "checked" ';?>>&nbsp;Female</li>
                        <li><input type="radio" name="gender" value="male" <?php if(isset($_POST['gender']) && $_POST['gender'] == 'male') echo 'checked = "checked" ';?>>&nbsp;Male</li>   
                        <li><input type="radio" name="gender" value="neither" <?php if(isset($_POST['gender']) && $_POST['gender'] == 'neither') echo 'checked = "checked" ';?>>&nbsp;Neither</li>     
                    </ul>
             
                <label>Phone</label>
                    <input type="tel" name="phone" value="<?php if(isset($_POST['phone'])) echo htmlspecialchars($_POST['phone']) ;?>">

                <label>Favorite Wines (check all that apply)</label>
                    <ul> <!--will come back once we add sticky-->
                        <li><input type="checkbox" name="wines[]" value="cab" <?php if(isset($_POST['wines']) && in_array('cab', $wines)) ;?>>&nbsp;Cabernet</li>
                        <li><input type="checkbox" name="wines[]" value="merlot" <?php if(isset($_POST['wines']) && in_array('merlot', $wines)) ;?>>&nbsp;Merlot</li>
                        <li><input type="checkbox" name="wines[]" value="syrah" <?php if(isset($_POST['wines']) && in_array('syrah', $wines)) ;?>>&nbsp;Syrah</li>
                        <li><input type="checkbox" name="wines[]" value="pinot" <?php if(isset($_POST['wines']) && in_array('pinot', $wines)) ;?>>&nbsp;Pinot Noir</li>
                    </ul>
 
                <label>Region</label>
                    <select name="regions">  <!--will come back once we add sticky-->
                        <option value="" NULL <?php if(isset($_POST['regions']) && $_POST['regions'] == NULL) echo 'selected = "unselected" ';?>>Select One</option>
                        <option value="Pacific" <?php if(isset($_POST['regions']) && $_POST['regions'] == 'Pacific') echo 'selected = "selected" ';?>>Pacific Coast</option>
                        <option value="SW" <?php if(isset($_POST['regions']) && $_POST['regions'] == 'SW') echo 'selected = "selected" ';?>>Southwest</option>
                        <option value="Rockies" <?php if(isset($_POST['regions']) && $_POST['regions'] == 'Rockies') echo 'selected = "selected" ';?>>Rocky Mountains</option>
                        <option value="Midwest" <?php if(isset($_POST['regions']) && $_POST['regions'] == 'Midwest') echo 'selected = "selected" ';?>>Midwest</option>
                        <option value="Southeast" <?php if(isset($_POST['regions']) && $_POST['regions'] == 'Southeast') echo 'selected = "selected" ';?>>Southeast</option>
                        <option value="Mid-Atlantic" <?php if(isset($_POST['regions']) && $_POST['regions'] == 'Mid-Atlantic') echo 'selected = "selected" ';?>>Mid-Atlantic</option>
                        <option value="New England" <?php if(isset($_POST['regions']) && $_POST['regions'] == 'New England') echo 'selected = "selected" ';?>>New England</option>
                    </select>

                <label>Comments</label>
                    <textarea name="comments"><?php if(isset($_POST['comments'])) echo htmlspecialchars( $_POST['comments']) ;?></textarea>

                <label>Privacy</label>
                    <ul> <!--will come back to gender once we add sticky-->
                        <li><input type="radio" name="privacy" value="yes" <?php if(isset($_POST['privacy']) && $_POST['privacy'] == 'yes') echo 'checked = "checked" ';?>>&nbsp;Privacy</li>   
                    </ul>
                    
                <input type="submit" value="send it!">
    </fieldset>
    </form>
</div>
</body>
</html>