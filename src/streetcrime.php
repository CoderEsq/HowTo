<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
echo '<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>Crime in Dorking</title>
</head>
<body>';

$request = 'https://data.police.uk/api/crimes-street/all-crime?lat=51.232417&lng=-0.332361&date=2015-01';
$response  = file_get_contents($request);
$JSONarray  = json_decode($response, true);


foreach ($JSONarray as $key => $value) {
		echo "Date: " . $value["month"] . "<br>";
  		echo "Crime Category: " . $value["category"] . "<br>";
  		echo "Street ID: " . $value["id"] . "<br>";
  		echo "Police Force Type: " . $value["location_type"] . "<br>";
  		echo "Crime ID: " . $value["persistent_id"] . "<br><br>";
}
