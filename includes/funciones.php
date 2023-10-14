<?php

function obtener_constancias($variable){
    try {
        //Importar Credenciales
            require 'database.php';
        //ConsultaSQL
            $sql = "SELECT * FROM constancias WHERE Certificate_ID = '$variable';";
        //RealizarConsulta
            $consulta=mysqli_query($db,$sql);

            return $consulta;
    } catch (\Throwable $th) {
        //throw $th;
        var_dump($th);
    }
}

function obtener_trabajosCartas($variable){
    try {
        //Importar Credenciales
            require 'database.php';
        //ConsultaSQL
            $sql = "SELECT * FROM trabajoscartas WHERE Certificate_ID = '$variable';";
        //RealizarConsulta
            $consulta=mysqli_query($db,$sql);

            return $consulta;
    } catch (\Throwable $th) {
        //throw $th;
        var_dump($th);
    }
}


obtener_constancias($variable);
obtener_trabajosCartas($variable);