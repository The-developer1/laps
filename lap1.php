//Arithmetic Operators
<?php
$a = 10;
$b = 5;

echo $a + $b; // Addition: 15
echo $a - $b; // Subtraction: 5
echo $a * $b; // Multiplication: 50
echo $a / $b; // Division: 2
echo $a % $b; // Modulus: 0
?>
//Assignment Operators
<?php
$a = 10;
$a += 5; // $a = $a + 5; $a is now 15
$a -= 3; // $a = $a - 3; $a is now 12
$a *= 2; // $a = $a * 2; $a is now 24
$a /= 4; // $a = $a / 4; $a is now 6
?>
//Comparison Operators
<?php
$a = 5;
$b = 10;

var_dump($a == $b);  // Equal to: false
var_dump($a != $b);  // Not equal: true
var_dump($a < $b);   // Less than: true
var_dump($a > $b);   // Greater than: false
var_dump($a <= $b);  // Less than or equal to: true
var_dump($a >= $b);  // Greater than or equal to: false
?>
//Increment/Decrement Operators
<?php
$a = 5;

$a++; // Increment: $a is now 6
echo $a;

$a--; // Decrement: $a is now 5
echo $a;
?>
//Logical Operators
<?php
$a = true;
$b = false;

var_dump($a && $b); // Logical AND: false
var_dump($a || $b); // Logical OR: true
var_dump(!$a);      // Logical NOT: false
?>
//String Operators
<?php
$a = "Hello, ";
$b = "world!";

echo $a . $b; // Concatenation: "Hello, world!"
$a .= $b;     // Concatenation assignment: $a is now "Hello, world!"
?>
//Array Operators
<?php
$array1 = ['a' => 1, 'b' => 2];
$array2 = ['b' => 3, 'c' => 4];

$result = $array1 + $array2; // Union: ['a' => 1, 'b' => 2, 'c' => 4]
var_dump($result);

var_dump($array1 == $array2); // Equality: false
var_dump($array1 === $array2); // Identity: false
?>
//Conditional Assignment Operators
<?php
$a = 5;
$b = ($a > 10) ? 'Greater' : 'Less or Equal'; // Ternary operator
echo $b; // Outputs: Less or Equal
?>