<?php
/*session_start();
if (!isset($_SESSION ['usuarior'])){
    header('Location: acceso.php');
}*/
?>

<!DOCTYPE html>
<html lang="es">
  <head>

    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
   
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
     <script src="ckeditor/ckeditor.js"></script>
    <link rel="stylesheet" type="text/css" href="formato.css"> 
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
 	
 	<title>Gestión</title>	

    <!-- Custom styles for this template -->
    <link href="jumbotron.css" rel="stylesheet">
    
    <script src="js/ie-emulation-modes-warning.js"></script>
    <script src="msg/dist/sweetalert.min.js"></script> 
    <link rel="stylesheet" type="text/css" href="msg/dist/sweetalert.css">

  </head>

  <body>

    <div class="jumbotron">
      <div class="container">
        <h1> <a href="#">GESTION</a></h1>
        <h4>Agosto 2015 </h4> 
      </div>
    </div>

     <!-- div que contiene el formulario buscar -->
    <div class="container" id="divBuscar">
        <form name="frmBuscar" class="form-inline claseFormulario" action="anadir.php" >
                <div class="form-group">
                  <label for="mayorista">Mayorista</label>
                  <select name ="slcMayorista" class="form-control margenderecho" id="txtMayoristaBuscar">
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
                    <input type="text" class="form-control margenderecho" maxlength="100" id="txtClienteBuscar">
                </div>
                <div class="form-group">
                    <label for="asunto">Asunto</label>
                    <input type="email" class="form-control margenderecho" id="asunto">
                </div>
            <button type="submit" class="btn btn-primary btn-lg">Buscar</button>
            <button type="button" class="btn btn-success btn-lg" id="btnanadir" onclick="fnMostraranadir()">Añadir</button>
        </form>
    </div>

	<!-- div que contiene el formulario de datos -->
    <div class="container" id="divDatos">
        <form class="form-horizontal claseFormulario" name="frmAnadir" action="acciones.php">
          	<div class="form-group">
	           <div class="col-xs-3">
	             <label for="amayorista" >Mayorista</label>
	                <select class="form-control claseTxt" name="amayorista"  id="txtMayorista">
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
		            <label for="txtCliente">Cliente</label>
		            <input type="text" class="form-control margenderecho claseTxt" maxlength="100" id="txtCliente">
		        </div>
		        <div class="col-xs-2">
		            <label for="TxtFecha">Fecha</label>
		            <input type="date" name="bday" class ="claseTxt" id="txtFecha">
		        </div>
	   	 	</div>
    
		    <div class="form-group">
		       <div class="col-xs-6">
		        <label for="TxtContacto">Persona de contacto</label>
		            <input type="text" class="form-control margenderecho claseTxt" maxlength="100" id="TxtContacto">
		       </div>
		       <div class="col-xs-3">
		        <label for="txtTelefono">Teléfono</label>
		            <input type="text" class="form-control margenderecho claseTxt" maxlength="20" id="txtTelefono">
		       </div>
		    </div>  
    
		    <div class="form-group">
		       <div class="col-xs-6">
		        <label for="txtAsunto">Asunto</label>
		            <input type="text" class="form-control margenderecho claseTxt"  maxlength="200" id="txtAsunto">
		       </div>
		        <div class="col-xs-3">
					 <label for="txtSituacion">Situación</label>
					 <select class="form-control claseTxt"   id="txtSituacion">
	                    <option></option>
	                    <option>Pendiente</option>
	                    <option>Terminado</option>
	                    <option>Archivo</option>
	                </select>

		        </div> 
		  	</div>  

		    <div class="form-group">
		          <div class="col-xs-12">
		           <label for="txtDetalle">Detalle</label>
		               <textarea class="form-control claseTxt" rows="10 claseTxt"  name ="editor1" id="txtDetalle"></textarea>
		          </div>
                   <script>
                    // Replace the <textarea id="editor1"> with a CKEditor
                    // instance, using default configuration.
                    CKEDITOR.replace( 'editor1' );
            </script>
		     </div>  
     
		    <div class="form-group">
		           <button type="button" class="btn btn-primary btn-lg derecha" id="btnAnadir" onclick="fnSalvarDatos()"></button>
		           <button type="button" class="btn btn-success btn-lg derecha" onclick="confirmar()">Cancelar</button>
		     </div>  
        </form>

    <br>    
    <hr>
    </div> <!-- /container -->

    <div class="container" id="divPie">
    	<footer>
        	<p>&copy; ANDY 2015</p>  
    	</footer>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
     <script type="text/javascript" src="js/pruebasjq.js"></script>
     <script type="text/javascript" src="js/funciones.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
   
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
