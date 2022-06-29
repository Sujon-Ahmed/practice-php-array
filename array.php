<!-- PHP array() Function -->
<!-- 
    
Definition and Usage
----------------------
The array() function is used to create an array.

In PHP, there are three types of arrays:

◻ Indexed arrays - Arrays with numeric index
◻ Associative arrays - Arrays with named keys
◻ Multidimensional arrays - Arrays containing one or more arrays 

Syntax
-------------
Syntax for indexed arrays:
array(value1, value2, value3, etc.)

Syntax for associative arrays: 
array(key=>value,key=>value,key=>value,etc.)

-->

<?php
// $age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
// echo "Peter is " . $age['Peter'] . " years old.";

// indexed arrays example
// $colors = ['red', 'blue', 'black', 'green'];
// $color_length = count($colors);
// for ($i = 0; $i < $color_length; $i++) {
//     echo $colors[$i];
//     echo '<br>';
// }

// associative arrays example
// $person = ['sujon'=>'23', 'riman'=>'20', 'toukir'=>'22'];

// foreach ($person as $man=>$man_age) {
//     echo $man . ' age is ' . $man_age;
//     echo '<br>';
// }

// A two-dimensional array
$cars = [
    ["Volvo", 100, 96],
    ["BMW", 60, 59],
    ["Toyota", 110, 100]
];

echo $cars[0][0] . ": Ordered: " . $cars[0][1] . ". Sold: " . $cars[0][2] . "<br>";
echo $cars[1][0] . ": Ordered: " . $cars[1][1] . ". Sold: " . $cars[1][2] . "<br>";
echo $cars[2][0] . ": Ordered: " . $cars[2][1] . ". Sold: " . $cars[2][2] . "<br>";


?>