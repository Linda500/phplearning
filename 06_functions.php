<?php
/* ------------ Functions ----------- */

/*
** Function Syntax
  function functionName($arg1, $arg2, ...) {
    // code to be executed
  }

  - Functions have their own local scope as opposed to global scope
*/

// {
// echo "<h4 style = color: 'green';> User has been registered! </h4>";
// }
// register_user();



// function multiply  ($num1, $num2){
//   return $num1 * $num2;
// }

// $result =multiply (12,10);
// echo $result;

// Running/calling/invoking a function


echo'<br/>';

// Adding args
function multiply($num1, $num2){
  return $num1 * $num2;
}

// corresponding params
// pass in params
$result = multiply (12,10);
echo $result;


// Returning values


// Adding default values
echo '<br/>';
function modulus($b =10, $c = 3){
  return $b % $c;
}
echo modulus();



// Assigning anonymous functions to variables. Often used for closures and callback functions

$var = function ($x) {
  return pow ($x,3);
};

echo "cube of 3 =" . $var (3);

// Arrow functions
echo '<br/>';
echo '###### ARROW FUNCTIONS ######';

echo '<br/>';
echo '<br/>';

$subtract = fn($n, $m) => $n - $m;
echo $subtract (8,5);