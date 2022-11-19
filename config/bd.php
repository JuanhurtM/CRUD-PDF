<?php

function conexion(){
    
    $user = 'MyUser';
    $pass = 'MyPassword';
    $dataBase = 'DataBase';

    $con=mysqli_connect('localhost',$user,$pass,$dataBase);
    return $con;
}

?>