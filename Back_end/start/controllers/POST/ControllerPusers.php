<?php
require_once 'models\Modelusers.php';
if($_SERVER['REQUEST_METHOD'] === "POST"){
    
   
       
      
        $username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

// $email = filter($email);
// $password = filter($password);
$hached = password_hash($password, PASSWORD_BCRYPT);

$users->Insert('users',['password'=>$hached,'email'=>$email]);





$response = array('status' => 'success', 'message' => 'Form data received successfully');
echo json_encode($response);


}else{
    echo "no perm";
}


?>