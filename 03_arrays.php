<?php
/* ----------- Arrrays ----------- */

/*
  If you need to store multiple values, you can use arrays. Arrays hold "elements"
*/
// simple array of strings

echo '<br/>';
echo '<br/>';

$colors = ['red','green','blue','purple'];

var_dump($colors);

echo '<br/>';
echo '<br/>';


echo $colors[0];

echo '<br/>';

// simple arrays of numbers

$numbers = [1,69,4,67,23,79];

echo '<br/>';
var_dump($numbers);

echo '<br/>';
echo $numbers[5];


$fruits = array('Mangoes','Apples','Bananas');
echo '<br/>';
echo '<br/>';

var_export($fruits);

echo '<br/>';
echo '<br/>';
print_r($fruits);


//  Associative Arrays
echo '<br/>';
echo '<br/>';


$new_colors =[
1 => 'cyan',
2 => 'magenta',
3 => 'crimson red',
4 => 'corn flower blue'

];

var_export($new_colors);

$new_streams =[

'form_one' => 'cyan',
 'form_two'=> 'magenta',
 'form _three'=> 'crimson red',
'form_four' => 'corn flower blue'
];

$new_numbers = array(12,45,34,5,7);
echo '<br/>';
echo '<br/>';

$results_adds = $numbers[2] + $new_numbers[3];
echo $results_adds;

/*Multi-dimesnional arrays   
store data in a table format*/

//single person
echo '<br/>';
echo '<br/>';

$person = [
  'first_name' => 'John',
  'last_name' => 'smith',
  'email' =>'johnsmith@gmail.com',
  'age' => 19
];
 
$person2 = [
  'first_name' => 'John',
  'last_name' => 'smith',
  'email' =>'johnsmith@gmail.com',
  'age' => 20
];

//array of people

$people = [
  $person = [
    'first_name' => 'John',
    'last_name' => 'smith',
    'email' =>'johnsmith@gmail.com',
    'age' => 19
  ],
   
  $person2 = [
    'first_name' => 'John',
    'last_name' => 'smith',
    'email' =>'johnsmith@gmail.com',
    'age' => 20
  ]
  ];

var_dump($people);

echo '<br/>';
echo '<br/>';

//var_dump($people);

echo $people [0] ['first_name'];
echo '<br/>';

echo $people [1] ['email'];

echo '<br/>';
echo '<br/>';


/*ENCODE ON JSON*/

var_dump(json_encode($people));

/*JSON DECODE*/

echo '<br/>';

$jsonob ='{"first_name":"John","last_name":"smith","email":"johnsmith@gmail.com","age":19}';
var_dump(json_decode($jsonob));