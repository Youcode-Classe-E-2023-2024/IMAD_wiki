<?php
require_once 'models/Modelcategorie.php';

// echo "<br>". "controoooooooooolerpassed" . "<br>";
if(isset($this->autorisation) && $this->autorisation === 1){
    
  
    http_response_code(200);
    echo json_encode($categories->selectAll("categories"));


}else{
  echo "no autorisation";  
}
