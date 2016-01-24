<?php

session_start();

if (!isset($_SESSION ['usuarior'])){
    header('Location: acceso.php');
}


include 'cabecera.php'; // head del documento

echo'
      <div class="container" id="fdetalle">
        <form class="form-horizontal">
          <div class="form-group">
           <div class="col-xs-3">
             <label for="mayorista" >Mayorista</label>
                <select class="form-control" id="mayorista">
                    <option>Data Prof</option>
                     <option>Diode</option>
                </select>
            </div>
        <div class="col-xs-3">
            <label for="cliente">Cliente</label>
            <input type="text" class="form-control margenderecho" id="cliente">
        </div>
        <div class="col-xs-2">
            <label for="fecha">Fecha</label>
            <select class="form-control">
                <option>Año</option>
            </select>
        </div>
    </div>
    
    <div class="form-group">
       <div class="col-xs-6">
        <label for="persona">Persona de contacto</label>
            <input type="text" class="form-control margenderecho" id="persona">
       </div>
       <div class="col-xs-3">
        <label for="persona">Teléfono</label>
            <input type="text" class="form-control margenderecho" id="telefono">
       </div>
    </div>  
    
    <div class="form-group">
       <div class="col-xs-6">
        <label for="tema">Asunto</label>
            <input type="text" class="form-control margenderecho" id="tema">
       </div>
  </div>  


    <div class="form-group">
          <div class="col-xs-12">
           <label for="Detalle">Detalle</label>
               <textarea class="form-control" rows="10"  id="detalle"></textarea>
          </div>
     </div>  
     
    <div class="form-group">
           <button type="submit" class="btn btn-primary btn-lg derecha">Guardar</button>
          
     </div>  

        </form>
       </div>'; 

include 'pie.php';

