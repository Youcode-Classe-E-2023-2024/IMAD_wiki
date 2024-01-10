<?php
require_once 'models\Modelusers.php';
if($_SERVER['REQUEST_METHOD'] === "POST"){
    
   
       
      
      
$email = $_POST['email'];
$password = $_POST['password'];
echo $email;
echo $password;
$data = ["password" => $password];
$hached = password_hash($password, PASSWORD_BCRYPT);
$message = $users->Update("users", $data,"email = '$email'");
$response = array('status' => 'success', 'message' => $message);
echo json_encode($response);

   


}else{
    echo "no perm";
}


?>