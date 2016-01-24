<?php

 
class conexion {
  //variables para los datos de la base de datos
    public $servidor;
    public $usuario;
    public $clave;
    public $basedatos;
    public $pasarela;
    public $query;
    public $resultado;
    public $filas;
   
    public function __construct() {

        //Iniciar las variables con los datos de la base de datos
        $this->servidor = 'localhost'; 
        $this->usuario = 'angel2';
        $this->clave = '1234';
        $this->basedatos = 'contenedor'; //qqk474';
    }

    // Funci�n para conectar con la base de datos.
    public function conectar() {

        $this->pasarela = new PDO("mysql:host=" . $this->servidor . ";dbname=" . $this->basedatos, $this->usuario, $this->clave);
        $acentos = $this->pasarela->query("SET NAMES 'utf8'");
    }  
    
    public function verifica($nombre) {
       
        $query = "SELECT * FROM `tbquien`WHERE `nombre` LIKE '%$nombre%'"; 
        $this->resultado = $this->pasarela->query($query);
        return $this->filas = $this->resultado->fetchAll();
    }

    public function insertar($mayorista, $cliente) {
       
        $query = "INSERT INTO gestion  (id, mayorista, cliente)
                    VALUES ('','$mayorista', '$cliente') "; 
        $this->resultado = $this->pasarela->query($query);
               
    }
    
    }

 