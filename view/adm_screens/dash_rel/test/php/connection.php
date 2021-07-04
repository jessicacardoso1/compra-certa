<?php

try{
    $pdo = new PDO("mysql:dbname=cartao_credito;host=127.0.0.1", "root", "");
}catch(PDOException $e){
    echo "Error: ".$e->getMessage();
}
$sql = "SELECT valor_total, dt_compra FROM cartao_credito.compra";
$result = $pdo->query($sql);

$compras_por_mes = array(
                            "01" => 0.,
                            "02" => 0.,
                            "03" => 0.,
                            "04" => 0.,
                            "05" => 0.,
                            "06" => 0.,
                            "07" => 0.,
                            "08" => 0.,
                            "09" => 0.,
                            "10" => 0.,
                            "11" => 0.,
                            "12" => 0.,
                        );

$sum_ano = 0.;
while(list($valor_total, $dt_compra) = $result->fetch(PDO::FETCH_NUM)){
    $dt = new DateTime($dt_compra);

    $compras_por_mes[$dt->format('m')] += $valor_total;
    
    $sum_ano += $valor_total;
}

echo json_encode($compras_por_mes), "\n";

?>