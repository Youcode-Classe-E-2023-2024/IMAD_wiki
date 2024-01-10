<?php
require_once 'models\Modelusers.php';
if($_SERVER['REQUEST_METHOD'] === "POST"){
       
$email = $_POST['email'];
$password = $_POST['password'];


echo $password;
echo $email;
$array =$users->selectWhere('*','users',"email = '$email'");
if(count($array) === 0){
    $response = array('status' => 'user not found ');
}else{
if (password_verify($password, $array[0]['password'])) {
    $response = array('status' => json_encode($array));
} else {
    $response = array('status' => 'password incorrect');
}
}


echo json_encode($response);

   


}else{
    echo "no perm";
}


?>