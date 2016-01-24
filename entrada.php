<?php
include 'conexion.php';

$objConexion = new conexion;

$resultado="";
$usuarior="";
$contrasena="";
$hash = "";


try {
    $objConexion->conectar();
} catch (Exception $exc) {
    echo $exc->getTraceAsString();
            echo'error conexión';
}

if(isset($_POST['usuario'])AND isset($_POST['contrasena'])){
    
    $usuarior = $_POST['usuario'];
    $contrasenar = $_POST['contrasena'];
    
  
    $resultado = $objConexion->verifica($usuarior);
       
   if(count($resultado)<> 1)
       {
        header('Location: acceso.php');
       }
    
    
}

   $hash= $resultado[0][2];
  

if (password_verify($contrasenar, $hash)) {
    // Success!
    echo'Clave correcta';
    session_start();
    $_SESSION['usuarior']= $usuarior;
    header('Location: gestion.php');
    }
else {
    // Invalid credentials
     header('Location: acceso.php');
}





