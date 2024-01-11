<?php
echo json_encode('hi');
// echo "<br>". "controoooooooooolerpassed" . "<br>";
if(isset($this->autorisation) && $this->autorisation === 1){
    
  
    http_response_code(200);
    echo json_encode($Anonce->selectAll("tags"));


}else{

  echo "no autorisation";  
}
