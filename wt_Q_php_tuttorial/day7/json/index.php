<?php
$age = array("Peter"=>35, "Ben"=>37, "Joe"=>43);

$jsonData=json_encode($age);

$ageData=json_decode($jsonData);
//echo var_dump($ageData);
print_r($ageData);

?>