<?php


class Conectar{
    function conectar(){
        $conexion = mysqli_connect("localhost", "root", "", "taxicorp");
        if($conexion){
            echo 'Conexión realizada! <br>';
        } else {
            echo "<br>Error Número: " .mysqli_connect_errno(). "<br>";
            echo "Descripción del error: " .mysqli_connect_error() . "<br>";
        }
        return $conexion;
    }

    function desconectar($objconexion){

        if($objconexion){
            $correcto = @mysqli_close($objconexion);
            if($correcto){
                echo "Desconexión a la base de datos realizada!<br>";
            }else{
                echo "Error en la desconexión a la base de datos!<br>";
            }
        } else{
            echo "Error al abrir la conexión! <br>";
        }  
        

    }
}
?>