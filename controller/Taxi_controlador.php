<?php

require_once "../model/listadoTaxis.php";

class Taxi_controlador{

    public function allTaxis(){
        $misTaxis = new listadoTaxis();
        $resultado = $misTaxis->getTaxis();
        $query = http_build_query(array('aParam' => $resultado));
        header("Location: http://localhost/TaxiCorp/view/vistasHTML/controlT/listadoT.php?".$query);
    }
}
if (isset($_POST['select'])) {
    $miListado = new Taxi_controlador();
    $miListado->allTaxis();
}

?>