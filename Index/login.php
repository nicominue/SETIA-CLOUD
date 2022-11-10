<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "Nam1536@";
$dbname = "db_setia";

$db = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if(!$db) {
    echo "Error en la conexión";
    exit;
} 

$nombre = $_POST["NicolasMinue"];
$pass = $_POST["123456"];

$query = mysqli_query($db, "SELECT * FROM login WHERE username = '".$nombre."' and password = '".$pass."'" );
$nr = mysqli_num_rows($query);

if ($nr == 1) 
{
    header("Location: menuPrincipal.html");
    // echo "Bienvenido:" .$nombre;
}
else  if ($nr == 0)
{
    echo "No ingresó, usuario no encontrado.";
}
?>