<?php
require_once 'models\Modelusers.php';
if($_SERVER['REQUEST_METHOD'] === "POST"){
       
$email = $_POST['email'];
$password = $_POST['password'];


$array =$users->selectWhere('*','users',"email = '$email'");
if(count($array) === 0){
    $response = array('status' => 'user not found ');
    http_response_code(300); 
}else{
if (password_verify($password, $array[0]['password'])) {
    $response = array('status' => $array);
    http_response_code(200); 
} else {
    $response = array('status' => 'password incorrect');
    http_response_code(300); 
}
}


echo json_encode($response);

   


}else{
    echo "no perm";
}


?>