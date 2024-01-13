<?php
require_once 'models/Modeltags.php';
$data = file_get_contents("php://input");

$dataparsed = json_decode($data, true); 

if ($dataparsed === null && json_last_error() !== JSON_ERROR_NONE) {
    echo "Error decoding JSON: " . json_last_error_msg();
} else {
    $x =  $tags->Insert('wiki', ['title' => $dataparsed["title"],'description' => $dataparsed["description"],'owner_id' => $dataparsed["owner"]]);
    
    foreach ($dataparsed["categorie"] as $category) {
        $tags->Insert('linkcategorie', ['categorieid' => $category, 'wikiid' => $x]);
    }
    
    foreach ($dataparsed["tags"] as $tag) {
        $tags->Insert('linktag', ['tagid' => $tag, 'wikiid' => $x]);
    }
    
    // var_dump($dataparsed);
}
?>
