<?php
require_once 'models/Modelcategorie.php';
$data = file_get_contents("php://input");

$dataparsed = json_decode($data, true); // Set the second parameter to true

if ($dataparsed === null && json_last_error() !== JSON_ERROR_NONE) {
    echo "Error decoding JSON: " . json_last_error_msg();
} else {
    $categories->Insert('categories', ['name' => $dataparsed["categorie"]]);
    var_dump($dataparsed);
}
?>
