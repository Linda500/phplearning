<?php
/* ---------- String Functions -------- */
/*
  Functions to work with strings
  https://www.php.net/manual/en/ref.strings.php
*/



// Get the length of a string
echo '<br>';
$string = "hello this is hypertext preprocessor?";
echo strlen($string);
echo '<br>';

// Find the position of the first occurrence of a substring in a string

echo strpos($string ,'r' );

// Find the position of the last occurrence of a substring in a string
echo '<br>';
echo strrpos($string, 'o');

// Reverse a string
echo '<br>';

echo strrev($string);

// Convert all characters to lowercase
echo '<br>';

echo strtolower($string);

// Convert all characters to uppercase
echo '<br>';

echo strtoupper($string);

// Uppercase the first character of each word
echo '<br>';
echo ucwords($string);


// String replace
echo '<br>';

echo str_replace('this','what',$string);
// Return portion of a string specified by the offset and length
echo '<br>';

echo substr($string, 0,5);

echo '<br>';

echo substr($string , 2);
// Starts with
echo '<br>';

if (str_starts_with($string ,'Hello')){
  echo 'YES!';
}else {
  echo 'NO it doesn\'t';
}

// Ends with
echo '<br/>';

if (str_ends_with($string ,'preprocessor?')){
  echo 'YES!';
}else {
  echo 'NO it doesn\'t';
}
// HTML Entities
//echo htmlentities('<scrpit>alert ("you are dead meat!") </scrpit>');
echo '<br/>';
echo '<br/>';


$new_string = '<script>alert ("you are dead meat!") </script>';

echo htmlentities($new_string);

// Formatted Strings - useful when you have outside data


// Different specifiers for different data types
 
 echo '<br/>';
 echo '<br/>';

  printf('%s is a %s','Linda','brilliant lady');

//float
echo '<br/>';
echo '<br/>';

printf('1 + 5 = %f', 1 + 5);