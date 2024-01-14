<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $targetDir = 'storage/';
    $targetFile = $targetDir . basename($_FILES['file']['name']);
    
    if (move_uploaded_file($_FILES['file']['tmp_name'], $targetFile)) {
        echo basename($_FILES['file']['name']);
        // http://localhost/IMAD_wiki/Back_end/start/storage/Capture%20d'%C3%A9cran%202023-12-28%20142050.png
       
        echo 'File uploaded successfully.';
    } else {
        echo 'Error uploading file.';
    }
}
?>
