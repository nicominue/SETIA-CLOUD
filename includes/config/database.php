<?php 

$db = mysqli_connect('localhost', 'root', 'Nam1536@', 'db_setia');

if(!$db) {
    echo "Error en la conexión";
    exit;
} 
