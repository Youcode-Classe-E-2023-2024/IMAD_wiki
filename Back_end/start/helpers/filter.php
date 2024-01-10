<?php

function customFilter($input, $pdo = null) {
   
    $filteredInput = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');

    
    if ($pdo !== null) {
        $filteredInput = $pdo->quote($filteredInput);
    }

    
    $filteredInput = input_filter($filteredInput);

    return $filteredInput;
}


function input_filter($input) {
    
    $filteredInput = strip_tags($input);
    $filteredInput = trim($filteredInput); 

    return $filteredInput;
}

?>
