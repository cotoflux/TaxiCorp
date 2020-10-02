<?php

class listadoTaxis{

    private $db;
    private $listadoTaxis;

    public function __construct(){
        require_once("Connectar.php");
        $this->db=Connectar::conexion();
        $this->listadoTaxis= array();

    }
    
        
    public function getTaxis(){

        $consulta=$this->db->query("SELECT * FROM `taxis` WHERE `Ocupado`=1");
        while($filas=$consulta->fetch(PDO::FETCH_ASSOC)){
            array_push($this->listadoTaxis, $filas);
        }
        return $this->listadoTaxis;
    }
    

}

?>