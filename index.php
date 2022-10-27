<?php
$arr = array(
    "slackUsername" => "qi_beekay",
    "backend" => true,
    "age" => 25,
    "bio" => "I am a backend dev"
);
$obj = (object)$arr;
// $myObj->name = "John";
// $myObj->age = 30;
// $myObj->city = "New York";

$myJSON = json_encode($obj);

echo $myJSON;
