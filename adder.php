<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Adder Assignment</title>
</head>
<body> 
<h1>Adder.php</h1> 
<form action="" method="post">
    <fieldset>
        <label>Enter the first number:</label> 
        <input type="text" name="num1">

        <label>Enter the second number:</label> 
        <input type="text" name="num2"> 

        <input type="submit" value="Add Em!!"> 
    </fieldset>
    <p><a href="">Reset page</a></p>
</form>
<?php 
if(isset($_POST['num1'],
        $_POST['num2'])) {
            if(empty($_POST['num1'] &&
            $_POST['num2'])) {
            echo '<p>All fields are required please</p>'; 
                }else{    
                $num1 = $_POST['num1']; 
                $num2 = $_POST['num2'];
                $num1_int = intval($num1);
                $num2_int = intval($num2);
                $myTotal = $num1_int + $num2_int; 
                echo '<h2>You added '.$num1.' and '.$num2.'</h2> 
                <p>And the answer is: <span style="color:red;"> '.$myTotal.'!</span></p>';
        } //end else
    }
?>
 </body> 
</html>

<!-- add missing comma line 3  $_POST--->
<!-- move closing parenthesis and open bracket from line 3 to line 4 -->
<!-- add $_POST['num2'] to line 4           -->
<!-- remove extra space after 'if' on line 3        -->
<!--line 3: bring up one line -->
<!-- remove subtraction sign from equation on line 7         -->
<!-- line 8: delete double quotes wrapping $num1 -->
<!-- line 8: delete extra spaces on both sides of $num1 -->
<!-- line 8: add single quotes to $num1 and make a join '..'        -->
<!-- line 8: add single quotes around .$num2.       -->
<!-- line 8: delete '"';           -->
<!-- line 8: add </h2> tag         -->
<!-- line 10: remove echo         -->
<!-- line 10: remove '        -->
<!-- line 10: add <a> tag        -->
<!-- line 10: remove < around <style         -->
<!-- line 10: remove > from opening <a>         -->
<!-- line 10: remove >" on the right of color:red;        -->
<!-------------------- line 10: add href="" to the right of color:red;          -->
<!-- line 10: add '. to the left of $myTotal          -->
<!-- line 10: remove extra space on the right of $myTotal         -->
<!-- line 10: remove " on the right of $myTotal       -->
<!-- line 10: add ' on the right of $myTotal           -->
<!-- line 10: remove "          -->
<!-- line 10: remove ;          -->
<!-- line 10: add </a>           -->
<!-- line 11: remove echo          -->
<!-- line 11: remove '         -->
<!-- line 11: add </p>         -->
<!-- line 11: add ;       -->
<!-- lines 1-11: cut these and paste on line 25           -->
<!-- line 1: add <!DOCTYPE html>           -->
<!-- line 2: <html lang="en">           -->
<!-- line 3 delete extra <html>          -->
<!-- line 4: add <meta charset="UTF-8">           -->
<!-- line 5: add <meta http-equiv="X-UA-Compatible" content="IE=edge">     -->
<!-- line 6: add <meta name="viewport" content="width=device-width, initial-scale=1.0">          -->
<!-- lines 8-10: remove <style></style>          -->
<!-- line 11: bring </head> up one line          -->
<!-- line 10: remove <\form           -->
<!-- line 10: remove action="">           -->
<!-- line 11: add <form action="" method="post">          -->
<!-- line 12: add <fieldset>           -->
<!-- line 13: add <label>          -->
<!-- line 13: delete <br>           -->
<!-- line 13: move <input type="text" name="Num1"> down one line          -->
<!-- line 14: add space below          -->
<!-- line 14: delete </label>          -->
<!-- line 14: cut => Enter the second number:<input type="text" name="num2"><br>            -->
<!-- line 16: paste => Enter the second number:<input type="text" name="num2"><br>            -->
<!-- line 16: delete <br>          --> 
<!-- line 16: add <label></label>        -->
<!-- line 16: cut => <input type="text" name="num2"><br>           -->
<!-- line 17: paste=> <input type="text" name="num2"><br>           -->
<!-- line 17: delete <br>          -->
<!-- line 17: cut => <input type="submit" value="Add Em!!> </form>           -->
<!-- line 18: add space          -->
<!-- line 19: paste => <input type="submit" value="Add Em!!> </form>           -->
<!-- line 19: delete </form>           -->
<!-- line 19: add closing " to value          -->
<!-- line 20: add </fieldset>          -->
<!-- line 30: cut => <p><a href="">Reset page</a></p>        -->
<!-- line 21: paste =><p><a href="">Reset page</a></p>           -->
<!-- line 22: add </form>         -->
<!-- line 32: cut => ';           -->
<!-- line 31: paste => ';             -->
<!-- line 30: delete <br>           -->
<!-- line 30: add: after 'is'          -->
<!-- line 31: cut => <a style="color:red;" '.$myTotal.'!</p> ';          -->
<!-- line 30: paste => <a style="color:red;" '.$myTotal.'!</p> ';          -->
<!-- line 30: add </a>          -->
<!-- line 30: delete <a></a>          -->
<!-- line 30: add <span></span>          -->
<!-- line 33: move } ?> up two lines          -->
<!-- line 35: move </body> </html>  up two lines         -->
<!-- line 33: delete => ';{?>           -->
<!-- line 24: add => if(isset($_POST['num1'],      -->
<!-- line 25: add => $_POST['num2'])) {          -->
<!-- line 26: add => if(empty($_POST['num1'] &&         -->
<!-- line 27: add => $_POST['num2'])) {          -->
<!-- line 28: add => echo '<p>All fields are required please</p>';        -->
<!-- line 29: add => }else{            -->
<!-- line 30: add => $num1 = $_POST['num1'];           -->
<!-- line 31: add => $num2 = $_POST['num2'];          -->
<!-- line 32: add => $num1_int = intval($num1);         -->
<!-- line 33: add => $num2_int = intval($num2);          -->
<!-- line 34: add => $myTotal = $num1_int + $num2_int;            -->
<!-- line 35: add => echo '<h2>You added '.$num1.' and '.$num2.'</h2>            -->
<!-- line 36: add => <p>And the answer is: <span style="color:red;"> '.$myTotal.'!</span></p>';           -->
<!-- line 37: add => } //end else          -->
<!-- line 38: add => }          -->
<!-- line 39: add => ?>}          -->



               
              
               
              
                
      
   




