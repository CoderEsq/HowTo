<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
echo '<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>Specific Crime Outcomes</title>
</head>
<body>';

$request = 'https://data.police.uk/api/outcomes-for-crime/7e7a6ef5ba39f5322bbbbc6df4cbf4e104b5af84d372cdc53ebcb788e25b7234';
$response  = file_get_contents($request);
$JSONarray  = json_decode($response, true);

//The design of this function was influenced from the discussion on
//http://www.informit.com/articles/article.aspx?p=1969707&seqNum=3
function printArray($JSONarray) {
    echo '<br>';
    foreach ($JSONarray as $key => $value) {
      echo "$key: ";
        if (is_array($value)) {
            printArray($value);
      } 
      else {
            echo $value . '<br />';
      }
    }
    echo '<br>';
}
  
printArray($JSONarray);