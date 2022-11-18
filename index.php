<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <header>
        <nav class="navbar navbar-dark bg-dark">
            <div class="container-fluid">
                <span class="navbar-brand mb-0 h1">CRUD</span>
            </div>
        </nav>
    </header>
    <div class="container">
        <form class="m-50 w-50 mt-3 mb-3" method="POST" enctype="multipart/form-data" action="controllers/insertar.php">
            <div class="mb-4">
                <label class="form-label">Nombre del documento</label>
                <input class='form-control form-control-sm' type="text" name="nombreArchivo">
            </div>
            <div class="mb-4">
                <label class="form-label">Selecciona un documento</label>
                <input class='form-control form-control' type="file" name="archivo">
            </div>
            <button class="btn btn-dark">Subir archivo</button>
        </form>
        <table class="table table-striped">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>NOMBRE</th>
                    <th>CATEGORIA</th>
                    <th>ARCHIVO</th>
                    <th>FECHA</th>
                    <th>ACCIONES</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include 'config/bd.php'; 
                    include 'models/archivo.php';
                    $conexion=conexion();
                    $query=listar($conexion);
                    $contador=0;
                    while($datos=mysqli_fetch_assoc($query)){
                        $contador++;
                        $id=$datos['id'];
                        $nombre=$datos['nombre'];
                        $categoria=$datos['categoria'];
                        $fecha=$datos['fecha'];
                        $archivo=$datos['archivo'];
                        $tipo=$datos['tipo'];

                    $valor="";

                    if($categoria=='pdf'){
                        $valor="<img  width='50' src='img/pdf.png'>";
                    }

                    if($valor==''){
                        $valor="<img  width='50' src='img/desconocido.png'>";
                    }

                    
                ?>
                <tr>
                    <td><?php echo $contador;?></td>
                    <td><?php echo $nombre ;?></td>
                    <td><?php echo $categoria;?></td>
                    <td><a href="cargar.php?id=<?php echo $id; ?>"><?php echo $valor ;?> descargar</a></td>
                    <td><?php echo $fecha ;?></td>
                    <td><a class='btn btn-secondary' href="editar.php?id=<?php echo $id?>">Editar</a> <a class='btn btn-danger' href="controllers/eliminar.php?id=<?php echo $id?>">Eliminar</a></td>
                </tr>
                <?php 
                    }
                ?>
            </tbody>
        </table>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>