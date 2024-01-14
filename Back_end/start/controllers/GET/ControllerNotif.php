<?php
require_once 'models/Modeltags.php';

// echo "<br>". "controoooooooooolerpassed" . "<br>";
if(isset($this->autorisation) && $this->autorisation === 1){
    
    $query = "SELECT wiki.title, users.email
    FROM wiki
    JOIN users ON wiki.owner_id = users.id
    ORDER BY wiki.created_at DESC
    LIMIT 3";
    http_response_code(200);
    echo json_encode($tags->special($query));


}else{

  echo "no autorisation";  
}
