<?php
require_once 'models/Modelusers.php';
$data = file_get_contents("php://input");

$dataparsed = json_decode($data, true); // Set the second parameter to true

if ($dataparsed === null && json_last_error() !== JSON_ERROR_NONE) {
    echo "Error decoding JSON: " . json_last_error_msg();
} else {

    // $$x = $tags->Update("tags", $data,"Email = '{$data['Email']}' AND MotDePasse = '{$data['MotDePasse']}'");
              
    // if($x === "No rows updated" ){
    //     echo "accont not found ";
    //     http_response_code(400); 
    // }else{
    //     echo json_encode($Users->selectWhere("id_user","Utilisateurs","Email = '{$data['Email']}' AND MotDePasse = '{$data['MotDePasse']}'")) ;
    //     http_response_code(200); 
    // }
    var_dump($dataparsed);
}
?>
