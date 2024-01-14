<?php
require_once 'models/Modeltags.php';
$data = file_get_contents("php://input");

$dataparsed = json_decode($data, true); // Set the second parameter to true
$array = [];
if($dataparsed["option"]=="cat"){
    
    $id = $dataparsed["categorieid"]; 
    $query = "SELECT *
    FROM wiki
    JOIN linkcategorie ON wiki.id = linkcategorie.wikiid
    WHERE linkcategorie.categorieid = $id";

$data = $tags->special($query);
echo json_encode($data);
   
}else{
    
    $id = $dataparsed["tagid"]; 
    $query = "SELECT *
        FROM wiki
        JOIN linktag ON wiki.id = linktag.wikiid
        WHERE linktag.tagid = $id";
    
    $data = $tags->special($query);
    echo json_encode($data);

}



?>

  