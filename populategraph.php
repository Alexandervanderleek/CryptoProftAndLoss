<?php
if($_POST["theCurr"]=="" || $_POST["amnt"]=="" || $_POST["when"]==""){
    echo "<div class='alert alert-danger'>Missing inputs</div>";
    exit;
}else{
    

    $curr = $_POST["theCurr"];
    $date = $_POST["when"];
    $amount = $_POST["amnt"];
    $currency = $_POST["selector"];


    if($currency == "coin"){
      $currency = "usd"; 
    }

    $date = date("d-m-Y", strtotime($date));

    try{
        $dataPrice = file_get_contents('https://api.coingecko.com/api/v3/coins/'.$curr.'/market_chart/range?vs_currency='.$currency.'&from='.strtotime($date).'&to='.time());
    }catch(Exception $e){
        echo $e;
    }


    echo $dataPrice;


}

?>