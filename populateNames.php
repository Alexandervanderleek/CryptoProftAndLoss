<?php
    
    $returnArr = array();
    
    $data = json_decode(file_get_contents('https://api.coingecko.com/api/v3/coins/list?include_platform=false'), true);

    foreach($data as $key => $value) {
      array_push($returnArr,$value["id"]);
    }

    echo json_encode($returnArr);
    exit;

?>


