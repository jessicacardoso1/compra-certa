<?php

    function getDatetimeNow() {
        $tz_object = new DateTimeZone('Brazil/East');

        $datetime = new DateTime();
        $datetime->setTimezone($tz_object);

        return $datetime->format('Y\-m\-d\ h:i:s');
    }

    function mergeListaPorID($_lista, $_id_base){
        $lista_por_id = array();

        for($i = 0; $i < count($_lista); $i++){
            if(!array_key_exists($_lista[$i][$_id_base], $lista_por_id)){
                $arr = array(
                    $lista_por_id[$i][$_id_base] => array_slice($_lista[$i], 1)
                );

                $lista_por_id[$_lista[$i][$_id_base]] = $arr;
            }
            else
                array_push($lista_por_id[$_lista[$i][$_id_base]], array_slice($_lista[$i], 1));
        }
        
        return $lista_por_id;
    }

    function alert($_mensagem){
        echo "<script type='text/javascript'>alert('$_mensagem');</script>";
    }

?>