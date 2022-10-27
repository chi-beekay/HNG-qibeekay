<?php
$arr = array(
    "slackUsername" => "qi_beekay",
    "backend" => true,
    "age" => 25,
    "bio" => "Hi my name is Mokwe chibuike, i am a PHP developer and i am happy to begin my Internship with HNG"
);
$obj = (object)$arr;
// $myObj->name = "John";
// $myObj->age = 30;
// $myObj->city = "New York";

$myJSON = json_encode($obj);

echo $myJSON;
