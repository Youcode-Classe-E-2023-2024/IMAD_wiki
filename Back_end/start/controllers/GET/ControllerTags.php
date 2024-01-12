<?php
require_once 'models/Modeltags.php';

// echo "<br>". "controoooooooooolerpassed" . "<br>";
if(isset($this->autorisation) && $this->autorisation === 1){
    
  
    http_response_code(200);
    echo json_encode($tags->selectAll("tags"));


}else{

  echo "no autorisation";  
}
