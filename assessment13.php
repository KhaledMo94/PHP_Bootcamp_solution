<?php
//Challenge 1

setcookie("site[layout]","boxed",strtotime('+2months +5days'),"/");
setcookie("site[font]","Swat",strtotime('+2months +5days'),"/");
setcookie("site[color]","blue",strtotime('+2months +5days'),"/");


//challenge 2
if (isset($_COOKIE["site"])){
    echo "<pre>";
    print_r($_COOKIE);
    echo "</pre>";
};
echo "Your Color Is ". $_COOKIE['site']['color']. "And Your Font Is " .$_COOKIE['site']['font']."<br>";


//Challenge 3 
setcookie("site[layout]","boxed",time()-1,"/");


//Challenge 4
setcookie("site[font]","Swat",0,"/");
setcookie("site[color]","blue",0,"/");

