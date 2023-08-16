<?php 
// Challenge1

// $index = 10;
//using while loop 
// while ($index >=1):
//     echo $index."<br>";
//     $index--;
// endwhile;

// using for loop
// for(;$index<=1;$index--){
//     echo $index."<br>";
// }

//using do while loop

// do {
//     echo $index."<br>";
//     $index--;
// } while ($index >= 1);

//======================================================

//Challenge 2

// $index = 0;
//using for
// for ($index++;$index<=20;$index++):
//     if($index %2===0){
//     echo $index."<br>";
//     }
// endfor;

// using while 
// while ($index <=20){
//     if ($index !==0 && $index%2===0){
//         echo $index."<br>";
//     }
//     $index++;
// }

// using do while 
// do {
//     $index+=2;
//     echo $index."<br>";
// } while ($index <= 20);

//=================================================
//challenge 3

// $num = 2;
// $K = 2;
// $total = 0;
// while ($num < 520) {
//     if($K===2){
//         echo 1 ."<br>";
//         $K++;
//     }elseif($total===0){
//         $num = $num*2;
//         $total++;
//         echo $num ."<br>";
//     }else{
//         $num = $num*2+2;
//         if ($num > 520){
//             break;
//         }
//         echo $num ."<br>";
//     }
// }
//=========================================
//challenge 4

// $start = 10;
// $end = 0;
// $stop = 3;

// for($i=$start;$i>=$stop;$i--){
//     if ($i===10){
//         echo $i."<br>";
//     }else {
//         echo "0".$i."<br>";
//     }
// }

// Needed Output
// 10
// 09
// 08
// 07
// 06
// 05
// 04
// 03

//================================================
//Challenge 5
// $start = 0;
// $mix = [1, 2, 3, "A", "B", "C", 4];

// // // Output
// // 2
// // 3
// // 4

// for($i=$mix[$start];$i<count($mix);$i++){
//     if (gettype($mix[$i])=="integer"){
//         echo $mix[$i]."<br>";
//     }
// }

//======================================================
//challenge 6
// $money = ["Ahmed" => 100, "Sayed" => 150, "Osama" => 100, "Maher" => 250];

// foreach ($money as $name => $value) {
//     echo "<br>The Name Is $name And I Need $value Pound From Him ";
// }

// Output
// "The Name Is Ahmed And I Need 100 Pound From Him"
// "The Name Is Sayed And I Need 150 Pound From Him"
// "The Name Is Osama And I Need 100 Pound From Him"
// "The Name Is Maher And I Need 250 Pound From Him"

// =======================================================

//Challenge 7

// $mix = [1, 2, "A", "B", "C", 3, 4];
// $lskipped =0;
// $nprinted=0;

// for($i=0;$i<count($mix);$i++){
//     if (gettype($mix[$i])=="integer"){
//         echo $mix[$i]."<br>";
//         $nprinted++;
//     }else{
//         $lskipped++;
//     }
// }
// echo "$nprinted Numbers Printed <br>";
// echo "$lskipped Letters Ignored" ;

// Output
// 1
// 2
// 3
// 4
// "4 Numbers Printed"
// "3 Letters Ignored"


//====================================================

//challenge 8

// $nums = [1, 13, 12, 20, 51, 17, 30];
// for ($i=0;$i<count($nums);$i++){
//     echo ($nums[$i]%2===0 ? $nums[$i]/2 ."<br>" :"");
// }

// // Output
// 6
// 10
// 15

//=========================================================

//challenge 9
// $help_num = 3;
// $nums = [4, 5, 6, 1, 2, 3];
// $names = ["Ahmed", "Sayed", "Osama", "Mahmoud", "Gamal"];

// for($i=$nums[$help_num]; $i<$help_num; $i++){
//     echo $names[$i]."<br>";
// }

// Output
// "Sayed"
// "Osama"

//===============================================================

//challenge 10
// $help_num = 4;
// $nums = [2, 4, 5, 6, 10];
// $intial = $help_num-$help_num;
// for ($i=$intial; $i<count($nums);$i++){
//     $diff = $help_num-$i;
//     $res = $nums[$i] + $nums[$help_num-$i];
//     echo "$nums[$i] + $nums[$diff] =".$res."<br>";
// }

// Output
// "2 + 10 = 12"
// "4 + 6 = 10"
// "5 + 5 = 10"
// "6 + 4 = 10"
// "10 + 2 = 12"