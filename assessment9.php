<?php

//Challenge1

// $friends = [
//     "AG" => "Ahmed Gamal",
//     "OM" => "Osama Mohamed",
//     "MG" => "Mahmoud Gamal",
//     "AS" => "Ahmed Samy",
//     "FA" => "Farid Ahmed",
//     "SM" => "Sayed Mohamed"];


// echo "<pre>";
// print_r(array_chunk(array_change_key_case($friends),2,true));
// echo "</pre>";

// Output
//   Array
//   (
//     [0] => Array
//       (
//         [ag] => Ahmed Gamal
//         [om] => Osama Mohamed
//       )
//     [1] => Array
//       (
//         [mg] => Mahmoud Gamal
//         [as] => Ahmed Samy
//       )
//     [2] => Array
//       (
//         [fa] => Farid Ahmed
//         [sm] => Sayed Mohamed
//       )
//   )
//===================================================

//Challenge 2
// $codes = ["H", "C", "J"];
// $means = ["HTML", "CSS", "JavaScript"];
// echo "<pre>";
// print_r(array_combine($codes,$means));
// echo "</pre>";

// Output
// Array
// (
//   [h] => HTML
//   [c] => CSS
//   [j] => JavaScript
// )

//========================================================
//Challenge 3


// $friends = [
//     "Ahmed Gamal" => "AG",
//     "Osama Mohamed" => "OM",
//     "Mahmoud Gamal" => "MG",
//     "Ahmed Samy" => "AS"
//     ];
    
// echo "<pre>";
// print_r(array_change_key_case(array_flip(array_reverse($friends))));
// echo "</pre>";


  // Output
//   Array
//   (
//     [as] => Ahmed Samy
//     [mg] => Mahmoud Gamal
//     [om] => Osama Mohamed
//     [ag] => Ahmed Gamal
//   )

//=============================================

//Challenge 4

// $nums = [10, 20, 30];

// // Method 1
// echo array_reduce($nums,function($carry,$item){
//     return $carry+$item;
// }) . "<br>";

// // method 2 
// $res = 0;
// for($i=0 ; $i<count($nums);$i++){
//     $res+=$nums[$i];
// }
// echo $res ."<br>";
// Output
// 60
// 60

//===================================================

//Challenge 5

// $nums = [5, 10, 20, 5, 30, 40];
// // echo "<pre>";
// print_r(array_reduce(array_filter($nums,function($num){
//     return $num != 5;
// }),function($c,$i){
//     return $c+$i;
// }));
// echo "</pre>";



// Output
// 100
//===================================================

//challenge 6
// $chars = ["A", "B", "C", "D", "E"];
// $char = "@@";
// $zero = 0;
// echo "<pre>";
// print_r(array_pad($chars,(count($chars)*strlen($char)),$char[$zero]));
// echo "</pre>";

// Output
// Array
// (
//   [0] => A
//   [1] => B
//   [2] => C
//   [3] => D
//   [4] => E
//   [5] => @
//   [6] => @
//   [7] => @
//   [8] => @
//   [9] => @
// )

//======================================================
//challenge 7

// $names = ["Osama", "Ahmed", "Sayed", "Mahmoud", "Ali"];

// next($names);
// next($names);

// echo current($names) . "<br>"; // "Sayed"

// end($names);

// echo current($names) . "<br>"; // "Ali"

// reset($names);

// echo current($names) . "<br>"; // "Osama"

// end($names);
// prev($names);

// echo current($names) . "<br>"; // "Mahmoud"

//============================================
//Challenge 8

// $chars = ["A", "B", "C"];
//method 1
// $chars[]="D";

//method 2
// $chars[3]="D";

//method 3
// $chars = array_pad($chars,4,"D");

//method 4
// array_push($chars,"D");



// echo '<pre>';
// print_r($chars);
// echo '</pre>';


// Output
// Array
// (
//   [0] => A
//   [1] => B
//   [2] => C
//   [3] => D
// )

//============================================

//Challenge 9
// $nums = [1, 2, 3, 4, 5, 6];

// $chars = array_slice($nums,-5,-2);

// echo '<pre>';
// print_r($chars);
// echo '</pre>';
// // Output
// Array
// (
//   [0] => 2
//   [1] => 3
//   [2] => 4
// )

//====================================================

//challenge 10

// $mix = [1, 2, 3, "A", "B", "C", 7, 8, 9];
// $nums = [4, 5, 6];
// array_splice($mix,count($nums),count($nums),$nums);
// echo '<pre>';
// print_r($mix);
// echo '</pre>';


// Output
// Array
// (
//   [0] => 1
//   [1] => 2
//   [2] => 3
//   [3] => 4
//   [4] => 5
//   [5] => 6
//   [6] => 7
//   [7] => 8
//   [8] => 9
// )

//====================================================
//challenge 11

// $arr = ["A", "B", "C", "D", "E"];
// $arr[]="the end";
// $i=0;
// while(true){
//     if ($arr[$i]==="the end"){
//         break;
//     }
//     $i++;
// }
// echo $i ."<br>";
// Output
// 5

//====================================================
//Challenge 12

// $nums = [11, 2, 10, 7, 20, 50];
// $res = 0;
// foreach ($nums as $num){
//     $res+=$num;
// }
// echo $res ."<br>";
// Output
// 100

//====================================================
//challenge 13

// $nums = [10, 100, -20, 50, 30];

// echo array_reduce($nums,function($carry , $item){
//     return $carry > $item ? $carry : $item;
// });

// Output
// 100
//=================================================
//challenge 14 
// echo "<br>";
// $nums = [10, 100, -20, 50, 30]; 
// $min = array_reduce($nums, function($carry, $i) {
//     if (is_numeric($carry) && $i > $carry ) {
//         return $carry;
//     }
//     return $i;
// });
// echo $min;
//=======================================================
// echo "<br>";

// //challenge 15
// $chars = ["o", "r", "e", "z", "l", "E"];

// echo array_reduce(array_reverse($chars),function($carry,$item){
//     $carry.=$item;
//     return $carry;
// });
// // Output
// // "Elzero"
// echo "<br>";

//===================================================
// Challenge 16
// $mix = ["A", "C", "B", 1, 100, 3, 2, 6, 5, 7];
// $mix = array_filter($mix,function($num){
//     if (is_int($num) && $num%2 ===1){
//         return $num;
//     }
// });
// echo '<pre>';
// print_r(array_splice($mix,0));
// echo '</pre>';


// Output
// Array
// (
//   [0] => 1
//   [1] => 3
//   [2] => 5
//   [3] => 7
// )


//====================================================
//challenge 17
$nums = [1, 2, 3, 4, 5, 6];
$r = [];
$endloop = count($nums);

for($i=0;$i<$endloop;$i++){
    $r = @array_merge($r,array_splice($nums,rand(0,count($nums)-$nums[0]),$nums[0]));
}

// $r=array_splice($nums,rand(0,count($nums)-$nums[0]),$nums[0]);
echo '<pre>';
print_r($r);
echo '</pre>';


//=================================================================
//Challenge 18
$title = "E&z\$r0 W\$b Sch00&";
$title = str_replace(["&","\$","0"],["l","e","o"],$title);
echo $title;
// Output
// "Elzero Web School"


