<?php
//str_replace and substr functions!
//substr(string, start, length)

$statement = 'Presently, I am reading the Looming Tower';
echo $statement;
echo '</br>';
echo substr($statement, 0);
echo '</br>';
echo substr($statement, 1);
echo '</br>';
echo substr($statement, 11);
echo '<h2>Now, I would like to display just the words -- I am reading</h2>';
echo '</br>';
echo substr($statement, 11, 12);
echo '<h2>What if i would like to display Tower?</h2>';
//use a negative number the last letter is -1 and so on for the first word (negative number)
//second point starts from the begining again at zero with a positive number
echo substr($statement, -6);
echo '</br>';
echo '<h2>Now for the str_replace function</h2>';

$statement2 = 'Hulu\'s rendition of the Looming Tower is based on the book named the Looming Tower!';
//here we say please replace 'the' with 'The'
echo str_replace('the', 'The', $statement2);
?>