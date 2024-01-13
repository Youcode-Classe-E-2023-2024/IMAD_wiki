<?php
require_once 'models/Modeltags.php';
$data = file_get_contents("php://input");

$dataparsed = json_decode($data, true); 

if ($dataparsed === null && json_last_error() !== JSON_ERROR_NONE) {
    echo "Error decoding JSON: " . json_last_error_msg();
} else {
    $tags->Insert('wikis', ['name' => $dataparsed["tag"]]);
    var_dump($dataparsed);
}
?>
