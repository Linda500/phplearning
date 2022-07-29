<?php
/* --------- Array Functions -------- */

/*
  Functions to work with arrays
  https://www.php.net/manual/en/ref.array.php
*/

$fruits =['apple','Kiwi','oranges'];

// get array legnth 
echo '<br/>';

echo count($fruits);
echo '<br/>';

$checking = in_array('apple',$fruits);
var_dump($checking);
echo '<br/>';

// adding to an array
echo '<br/>';
var_dump($checking);

$fruits[] = 'grape';
print_r($fruits);

// array push
echo '<br/>';
echo '<br/>';

array_push($fruits, 'berry','cherry');

print_r($fruits);

echo '<br/>';
echo '<br/>';

// adding array from the beginning

array_unshift($fruits,'apricot');
echo '<br/>';
print_r($fruits);

// removing an item from an array
echo '<br/>';

array_pop($fruits);
print_r($fruits);

echo '<br/>';


array_shift($fruits);
print_r($fruits);

echo '<br/>';

unset($fruits[1]);
print_r($fruits);

echo '<br/>';
echo '<br/>';


// splitting an array into chunks
echo '<br/>';
echo '<br/>';

array_push($fruits , 'avocado','mango','banana');
print_r($fruits);

echo '<br/>';
echo '<br/>';

$fruits[1] = 'vanilla';
print_r($fruits);



$chunks_of_two = array_chunk($fruits, 2);

echo '<br/>';
echo '<br/>';


// print_r($chunks_of_two);

$form2blue = ['a','b','c'];
$form2red = ['d','e','f'];

echo '<br/>';
echo '<br/>';

// merging arrays 

$form2 = array_merge($form2blue,$form2red);
print_r($form2);
echo '<br/>';
echo '<br/>';

//spread function-also used in javascript 
$form2new = [...$form2blue,...$form2red];
//print_r($form2new);

//combine arrays

$colors =['green','yellow','pink'];
$bites =['avocado','banana','cherry'];
echo '<br/>';
echo '<br/>';

$my_fruits = array_combine($colors, $bites);

print_r($my_fruits);


$keys = array_keys($my_fruits);
print_r($keys);

//flip arrays
$flip =array_flip($my_fruits);
print_r($my_fruits);

//create a range of arryas

$numbers = range(1,20);
print_r($numbers);


//map through 


$new_numbers = array_map(function ($number){
return "Number ${number}";
} , $numbers);

print_r($new_numbers);

//filter array

$less_than_10 = array_filter($numbers, fn ($number) => $number <= 10);
print_r($less_than_10);

//array reduce

$sum =array_reduce($numbers, fn($carry, $number) => $carry + $number);

print_r($sum);

//  
























