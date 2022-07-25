<?php

/* -------- Loops & Iteration ------- */

/* ------------ For Loop ------------ */

/*
** For Loop Syntax
  for (initialize; condition; increment) {
  // code to be executed
  }
*/



/* ------------ While Loop ------------ */

/*
** While Loop Syntax
  while (condition) {
  // code to be executed
  }
*/




/* ---------- Do While Loop --------- */

/*
** Do While Loop Syntax
  do {
  // code to be executed
  } while (condition);

do...while loop will always execute the block of code once, even if the condition is false.
*/



/* ---------- Foreach Loop ---------- */

/*
** Foreach Loop Syntax
  foreach ($array as $value) {
  // code to be executed
  }
*/

// Loop through an array



// Use the indexes within the loop



// Use the keys within the loop for an associative array

// working with for loop

for($x = 0; $x <= 10; $x++){
  echo " Number: $x <br/>";
}


// working with while loop
echo '####### WHILE #####';
echo '<br/>';
$y = 1;
while ($y <= 5){
  echo "Number: $y <br/>"; $y++;
}


// working with do while loop
echo '###### DO WHILE ##### <br/>';

$a = 1;
do {
  echo "Number: $a <br/>";
  $a++;
}while ($a <= 10);

echo '######### FOR EACH LOOP #########';

$fruits = ['Mangoes','Apples', 'Oranges','Kiwi','Apricot'];
echo '<br/>';
foreach ($fruits as $fruit){
  echo "fruits: $fruit <br/>";
}

// using indexes within loops
echo '######## AS INDEX ####### <br>';

$posts = ['Post one', 'Post two', 'Post three'];

foreach ($posts as $post ){
  echo "${posts} * ${post} <br/>";
}


// use keys for an associative array

echo '######## ASSOCIATIVE ARRAY ######';
echo '<br/>';
echo '<br/>';

$person =[
  'first_name' => 'John',
  'last_name' => 'Smith',
  'email' => 'johnsmith@gmail.com'
];

// get the keys
foreach($person as $key => $val){
  echo "${key} - ${$val} <br/> ";
}