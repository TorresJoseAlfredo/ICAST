<?php

//Credenciales que apuntan a la instalación de SQL en tu computadora
//                      host,'usuario','contraseña','basededatos'
$db = mysqli_connect('localhost','root','jath','basedatospagina');
if(!$db){
    echo "Hubo un error";
    exit;
}

