<?php
//Challenge 1
// $a = 100;
// $b = 200;
// $c = 100;

/*
    Check That:
    Variable "b" Larger Than Variable "a"
    Variable "a" Identical To Variable "c"
    Variable "a" Plus Variable "c" Identical To Variable "b"
*/
// if($b>$a && $a === $c && ($a+$c)===$b){
// echo "Yes";
// };

// echo '<br>' ;

//================================================================

//Challenge 2

// Test Case 1
// $a = 100;
// $b = 200;
// $c = 300;
// A Is Not Larger Than B Or C

// Test Case 2
// $a = 200;
// $b = 100;
// $c = 300;
// A Is Larger Than B

// Test Case 3
// $a = 200;
// $b = 200;
// $c = 100;

// A Is Larger Than c

// if ($a>$b){
//     echo "A Is Larger Than B";
// }elseif($a>$c){
//     echo "A Is Larger Than C";
// }elseif($a<$b && $a<$c){
//     echo "A Is Not Larger Than B Or C";
// }


//==================================================
//challenge 3
?>
<!-- <form action="" method="POST">
    <input type="text" name="user">
    <input type="submit" value="Send">
</form> -->
<?php
// $admins = ["Osama", "Ahmed", "Sayed"];

// // Input Name "Osama"

// // Needed Output
// // "The Request Method Is Post And Username Is Osama"
// // "This Username Osama Is Admin"

// if($_SERVER['REQUEST_METHOD'] == "POST"){
//     if (in_array($_POST['user'],$admins)){
//         echo "The Request Method Is Post And Username Is $_POST[user] <br>";
//         echo "This Username $_POST[user] Is Admin";
//     }
// }
//======================================================

//challenge 4

// $a = 30;
// $b = 20;
// $c = 10;

// echo ($a + $b === $c) ? "A + B = C" : (($a + $c === $b) ? "A + C = B" :( ($b + $c === $a) ? "B + C = A" : "The End"));
// Output
// "B + C = A"

//============================================
//Challenge 5
$name = "Osama";
$age = 40;
$country = "Egypt";

if ($age > 18 && gettype($name) === "string" && $country === "Egypt"){
    echo "The Age Is Good To Go<br>";
    echo "The Name Is Good To Go<br>";
    echo "The Country Is Good To Go<br>";
}

// Needed Output
// "The Age Is Good To Go"
// "The Name Is Good To Go"
// "The Country Is Good To Go"

//================================================
//Challenge 6

$genre = "Hack And Slash";

switch($genre):
    case "RPG":
        echo "I Recommend Ys Games";
        break;
    case "Hack And Slash":
        echo "I Recommend Castlevania Games";
        break;
    case "FPS":
        echo "I Recommend Uncharted Games";
        break;
    case "Platform":
    case "Puzzle":
        echo "I Recommend Megaman Games";
        break;
    default:
    echo "I Recommend Shadow Of Mordor And Shadow Of War";
endswitch;

echo "<br>";

// Needed Output
// "I Recommend Castlevania Games"

//===============================================
// Challenge 7

$num_one = 23;
$num_two = 5;
$op = "*";

switch ($op) {
    case '+':
        echo $num_one+$num_two;
        break;
    case '-':
        echo $num_one-$num_two;
        break;
    case '/':
        echo $num_one/$num_two;
        break;
    case '*':
        echo $num_one*$num_two;
        break;
    
    default:
        echo "Unknown Operator";
        break;
};

//==============================================
//challenge 8

$day = "Sat";

if($day ==="Sat" || $day ==="Sun"|| $day ==="Mon" ){
    echo "We Are Open All The Day";
}elseif ($day ==="Tue" || $day ==="Wed"){
    echo "We Are Open From 08:12";
}elseif ($day ==="Thu" || $day ==="Fri"){
    echo "We Are Closed";
}else {
    echo "Unknown Day";
}
