<?php 
$response = array();

$cars = array("Volvo", "BMW", "Toyota");

$response['cars'] = $cars;

$fp = fopen('results.json', 'w');
fwrite($fp, json_encode($response));
fclose($fp);


?> 