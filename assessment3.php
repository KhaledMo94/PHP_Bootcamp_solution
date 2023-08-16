<!-- Challenge1 -->
<!-- <!DOCTYPE html>
<?php //$mystring='Khaled Courses';?>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php //echo $mystring ;?>">
    <title>Welcome To <?php //echo $mystring ;?></title>
    </head>
    <body>
    <h1><?php //echo $mystring ;?></h1>
    <p>Here In <?php //echo $mystring ;?> We Provide Front-End And Back-End Courses</p>
    <hr>
    <div><?php //echo $mystring ;?> Is The What You Need.</div>
    <footer>All Right Reserved To <?php //echo $mystring ;?></footer>
    </body>   
</html> -->

<?php
//===================================================
// Challenge 2
$name = "elzero";
$$name = "Web";

echo $$name ;
echo '<br>';
echo ${$name};
echo '<br>';
echo $elzero ;
echo '<br>';
echo ($$name) ;
echo '<br>';
echo ($elzero);


//===================================================
//challenge 3
echo '<br>';

$a = 200;
$b = &$a;
$a = 100;

echo $b; // 100
echo '<br>';

//==========================================================

//challenge 4
// echo '<pre>';
// print_r($_SERVER) ;
// echo '</pre>';
echo '<br>';

echo $_SERVER['DOCUMENT_ROOT'];
echo '<br>';

echo $_SERVER['SERVER_NAME'];
echo '<br>';

echo $_SERVER['SystemRoot'];
echo '<br>';

echo $_SERVER['OPENSSL_CONF'];

//==============================================
//challenge 5

/*
    $_server
    $_cookies
    $_post
    $_get
    echo
    print_r
    int
    integer
    gettype
    is_integer
    is_string 
    function

*/

//==================================================
//challenge 6 
echo '<pre>';
print_r($_ENV);
echo '</pre>';

echo $_SERVER['SCRIPT_FILENAME'];
echo '<br>';

