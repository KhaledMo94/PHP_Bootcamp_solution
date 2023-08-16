<?php
// Challenge 1
echo (int)15.2 + (int)14.7 + (integer)(10.5 + 10.5); // 50
echo'<br>';
echo gettype((int)15.2 +(int) 14.7 +(int)(10.5 + 10.5)); // Integer
echo '<br>';
?>
<?php
//------------------------

//Challenge 2
// 100

// Method One
echo gettype(100);
echo '<br>';
// Method Two
print is_integer(100);
echo '<br>';
// Method Three => Optional
echo is_int(100);
echo '<br>';

//--------------------------
// Challenge 3

echo "Hello \"Elzero\" \\\\ \"\"\" We Love \"\$\$PHP\"";
echo '<br>';

// Needed Output
// Hello "Elzero" \\ """ We Love "$$PHP"

//===========================
//challenge 4
echo nl2br("We \n Love \n Elzero \n Web \n School");

// // Needed Output
// We
// Love
// Elzero
// Web
// School
echo '<br>';
//==========================

//challenge 5

echo nl2br(
<<<'k'
Hello "'Elzero'"
We Love $Programming$
Languages Specially "PHP"
k);
echo '<br>';

//==================

//challenge 6

$something = "Programming";

echo <<<code
Hello \PHP\
We Love $something
code;

echo '<br>';

// [1] Fix The Error
// [2] Remove 2 Characters To Get The Output

// Needed Output
// Hello \PHP\ We Love Programming

//====================

//challenge 7

echo (int)is_string("Hello PHP");
echo '<br>';
echo gettype((int)is_string("Hello PHP"));
echo '<br>';
// Needed Output
// 1
// integer

//====================
//challenge 8
echo'<pre>';
print_r(['FrontEnd'=>['HTML','CSS','JS'=>["Vuejs"=>[2 => 'v2', 3=>"v3"],'Reactjs','Svetle']],'Backend'=>['PHP','MySQL','Security'],'Git','Github','Testing'=>['Unit Testing','End To End','Integration']]);
echo'</pre>';
?>
