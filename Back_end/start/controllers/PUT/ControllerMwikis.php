<?php
require_once 'models/Modeltags.php';
$data = file_get_contents("php://input");
echo "taaaag";
$dataparsed = json_decode($data, true); 

if ($dataparsed === null && json_last_error() !== JSON_ERROR_NONE) {
    echo "Error decoding JSON: " . json_last_edataparsedrror_msg();
} else {
    $ops = [];
    if($dataparsed['description'] == ""){
        echo "descriptio";
        $ops = ["title" => $dataparsed['title']];
    }elseif($dataparsed['title'] == ""){$ops = ["description" => $dataparsed['description']]; echo "title";} 
    else{
        $ops = ["title" => $dataparsed['title'],"description" => $dataparsed['description']]; echo "both";
    }
    

    $x = $tags->Update("wiki", $ops,"id = '{$dataparsed['id']}'");
              
    if($x === "No rows updated" ){
        echo "tag not modified ";
        http_response_code(400); 
    }else{
        echo "goood ";
        http_response_code(200); 
    }
    
}
?>
