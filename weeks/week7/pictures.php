<?php
$people = array();
$people['Donald_Trump'] = 'trump_Former President from NY.';
$people['Joe_Biden'] = 'biden_President from PA.';
$people['Hilary_Clinton'] = 'clint_Secretary from NY.';
$people['Bernie_Sanders'] = 'sande_Senator from VT.';
$people['Elizabeth_Warren'] = 'warre_Senator from MA.';
$people['Kamala_Harris'] = 'harri_Vice President from CA.';
$people['Cory_Booker'] = 'booke_Senator from NJ.';
$people['Andrew_Yang'] = 'ayang_Entrepreneur from NY.';
$people['Pete_Buttigieg'] = 'butti_Transportation Secretary from IN.';
$people['Amy_Klobuchar'] = 'klobu_Senator from MN.';
$people['Julian_Castro'] = 'castr_Former Housing/Urban from TX.';
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
    <title>Week Seven Class Exercise -- Pictures</title>
    <style>
* {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}   

#wrapper {
    max-width: 1200px;
    margin: 30px auto;
    background: #FBF7F4;
}

table {
    border: 3px solid #392e3a;
    border-collapse: collapse;
    width: 800px;
    margin: 10px auto;
}

th, td {
    border: 3px solid #392e3a;
    padding: 8px;
}

h2,td { 
    text-align: center;
    font-family: 'Inter Tight', sans-serif;
    font-weight: 700;
    font-style: italic;
    color: #392e3a;
}

td {
    list-style-type: none;
    color: #392e3a;
    font-family: 'Inter Tight', sans-serif;
    font-weight: 400;
}
</style>
</head>
<body>
    <div id="wrapper">
        <h2>2020 PRESIDENTIAL PRIMARIES</h2>
            <table>
            <?php foreach($people as $name => $image):?>
                <tr>
                    <td><img src="images/<?php echo substr($image, 0, 5);?>.jpg" alt="<?php echo str_replace('_',' ', $name);?>"></td>
                    <td><?php echo str_replace('_',' ', $name);?></td>
                    <td><?php echo substr($image, 6);?></td>
                </tr>
            <?php endforeach;?>
        </table>
    </div>
</body>
</html>
