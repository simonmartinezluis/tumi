function validarDiferir(){
    var m = document.getElementById("m");
    var p = document.getElementById("p");   
    var mensaje = "";
    var respuesta = true;
    if(m.value==null || m.value==''){
        mensaje="Datos vacíos";
        respuesta = false; 
    }else if(p.value==null || p.value==''){
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

$("#diferir").on("click",diferir);

function diferir(){
    if(validarDiferir()){
        var dato1 = document.getElementById("m").value;
        var dato2 = document.getElementById("p").value;
        //alert (m+"-"+p);
        //return false;
        $.ajax({
            method: "get",
            url: "ejecutables/diferir.php?dato1="+dato1+"&dato2="+dato2
        })
        .done(function( data ) {
            document.getElementById("binario1").value = data.binario1;
            document.getElementById("binario2").value = data.binario2;
            });
    }
}