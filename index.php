<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">
    <script src="js/jquery-3.5.1.min.js"></script> 
    <title>Tumi-concurso</title>
</head>
<body>
    <h1 class="titulo">CONCURSO PARTE 01</h1>
    <hr width="80%">
    <div class="container" id="problema01">
        <h2>PROBLEMA 01</h2>
        <form action="" id="cadena" method="POST">
            <div class="row">
                <div class="col">
                    <label for="">Ingresar texto:</label>
                </div>
                <div class="col">
                    <input type="text" class="form-control" id="inputEntrada" name="inputEntrada">
                </div>
                <div class="col">
                    <button class="btn btn-success" type="submit" id="cambiar">
                        <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-caret-right-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12.14 8.753l-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
                        </svg>
                        Ejecutar
                    </button>
                </div>
                <div class="col">
                   <output id="salida">Respuesta aquí</output>
                </div>
            </div>
        </form>
    </div>
    <hr width="80%">
    <div class="container">
        <h2>PROBLEMA 02</h2>
        <div class="row">
            <div class="col" id="padre">
                <div class="row">
                    <div class="col">
                        <label for="">Numeros:</label>
                    </div>
                    <div class="col">
                        <input type="text" id="entradaRango" class="form-control" onkeypress="KeyBackspace();">
                    </div>
                    <div class="col">
                        <button class="btn btn-success" id="generar">
                            <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-caret-right-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.14 8.753l-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
                            </svg>    
                            Generar
                        </button>
                    </div>
                </div>
            </div>
            <div class="col">
                <p>Arreglo ordenado: <output id="respuestaOrdenado">Respuesta</output></p>
                <p>Rango: <output id="respuestaRango">Respuesta</output></p>
            </div>
        </div>
    </div>
    <hr width="80%">
    <div class="container" id="problema03">
        <h2>PROBLEMA 04</h2>
        <div class="row">
            <div class="col">
                <label for="">Ingresar datos</label>
                    <div class="row">
                        <div class="col">
                            <label for="">M:</label>
                            <input type="text" class="form-control" id="m">
                        </div>
                        <div class="col">
                            <label for="">P:</label>
                            <input type="text" class="form-control" id="p">
                        </div>
                        <div class="col">
                            <button class="btn btn-success" id="diferir">
                                <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-caret-right-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12.14 8.753l-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
                                </svg>    
                                DIFERIR
                            </button>
                        </div>
                    </div>
            </div>
            <div class="col">
                <p>Binario M: <output id="binario1"></output></p>
                <p>Binario P: <output id="binario2"></output></p>
            </div>
        </div>        
    </div>

    <script type="text/javascript" src = "https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> 
    <script src="js/cadena.js"></script>
    <script src="js/rango.js"></script>
    <script src="js/diferir.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>