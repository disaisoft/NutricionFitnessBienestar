<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if(isset($_POST['nombre'])){
    $nombre = $_POST['nombre'];
}
if(isset($_POST['apellido'])){
    $apellido = $_POST['apellido'];
}
if(isset($_POST['ciudad'])){
    $ciudad = $_POST['ciudad'];
}
//realizamos la conexion a la base de datos!!
try {
    require_once 'bd_conexion.php';
    //query que vamos a ejecutar
    $sql = "INSERT INTO `datosusuario`(`nombre`,`apellido`,`ciudad`)";
    $sql.= "VALUES ('{$nombre}','{$apellido}','{$ciudad}')";
    //ejecutamos el query
    //$sql = "select * from datosusuario";
    $resultado = $conexion->query($sql);
    echo 'datos ingresados correctamente';
} catch (Exception $ex){
    //muestra el error
    $error = $ex->getMessage();
}
