
<?php 
// Replace ? With Arithmetic Operators
// echo 10 + 20 - 15 / 3 + 190 + 10 + 400; // 0

//=================================
//Challenge 2

$a = "10";

echo (int)$a;
echo '<br>';
echo gettype((int)$a);

echo '<br>';
echo (integer)$a;
echo '<br>';
echo gettype((integer)$a);
echo '<br>';
echo +$a;
echo '<br>';
echo gettype(+$a);
echo '<br>';
echo -(-$a);
echo '<br>';
echo gettype(-(-$a));

echo '<br>';
echo intval($a);
echo '<br>';
echo gettype(intval($a));
echo '<br>';

//======================================
//challenge 3
$a = 10;
$b = 20;
echo $a<=>$b;
echo '<br>';

// Needed Output
// -1

//=========================================
//challenge 4
$a = 10;
$b = 20;
$c = 15;

var_dump($a < $b); // True
var_dump($c > $a); // True
var_dump($a < $b); // True
var_dump($a <= $b); // True
var_dump($a <= $c); // True
var_dump($a =! $c); // True
var_dump(gettype($a) != gettype($b)); // True
var_dump(gettype($a) !== gettype($b)); // True
var_dump(gettype((float) $a) != gettype($b)); // True

//==================================================
echo '<br>';

//Challenge 5
$points = 10;

$points++;
$points++;
$points++;

echo '<br>';

echo $points; // 13

$points--;
$points--;
$points--;
$points--;
$points--;


echo '<br>';

//================================================
//challenge 6

echo $points; // 8;
echo '<br>';

$a = "Elzero";
$b = "Web";
$c = "School";

// Method One
$d = "$a $b $c";

// // Method Two
$d = $a." ".$b." ".$c;

// // Method Three
$d = "${a} ${b} ${c}";

// Method Four
$d="";
$d.=$a;
$d.=$b;
$d.=$c;
echo '<br>';

echo $d; // Elzero Web School
//================================================

//challenge7

$a = 10;
$b = 20;

// echo ($a + $b) * ($a + $b + $a) * $a * $a; // 10000

//==================================================

//challenge 8

// Code 1
echo '<br>';
$i = @$j || die("Error Customizing");
echo '<br>';
echo '<br>';

// Code 2
$f = @file("Not_A_File") or die("Error Customizing");

// Code 3
(@include("Not_A_File") )or die("Error Customizing");