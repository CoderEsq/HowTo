<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
echo '<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>Metro Force Information</title>
</head>
<body>';

$request = 'https://data.police.uk/api/forces/metropolitan';
$response  = file_get_contents($request);
$JSONarray  = json_decode($response, true);


foreach ($JSONarray as $key => $value) {
	if( !is_array($value) ) {
  	echo $key . ' : ' . $value . "<br>";
  }
}
