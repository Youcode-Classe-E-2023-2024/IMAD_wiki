<?php
require_once 'models/Modelusers.php';

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $data = file_get_contents("php://input");
    $decodedData = json_decode($data, true);

    $users->Insert('notifications',['notif'=>$decodedData["message"]]);
    var_dump($decodedData);
} else {
    echo "no perm";
}
?>
