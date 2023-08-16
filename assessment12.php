<?php

//Challenge 1
date_default_timezone_set("Asia/Riyadh");
echo date_default_timezone_get()."<br>";
$d = date_create();
echo date_format($d,"D, d M y - h:i:s A")."<br>";
echo date_format($d,"l, d F Y - h:i:s A")."<br>";


// Output Needed
// "Asia/Riyadh"
// "Wed, 09 Nov 22 - 07:11:22 PM"
// "Wednesday, 09 November 2022 - 07:11:22 PM"

//Challenge 2
$date = "2005-10-02";
date_default_timezone_set("Africa/Cairo");
echo date_default_timezone_get();
echo "<br>";
$date = date_create($date);
date_add($date,date_interval_create_from_date_string("15 hours , 15 minutes , 15 seconds"));
echo date_format($date,"Y, F, l 'dS' h:i:s");
echo "<br>";

// Output Needed
// "Africa/Cairo"
// "2005, October, Sunday '02nd' 15:15:15"

//Challenge 3
$date = "1990-10-01";
date_default_timezone_set("Africa/Cairo");
echo date_default_timezone_get();
echo "<br>";
$days =  round((time()- strtotime($date))/60/60/24,1);
$years =  round((time()- strtotime($date))/60/60/24/365,1);
echo "From Epoch Time Till 1990-10-01 Is Approximately $days Days";
echo "<br>";
echo "From Epoch Time Till 1990-10-01 Is Approximately $years Years";
echo "<br>";
// Output Needed
// "From Epoch Time Till 1990-10-01 Is Approximately 7577.9 Days"
// "From Epoch Time Till 1990-10-01 Is Approximately 20.8 Years"

//Challenge 4
$date = "1990-10-01";
echo "From Epoch Time Till 1990-10-01 Is Approximately".date_diff(date_create($date),date_create())->days." Days";
echo "<br>";
echo "From Epoch Time Till 1990-10-01 Is Approximately".date_diff(date_create($date),date_create())->y."Years";
echo "<br>";

// Output Needed
// "From Epoch Time Till 1990-10-01 Is Approximately 7578 Days"
// "From Epoch Time Till 1990-10-01 Is Approximately 20 Years"

//Challenge 5
echo time() . "<br>";
echo strtotime("now");
echo "<br>";
echo getdate()["0"];
echo "<br>";
$now = date_create();
$ytos = (date_parse(date_format($now,"Y-m-d h:i:s"))["year"]-1970)*365.25*24*3600;
$mtos=  date_parse(date_format($now,"Y-m-d h:i:s"))["month"]*30*24*3600;
$dtos = date_parse(date_format($now,"Y-m-d h:i:s"))["day"]*24*3600;
$htos = date_parse(date_format($now,"Y-m-d h:i:s"))["hour"]*3600;
$mtos = date_parse(date_format($now,"Y-m-d h:i:s"))["minute"]*60;

echo $ytos+$mtos+$dtos+$htos+$mtos+ date_parse(date_format($now,"Y-m-d h:i:s"))["second"];



// Output Needed With Other Ways
