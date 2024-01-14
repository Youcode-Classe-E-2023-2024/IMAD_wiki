<?php
require_once 'models\Modelusers.php';
if($_SERVER['REQUEST_METHOD'] === "GET"){
    
   
      
$response =     $users->selectWhere('*','wiki',"status IS NULL");

echo json_encode($response);

   


}else{
    echo "no perm";
}


?>