<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
echo '<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>Neighborhood Police Force</title>
</head>
<body>';

$request = 'https://data.police.uk/api/leicestershire/C01/people';
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