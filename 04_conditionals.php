<?php

/* ---- Conditionals & Operators ---- */

/* ------------ Operators ----------- */

/*
  < Less than
  > Greater than
  <= Less than or equal to
  >= Greater than or equal to
  == Equal to
  === Identical to
  != Not equal to
  !== Not identical to
*/

/* ---------- If Statements --------- */

/*
** If Statement Syntax
if (condition) {
  // code to be executed if condition is true
}
*/

echo '<br/>';

$age = 15;
$has_id = true;

if ($age >= 18 && $has_id) {
  echo 'You are old enough to vote';
} elseif ($age >= 18 && !$has_id) {
  echo 'visit registrar office for a national ID';
} elseif ($age < 18 && $has_id) {
  echo 'Call 911 immediately!!';
} else {
  echo 'You are to young to drive';
}

// Dates
$your_name = 'Linda';
$today = date("F j, Y, g:i a");
echo '<br/>';
echo ($today);

$time_of_the_day = date('H');

if ($time_of_the_day < 12) {
  echo 'Good morning' . $your_name . 'have a blessed day!';
} elseif ($time_of_the_day > 12 && $time_of_the_day < 17) {
  echo 'Good Afternoon ' . $your_name . 'have a wonderful afternoon!';
} else {
  echo "Have a good evening and night ' . $your_name";
}

echo '<br/>';
echo '<br/>';

/*checking if a variable is empty */
// the isset () function will generate a warning or e-notice when the variable foes not exist.The empty () function will not generate  any warning or e-notice when the varialbe does not exist.

echo '<br/>';
echo '<br/>';

$posts = [];
$posts = [1];
$statuses = [];

if (!empty($posts[0])) {
  echo $posts[0];
} else {
  echo "hakuna kakitu!";
}

echo '<br/>';

if (!isset($statuses)) {
  echo $statuses[0];
} else {
  echo 'meme lord amelala!';
}
echo '<br/>';

/*ternary operator*/

echo '<br/>';

$first_post = !empty($posts[0]) ? $posts[0] : 'Hakuna kakitu buana!';
echo $first_post;

echo '<br/>';
echo '<br/>';


$second_post = !empty($posts[1]) ?? null;


// coalsecing operator ?? in php 7.4
echo $second_post;

/*switch statements*/

$fav_color = 'jungle green';

switch ($fav_color) {
  case 'jungle green':
    echo "Your favourite color is $fav_color!";
    break;
  case 'Red':
    echo 'Your favourite color is Red!';
    break;
  case 'green':
    echo 'Your favourite color is Green!';
    break;
  default:
    echo 'Your favourite color is none of the RGBs!';
}
