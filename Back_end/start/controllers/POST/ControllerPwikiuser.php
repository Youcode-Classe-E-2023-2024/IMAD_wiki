<?php
require_once 'models/Modeltags.php';
$data = file_get_contents("php://input");

$dataparsed = json_decode($data, true); 

if ($dataparsed === null && json_last_error() !== JSON_ERROR_NONE) {
    echo "Error decoding JSON: " . json_last_error_msg();
} else {
  
 
   echo json_encode($tags->selectWhere('*', 'wiki', "owner_id = '" . $dataparsed["id"] . "'"));

    // var_dump($dataparsed);
}
?>