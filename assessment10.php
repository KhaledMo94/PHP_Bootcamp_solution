<?php

// Challenge 1
echo rand(11,19);
echo "<br>";
//==================================
//challenge 2

$friends = ["Osama", "Ahmed", "Sayed", "Ibrahim"];

echo $friends[rand(0,count($friends)-1)];
echo "<br>";

//===================================
//challenge 3
$num1 = 11.5; // 11
echo round($num1,0,PHP_ROUND_HALF_ODD);
echo "<br>";

$num2 = 9.4898; // 9.5
echo round($num2,1);
echo "<br>";

$num3 = -7.5; // -7
echo round($num3,0,PHP_ROUND_HALF_ODD);

//===================================
//challenge 4

$ids =[];
for ($i=0;$i<count(filter_list());$i++){
    array_push($ids,filter_id(filter_list()[$i]));
};
echo "<pre>";
print_r(array_combine($ids,filter_list()));
echo "</pre>";

//================================
//challenge 5

$url1 = "http://www.elz ero.org";
$url2 = "http://¥elzero.org";
$url3 = "https://elzero.org";
$url4 = "https://elzero.o¥rg";
$arr = [$url1,$url2,$url3,$url4];

for($i=0;$i<count($arr);$i++){
    echo (filter_var($arr[$i],FILTER_VALIDATE_URL,FILTER_NULL_ON_FAILURE)!==Null) ? "A Valid URL": "Not A Valid URL";
    echo "<br>";
};

// Output
// "Not A Valid URL"
// "Not A Valid URL"
// "A Valid URL"
// "Not A Valid URL"

//===================================
//challenge 6
$url1 = "http://www.elz ero.org";
$url2 = "http://¥elzero.org";
$url3 = "https://elzero.org";
$url4 = "https://elzero.o¥rg";

$arr = [$url1,$url2,$url3,$url4];

for($i=0;$i<count($arr);$i++){
    echo (filter_var($arr[$i],FILTER_SANITIZE_URL));
    echo "<br>";
};

// Output
// http://www.elzero.org
// http://elzero.org
// https://elzero.org
// https://elzero.org

//===================================

