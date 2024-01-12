<?php
require_once 'models/Modeltags.php';
$data = file_get_contents("php://input");
echo "catttt";
$dataparsed = json_decode($data, true); 

if ($dataparsed === null && json_last_error() !== JSON_ERROR_NONE) {
    echo "Error decoding JSON: " . json_last_edataparsedrror_msg();
} else {
    $ops = ["name" => $dataparsed['value']];
    var_dump($dataparsed);
    $x = $tags->Update("categories", $ops,"id = '{$dataparsed['id']}'");
              
    if($x === "No rows updated" ){
        echo "tag not modified ";
        http_response_code(400); 
    }else{
        echo "goood ";
        http_response_code(200); 
    }
    
}
?>
