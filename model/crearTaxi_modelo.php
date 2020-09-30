<?php

class crearTaxi_modelo{

    private $db;
    private $crearTaxi;

    public function __construct(){
        require_once("Connectar.php");
        $this->db=Connectar::conexion();
        $this->crearTaxi= array();

    }
    
        
    public function set_taxi(){

    }
    

}

?>