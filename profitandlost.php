<?php
if($_POST["theCurr"]=="" || $_POST["amnt"]=="" || $_POST["when"]==""){
    echo "<div class='alert alert-danger'>Missing inputs</div>";
    exit;
}else{
    

    $curr = $_POST["theCurr"];
    $date = $_POST["when"];
    $amount = $_POST["amnt"];
    $currency = $_POST["selector"];
    $amntconvert = false;


    if($currency == "coin"){
      $currency = "usd"; 
    }else{
        $amntconvert = true;
    }

    $date = date("d-m-Y", strtotime($date));

    try{
    $dataPrice = json_decode(file_get_contents('https://api.coingecko.com/api/v3/simple/price?ids='.$curr.'&vs_currencies='.$currency),true);

    $datePrice = json_decode(file_get_contents('https://api.coingecko.com/api/v3/coins/'.$curr.'/history?date='.$date.'&localization=false'), true);
    }catch(Exception $e){
        echo $e;
    }

    
    $price = $dataPrice[$curr][$currency];

    
    $oldPrice =  $datePrice["market_data"]["current_price"][$currency];

    if($amntconvert){
        $amount = $amount / $oldPrice;
    }
    $pandl = $amount * ( $price - $oldPrice );
    
    $style = "table-success";


    if($pandl < 0){
        $style = "table-danger";
    }
    $symbol;
    switch($currency){
        case "usd":
            $symbol = "&#36";
            break;
        case "aud":
            $symbol = "&#36";
            break;
        case "zar":
            $symbol = "R";
            break;
        case "gbp":
            $symbol = "&#163";
            break;    
        case "jpy":
            $symbol = "&#165";
            break; 
    }


    echo "<table class='table table-bordered'>
        <tbody>
            <tr class='table-info'>
                <td>BOUGHT AT:</td>
                <td>" . $symbol. " " . round($oldPrice,2)."</td>
            </tr>
            <tr class='table-info'>
                <td>VALUE TODAY:</td>
                <td>" . $symbol. " " . round($price,2)."</td>
            </tr>
            <tr class='table-info'>
                <td>PORTFOLIO VALUE TODAY:</td>
                <td>" . $symbol. " " . round($price*$amount,2)."</td>
            </tr>
            <tr class='$style'>
                <td>TOTAL P&L:</td>
                <td>" . $symbol. " " . round($pandl,2) ."</td>
            </tr>
        </tbody>
    </table>";


}

?>