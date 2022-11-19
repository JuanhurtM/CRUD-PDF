<?php 

#Listar Archivos
function listar($conexion){
    $sql="SELECT * FROM archivo";
    $query=mysqli_query($conexion,$sql);
    return $query;
}

#Insetar Archivos
function insertar($conexion,$nombre,$categoria,$fecha,$tipo,$archivoBLOB){
    $sql="INSERT INTO archivo(nombre,categoria,fecha,tipo,archivo) VALUES('$nombre','$categoria','$fecha','$tipo','$archivoBLOB')";
    $query=mysqli_query($conexion,$sql);
    return $query;
}

#Eliminar Eliminar
function eliminar($conexion,$id){
    $sql="DELETE from archivo WHERE id=$id";
    $query=mysqli_query($conexion,$sql);
    return $query;
}


function datos($conexion,$id){
    $sql="SELECT * FROM archivo WHERE id=$id";
    $query=mysqli_query($conexion,$sql);
    $datos=mysqli_fetch_assoc($query);
    return $datos;
}

#Editar Archivo
function editarNombre($conexion,$id,$nombre){
    $sql="UPDATE archivo SET nombre='$nombre' WHERE id=$id";
    $query=mysqli_query($conexion,$sql);
    return $query;
}

function editarArchivo($conexion,$id,$categoria,$tipo,$fecha,$archivoBLOB){
    $sql="UPDATE archivo SET categoria='$categoria',tipo='$tipo',fecha='$fecha',archivo='$archivoBLOB' WHERE id=$id";
    $query=mysqli_query($conexion,$sql);
    return $query;
}

function editar($conexion,$id,$nombre,$categoria,$tipo,$fecha,$archivoBLOB){
    $sql="UPDATE archivo SET nombre='$nombre', categoria='$categoria',tipo='$tipo',fecha='$fecha',archivo='$archivoBLOB' WHERE id=$id";
    $query=mysqli_query($conexion,$sql);
    return $query;
}

?>