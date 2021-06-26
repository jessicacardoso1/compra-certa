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

    function alert($titulo, $mensagem){
        echo '
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">'.$titulo.'</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            '.$mensagem.'
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        </div>
                    </div>
                </div>
            </div>
        ';

        echo '
            <script>
                $(document).ready(function(){
                    $("#myModal").modal();
                });
                //made by csandreas1 for Stackoverflow
            </script>
        ';
    }

?>