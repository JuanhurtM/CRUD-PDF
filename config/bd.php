<?php

function conexion(){
    
    $user = 'Mydbuser';
    $pass = 'Mypassword';
    $dataBase = 'Database';

    $con=mysqli_connect('localhost',$user,$pass,$dataBase);
    return $con;
}

?>