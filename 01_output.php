<?php
/* -------- Output & Comments ------- */

/*
  A .php file running on a server, can output both HTML and PHP code. There are multiple functions that can be used to output data to the browser.
*/

echo 'Hello, World!';
echo '<br/>';
echo 123;
echo '<br/>';


// print is slower 
echo '<br/>';
print 'Hello world';

// print_r gives more info usually for arrays
echo '<br/>';
print_r('What\'s up');

// var_dump - gives more info compared to print_r

echo '<br/>';
var_dump('Hello');

echo '<br/>';
$names ="My name is Linda";
var_dump($names);

// escaping char
echo '<br/>';
echo 'What\'s up';

/* 
This is a multiple line comments
*/
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PhP inside html</title>

</head>

<body>
    <p><?php echo 'This is php inside HTML5'; ?></p>


    <br>
    <?php 


echo 5+8;



?>
</body>

</html>