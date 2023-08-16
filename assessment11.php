<?php

//Challenge 1
$diskc = round(disk_total_space("C:")/10**9,2);
echo "$diskc terabytes <br>";
$diske = round(disk_total_space("E:")/10**9,2);
echo "$diske terabytes <br>";

//Challenge 2
if (file_exists("C:/Users/wwww/Videos/Radeon ReLive/video.MP4")){
    echo round(filesize("C:/Users/wwww/Videos/Radeon ReLive/video.MP4")/1024) ."KB<br>";
    echo round(filesize("C:/Users/wwww/Videos/Radeon ReLive/video.MP4")/1024/1024) ."MB<br>";
};

//Challenge 3

if (!file_exists("programming")){
    mkdir("programming/php",711,true);
};

function deletedir($dir){
    rmdir("$dir/php");
    echo "Directory Programming/PHP Removed<br>";
    rmdir($dir);
    echo "Directory ProgrammingRemoved<br>";
}

deletedir("programming");
// Output
// "Directory Programming/PHP Removed"
// "Directory Programming Removed"

//Challenge 4

// function change_permissions($name_file){
//     if (!is_dir($name_file)){
//         if (pathinfo($name_file,PATHINFO_EXTENSION)==="txt"){
//             chmod($name_file,0700);
//             echo "permission Changed <br>";
//         }else{
//             echo "File Extension Is Not Txt <br>";
//         }
//     }else {
//         echo "This Is Directory And Only Files Allowed <br>";
//     }
// };


// echo change_permissions("Elzero"); // This Is Directory And Only Files Allowed
// echo change_permissions("Work.docx"); // File Extension Is Not Txt
// echo change_permissions("Result.txt"); // Permissions 

//Challenge 5

// method 1 
echo strrchr(__FILE__,'\\');
echo "<br>";

echo basename(__FILE__);
echo "<br>";

echo pathinfo(__FILE__,PATHINFO_FILENAME).".";
echo pathinfo(__FILE__,PATHINFO_EXTENSION);

echo "<br>";

echo basename($_SERVER["PHP_SELF"]);
echo "<br>";

//Challenge 6

$handle = fopen("elzero.php",'r');
//method 1
echo fgets($handle)."<br>";
echo fgets($handle)."<br>";
rewind($handle);
//method 2 
echo fread($handle,26)."<br>";
rewind($handle);
$f = file("elzero.php");
echo "<pre>";
//method 3
for ($i=0;$i<count($f)-1;$i++){
    print_r($f[$i]);
}
//method 4
$i=0;
while ($i<count($f)-1){
    print_r($f[$i]);
    $i++;
}
echo "<pre>";
fclose($handle);

//Challenge 7
$hand = file_get_contents("elzero.txt");
$hand = str_replace("Osamaa","Elzero",$hand);
$handle = fopen("elzero.txt",'c');
    fwrite($handle,$hand);
fclose($handle);


