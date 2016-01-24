<?php

include 'conexion.php';
session_start();
if (!isset($_SESSION ['usuarior'])){
    header('Location: acceso.php');
}

if (isset ($_GET['accion'])){
    
    $accion = $_GET['accion'];
    if($accion =="anadir"){
    $mayorista = $_GET['amayorista'];
    $cliente = $_GET['acliente'];
   
    
    $objConexion = new Conexion;

try {
    $objConexion->conectar();
    $objConexion->insertar($mayorista, $cliente);
   } 
   catch (Exception $ex) 
   {
    echo 'error de conexion base de datos error1' ;
    
    }
      }
}