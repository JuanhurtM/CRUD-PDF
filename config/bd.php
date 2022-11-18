<?php

function conexion(){
    
    $user = 'juanjose';
    $pass = 'ROOT';
    $dataBase = 'documents';

    $con=mysqli_connect('localhost',$user,$pass,$dataBase);
    return $con;
}

?>