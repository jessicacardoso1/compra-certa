<?php

    $conn_dir = dirname(__DIR__);
    $conn_dir = $conn_dir."/conn/conn.php";
    require($conn_dir);

    class DashboardDAO{

        public function get_receita_mes($mes_ref){

            $conn = new Conn();
            $pdo = $conn->connect();

            $sql = "SELECT valor_total, dt_compra FROM compra";
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

            while(list($valor_total, $dt_compra) = $result->fetch(PDO::FETCH_NUM)){

                $dt = new DateTime($dt_compra);
            
                $compras_por_mes[$dt->format('m')] += $valor_total;

            }

            $pdo = $conn->close();

            return $compras_por_mes;

        }

    }

?>
