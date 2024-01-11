<?php

$data = file_get_contents("php://input");

$dataparsed = json_decode($data);

if ($dataparsed === null && json_last_error() !== JSON_ERROR_NONE) {
    echo "Error decoding JSON: " . json_last_error_msg();
} else {

    var_dump($dataparsed);
}
?>
