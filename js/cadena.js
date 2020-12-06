function validar(){
    var entrada = document.getElementById("inputEntrada");
    var mensaje = "";
    var respuesta = true;
    if(entrada.value==null || entrada.value==''){
        mensaje="Datos vacíos";
        respuesta = false; 
    }
    if(mensaje!=""){
        swal({
            title: mensaje,
            text: "Registro erroneo",
            icon: "warning",
        })
    }
    return respuesta;
}

$("#cambiar").on("click",cambiar);

function cambiar(){
    if(validar()){
        var texto = document.getElementById("inputEntrada").value;
        //alert (texto);
        //return false;
        $.ajax({
            method: "get",
            url: "ejecutables/ejecutarCadena.php?entrada="+texto
        })
        .done(function( data ) {
            document.getElementById("salida").value = data.resultado;
            });

    }
    return false;
}