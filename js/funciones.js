var documento;

documento = $(document);
documento.ready(prueba);

function prueba(){

  alert("carga correcta del documento");
}


 var datosformulario = {mayorista:"1", cliente: "2",fecha: "3", persona: "4", telefono: "5", asunto: "6", situacion: "7", detalle: "8"};

 
function fnMostraranadir() { // mostrar el div de datos y ocultar de de búsqueda
    var divBusar = document.getElementById("divBuscar"); // ocutla el div que contiene el formulario buscar
    divBuscar.style.display='none';
    var divDatos = document.getElementById("divDatos"); // muestra el div que contiene el formulario de datos
    divDatos.style.display = 'block';
    var btnAnadir = document.getElementById("btnAnadir");
    btnAnadir.innerHTML = 'Añadir'; // El botón muestra AÑADIR para diferenciarlo de EDITAR
    var fecha = document.getElementById("txtFecha");
    fecha.value = new Date().toISOString().substring(0, 10); // añadir fecha actual al campo date.
  }

//Recoger la información, comprueba la validez del campos asunto y llama a la función grabar datos.
function fnSalvarDatos(){
  var datos = document.getElementsByClassName("claseTxt"); // Recoge todos los datos en un array
   if ( (datos[5].value) == "") { // comprueba que existen valores en campo asunto
    alert ('Falta datos campo asunto');
    return;
   }

   var i = 0;
  for (var dato in datosformulario){ // pasa todos los valores del array a un nuevo array asociativo para crear un JSON.
    datosformulario[dato] = (datos[i].value);
    i++;
  }

 
}




function confirmar(){
  swal({   title: "Are you sure?",
   text: "You will not be able to recover this imaginary file!",   
   type: "warning",   
   showCancelButton: true,   
   confirmButtonColor: "#DD6B55",   
   confirmButtonText: "Yes, delete it!",   
   cancelButtonText: "No, cancel plx!",   
   closeOnConfirm: false,
   closeOnCancel: false
    }, 
    function(isConfirm){   
        if (isConfirm) {     
            
            swal("Deleted!", "Your imaginary file has been deleted.", "success"); 
            document.forms[1].reset();
             var elemento = document.getElementById("fdetalle");
            elemento.style.display = 'none';
        } 
        else {     
            swal("Cancelled", "Your imaginary file is safe :)", "error");   } });
}


