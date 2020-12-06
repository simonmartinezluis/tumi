var contador = 0;
function validarRango(){
    var entrada = document.getElementById("entradaRango");
    var mensaje = "";
    var respuesta = true;
    if(entrada.value==null || entrada.value==''){
        mensaje="Datos vacíos";
        respuesta = false; 
    }
    if(mensaje!=""){
        swal({
            title: mensaje,
            text: "Ingrese un numero del 1 al 10",
            icon: "warning",
        })
    }
    return respuesta;
}

$("#generar").on("click",generar);
 
function generar(){
     if(validarRango()){
        var texto = document.getElementById("entradaRango").value;
        //alert (texto);
        //return false;
        $.ajax({
            method: "get",
            url: "ejecutables/ejecutarRango.php?entrada="+texto
        })
        .done(function( data ) {
            document.getElementById("respuestaOrdenado").value = data.resultado;
            document.getElementById("respuestaRango").value = data.valores;
            });
     }
 }

 function KeyBackspace(keyStroke) {
    isNetscape = (document.layers);
    eventChooser = (isNetscape) ? keyStroke.which : event.keyCode;
    if (eventChooser == 13) {
        return false;
    }
}
document.onkeypress = KeyBackspace;
 
document.onkeydown = function() {
    if (window.event && window.event.keyCode == 8) {
        window.event.keyCode = 505;
    }
    if (window.event && window.event.keyCode == 505) {
        return false;
    }
}