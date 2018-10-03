<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */ //MYSQLI ES EL ENCARGADO DE REALIZAR LA CONEXION PARA LA BASE DE DATOS MYSQL!
$conexion = new mysqli ('localhost','root','','usuarios'); //(SERVIDOR,USUARIO)
if ($conexion -> connect_error){
    echo $error = $conexion->connect_error;
}

?>