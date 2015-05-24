<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
echo '<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title></title>
</head>
<body>';

$request = 'https://data.police.uk/api/forces/gloucestershire/people';
$response  = file_get_contents($request);
$JSONarray  = json_decode($response, true);


foreach ($JSONarray as $key => $value) {
  		echo $value["name"] . "<br>";
  		echo $value["rank"] . "<br>";
  		echo $value["bio"] . "<br>";
}
