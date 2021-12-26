<?php

$host  = 'localhost';
$user = 'root';
$password = '';
$database = 'decathlon_db';

$conection = mysqli_connect($host, $user, $password, $database);

// if(!$conection){
//     echo 'Error: ' . mysqli_connect_errno();
// }else{
//     echo 'Conectado correctamente';
// }