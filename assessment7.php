<?php

//Challenge 1
// Write Function Content Here

function greeting($name , $sex="x"){
    if ($sex === "x"){
        echo "Hello $name";
    }elseif($sex === "Male"){
        echo "Hello Mr $name";
    }elseif($sex === "Female"){
        echo "Hello Miss $name";
    }
}

// Needed Output
echo greeting("Osama", "Male")."<br>"; // Hello Mr Osama
echo greeting("Eman", "Female")."<br>"; // Hello Miss Eman
echo greeting("Sameh")."<br>"; // Hello Sameh

//===============================================

//Challenge 2
//method 1
// function get_arguments(...$all){
//     $res = "";
//     for ($i=0;$i<count($all);$i++){
//         $res.=$all[$i];
//         $res.=" ";
//     }
//     return $res."<br>";
// }
//method2 
function get_arguments(...$all){
    $res = "";
    $items = func_get_args();
    foreach ($items as $item){
        $res .= $item;
        $res.=" ";
    }
    return $res."<br>";
}

// Needed Output
echo get_arguments("Hello", "Elzero", "Web", "School"); // Hello Elzero Web School
echo get_arguments("I", "Love", "PHP"); // I Love PHP


//===========================================
//Challenge 3 
function sum_all(...$nums){
    $res = 0;
    foreach ($nums as $num){
        if ($num === 5){continue;}
        elseif ($num ===10){
            $res+=20;
        }else{
            $res+=$num;
        }
    }
    return $res."<br>";
}
// Needed Output
echo sum_all(10, 12, 5, 6, 6, 10); // 64
echo sum_all(5, 10, 5, 10); // 40
//=============================================
// Challenge 4

function multiply(...$nums){
    $res = 1;
    $items = func_get_args();
    foreach ($items as $item){
        if (gettype($item)=="double"){
            $res *=(int)$item;
        }elseif(gettype($item)=="integer"){
            $res *=$item;
        }
    }
    return $res . "<br>";
}
// Needed Output
echo multiply(10, 20); // 200
echo multiply("A", 10, 30); // 300
echo multiply(100.5, 10, "B"); // 1000

//===============================================
//Challenge 5


function check_status($a, $b, $c) {
    $string="";
    $num = 0;
    $bool ="";
    if (gettype($a)=="string"){
        $string = $a;
    };
    if (gettype($b)=="string"){
        $string = $b;
    };
    if (gettype($c)=="string"){
        $string = $c;
    };
    if (gettype($a)=="integer"){
        $num = $a;
    };
    if (gettype($b)=="integer"){
        $num = $b;
    };
    if (gettype($c)=="integer"){
        $num = $c;
    };
    if (gettype($a)=="boolean"){
        $bool = $a;
    };
    if (gettype($b)=="boolean"){
        $bool = $b;
    };
    if (gettype($c)=="boolean"){
        $bool = $c;
    };
    if ($bool === true){
        return "Hello $string , your age $num ,You Are Available For Hire<br> ";
    }elseif ($bool === false){
        return "Hello $string , your age $num ,You Are Not Available For Hire<br> ";
    }
}
  // Needed Output
  echo check_status("Osama", 38, true); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
  echo check_status(38, "Osama", true); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
  echo check_status(true, 38, "Osama"); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
  echo check_status(false, "Osama", 38); // "Hello Osama, Your Age Is 38, You Are Not Available For Hire"

//=========================================
//challenge 6

// function calculate ($num1 , $num2 , $oper = "a"){
//     if ($oper ==="a"|| $oper ==="add"){
//         return $num1 + $num2;
//     }elseif ($oper==="s" || $oper ==="subtract"){
//         return $num1 - $num2;
//     }elseif ($oper ==="m" || $oper ==="multiply"){
//         return $num1*$num2;
//     }else{
//         return "This calculation not Exist";
//     }
// }

// // Needed Output
// echo calculate(10, 20); // 30
// echo calculate(10, 20, "a"); // 30
// echo calculate(10, 20, "s"); // -10
// echo calculate(10, 20, "subtract"); // -10
// echo calculate(10, 20, "multiply"); // 200
// echo calculate(10, 20, "m"); // 200

//=============================================
//challenge 7
echo "<br>";
function calculate(int $num_one, int $num_two ):float {
    return $num_one + $num_two;
}

  echo calculate(20, 10); // 30
echo "<br>";
  echo gettype(calculate(20, 10)); // Double

//====================================================

// challenge 8 
$message = "Hello";

$$message = function($name){
    return "Hello $name";
};

echo $Hello("Osama"); // Hello Osama
echo "<br>";


//===================================================
//Challenge 9 

$greet = function ($n){
    return "Greeting $n";
};

// Needed Output
echo $greet("Osama"); // Greetings Osama
echo "<br>";


