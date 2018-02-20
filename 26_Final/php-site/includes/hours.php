<?php 

    $day_week = date("l");

$hour = date("G");


function hoursTuesdayThursday($hour){
if($hour >= 13 & $hour <= 21){
echo "We are open, come visit us!";
}else{
echo "Sorry, we are <strong>closed</strong> right now, check our opening hours!";
}}

function hoursFridaySaturday($hour){
if($hour >= 16 & $hour <= 23){
echo "We are open, come visit us!";
}else{
echo "Sorry, we are <strong>closed</strong> right now, check our opening hours!";
}}

if($day_week == "Tuesday" || $day_week == "Wednesday" || $day_week == "Thursday"){
hoursTuesdayThursday($hour);
}elseif($day_week == "Friday" || $day_week == "Saturday"){
hoursFridaySaturday($hour);
}else{
echo "Sorry, we are <strong>closed</strong> right now, check our opening hours!";
}




?>