<?php 

    $id=$_GET['id'];

    include 'models/archivo.php';
    include 'config/bd.php';

    $conexion=conexion();
    $datos=datos($conexion,$id);
    $nombre=$datos['nombre'];
    $categoria=$datos['categoria'];
    $titulo=$nombre.'.'.$categoria;
    $tipo=$datos['tipo'];
    $archivo=$datos['archivo'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <div class="container">
            <form class="m-auto w-50 mt-2 mb-2" method="POST" enctype="multipart/form-data" action="controllers/editar.php">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <h3 class="text-center"><?php echo $titulo; ?></h3>
                <div class="mb-4">
                    <label class="form-label">Nombre del archivo</label>
                    <input class='form-control form-control' type="text" name="nombreArchivo" value="<?php echo $nombre ;?>">
                </div>
                <div class="mb-4">
                    <label class="form-label">Selecciona un archivo</label>
                    <input class='form-control form-control' type="file" name="archivo">
                </div>
                <button class="btn btn-dark">Actualizar archivo</button>
                <a class="btn btn-warning btn" href="index.php">Regresar</a>
            </form>
            <div class="m-auto w-75 mt-4 text-center">
                <?php 
                    $valor="";
                    if($categoria=='pdf'){
                        $valor="<iframe class='w-100' height='500' src='data:".$tipo.";base64,".base64_encode($archivo)."' frameborder='0'></iframe>";
                    }                   
                    echo $valor;
                
                ?>
            </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>