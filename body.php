<?php

echo'
      <div class="container" id="fbuscar">
        <form name="formulario" class="form-inline" action="anadir.php" >
                <div class="form-group">
                    <label for="mayorista">Mayorista</label>
                  <select name ="mayorista" class="form-control margenderecho">
                    <option></option>
                    <option>Data Prof</option>
                    <option>Diode</option>
                    <option>ELSI</option>
                    <option>Jarltech</option>
                    <option>Ingram</option>
                    <option>Wincor</option>
                    <option>Avalon</option>
                    <option>Tokheim</option>
                    <option>IECISA</option>
                  </select>
                </div>
                <div class="form-group">
                    <label for="cliente">Cliente</label>
                    <input type="email" class="form-control margenderecho" id="cliente">
                </div>
                <div class="form-group">
                    <label for="asunto">Asunto</label>
                    <input type="email" class="form-control margenderecho" id="asunto">
                </div>
            <button type="submit" class="btn btn-primary btn-lg">Buscar</button>
            <button type="button" class="btn btn-success btn-lg" id="btnanadir" onclick="mostraranadir()">Añadir</button>
        </form>
       </div>'; 

echo'
      <div class="container" id="fdetalle">
        <form class="form-horizontal" name="fanadir" action="acciones.php">
          <div class="form-group">
           <div class="col-xs-3">
             <label for="amayorista" >Mayorista</label>
                <select class="form-control" name="amayorista" id="amayorista2">
                    <option></option>
                    <option>Data Prof</option>
                    <option>Diode</option>
                    <option>ELSI</option>
                    <option>Jarltech</option>
                    <option>Ingram</option>
                    <option>Wincor</option>
                    <option>Avalon</option>
                    <option>Tokheim</option>
                    <option>IECISA</option>
                </select>
            </div>
        <div class="col-xs-3">
            <label for="cliente">Cliente</label>
            <input type="text" class="form-control margenderecho" name="acliente" id="cliente">
        </div>
        <div class="col-xs-2">
            <label for="fecha">Fecha</label>
            
                <input type="date" name="bday" value="new Date()">
           
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
            <input type="text" class="form-control margenderecho" name ="atema" id="tema">
       </div>
  </div>  


    <div class="form-group">
          <div class="col-xs-12">
           <label for="Detalle">Detalle</label>
               <textarea class="form-control" rows="10"  id="detalle"></textarea>
          </div>
     </div>  
     
    <div class="form-group">
           <button type="button" class="btn btn-primary btn-lg derecha" onclick="anadir()">Guardar</button>
           <button type="button" class="btn btn-success btn-lg derecha" onclick="confirmar()" id="btnanadir2">Cancelar</button>
           <input type="text" class="form-control" readonly name="accion" id="accion">
     </div>  

        </form>
       </div>'; 