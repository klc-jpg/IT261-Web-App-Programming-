<?php
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

ob_start();

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

    if(empty($_POST['phone'])) {
        $phone_err = 'Please add your phone number';
    } else {
        $phone = $_POST['phone'];
    }

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
        $my_return = '';
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
    $subject = 'Test Email on ' .date('m/d/y, h:i A');
    $body = '
    First Name : '.$first_name.' '.PHP_EOL.'
    Last Name : '.$last_name.' '.PHP_EOL.'
    Email : '.$email.' '.PHP_EOL.'
    Gender : '.$gender.' '.PHP_EOL.'
    Phone : '.$phone.' '.PHP_EOL.'
    Region : '.$regions.' '.PHP_EOL.'
    Wines : '.my_wines($wines).' '.PHP_EOL.'
    Comments : '.$comments.' '.PHP_EOL.' ';

    $headers = array(
        'From' => 'noreply@kellychapman.xyz'
    );
  
    if(!empty($first_name && $last_name && $email && $gender && $regions && $wines && $comments)) {
        mail($to, $subject, $body, $headers); 
        header('Location:thx.php');
        }// end !empty if statement
    }//end isset
}// end server request method
?>
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
                    <span class="error"><?php echo $first_name_err ;?></span>
                        <input type="text" name="first_name" value="<?php if(isset($_POST['first_name'])) echo htmlspecialchars($_POST['first_name']) ;?>">
                   
                <label>Last Name</label>
                    <span class="error"><?php echo $last_name_err ;?></span>
                        <input type="text" name="last_name" value="<?php if(isset($_POST['last_name'])) echo htmlspecialchars($_POST['last_name']) ;?>">
                   
                <label>Email</label>
                    <span class="error"><?php echo $email_err ;?></span>
                        <input type="email" name="email" value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']) ;?>">
               
                <label>Gender</label>
                    <span class="error"><?php echo $gender_err ;?></span>   
                        <ul> 
                            <li><input type="radio" name="gender" value="female" <?php if(isset($_POST['gender']) && $_POST['gender'] == 'female') echo 'checked = "checked" ';?>>&nbsp;Female</li>
                            <li><input type="radio" name="gender" value="male" <?php if(isset($_POST['gender']) && $_POST['gender'] == 'male') echo 'checked = "checked" ';?>>&nbsp;Male</li>
                            <li><input type="radio" name="gender" value="neither" <?php if(isset($_POST['gender']) && $_POST['gender'] == 'neither') echo 'checked = "checked" ';?>>&nbsp;Neither</li>    
                        </ul>
             
                <label>Phone</label>
                    <span class="error"><?php echo $phone_err ;?></span> 
                        <input type="tel" name="phone" value="<?php if(isset($_POST['phone'])) echo htmlspecialchars($_POST['phone']) ;?>">
                 
                <label>Favorite Wines (check all that apply)</label>
                    <span class="error"><?php echo $wines_err ;?></span> 
                        <ul> 
                            <li><input type="checkbox" name="wines[]" value="cab" <?php if(isset($_POST['wines']) && in_array('cab', $wines)) echo 'checked = "checked" ' ;?>>&nbsp;Cabernet</li>
                            <li><input type="checkbox" name="wines[]" value="merlot" <?php if(isset($_POST['wines']) && in_array('merlot', $wines)) echo 'checked = "checked" ';?>>&nbsp;Merlot</li>
                            <li><input type="checkbox" name="wines[]" value="syrah" <?php if(isset($_POST['wines']) && in_array('syrah', $wines)) echo 'checked = "checked" ';?>>&nbsp;Syrah</li>
                            <li><input type="checkbox" name="wines[]" value="pinot" <?php if(isset($_POST['wines']) && in_array('pinot', $wines)) echo 'checked = "checked" ';?>>&nbsp;Pinot Noir</li>
                        </ul>
 
                <label>Region</label>
                    <span class="error"><?php echo $regions_err ;?></span> 
                        <select name="regions"> 
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
                    <span class="error"><?php echo $comment_err ;?></span> 
                        <textarea name="comments"><?php if(isset($_POST['comments'])) echo htmlspecialchars( $_POST['comments']) ;?></textarea>

                <label>Privacy Policy</label>
                    <span class="error"><?php echo $privacy_err ;?></span> 
                        <ul> 
                            <li><input type="radio" name="privacy" value="yes" <?php if(isset($_POST['privacy']) && $_POST['privacy'] == 'yes') echo 'checked = "checked" ';?>>&nbsp;Agree</li>   
                        </ul>

                <input type="submit" value="Send It!">
                <input type="button" onclick="window.location.href='<?php echo $_SERVER['PHP_SELF'] ;?>'" value="Reset">
    </fieldset>
    </form>
</div>
</body>
</html>