<?php

// Read the JSON file into a string
$json_string = file_get_contents("my_data.json");

// Decode the JSON string into an associative array
$data = json_decode($json_string, true);

// Access the data in the array
echo 'Name: ' . $data['Student'][0]['Name'] . '<br>';
echo 'Roll: ' . $data['Student'][0]['Roll'] . '<br>';
echo 'Subject: ' . $data['Student'][0]['subject'] . '<br><br>';

echo 'Name: ' . $data['Student'][1]['Name'] . '<br>';
echo 'Roll: ' . $data['Student'][1]['Roll'] . '<br>';
echo 'Subject: ' . $data['Student'][1]['subject'] . '<br>';

?>
