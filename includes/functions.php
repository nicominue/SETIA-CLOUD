<?php 

function obtenerSocios() : string {
    try {
        //Importar la conexión
        require "./config/database.php";

        //Escribir query SQL
        $sql = "SELECT * FROM db_setia.socios;";
        $consulta = mysqli_query($db, $sql);

        //Array para servicios con el front
        $servicios = [];

        $i = 0;

       //Resultados de la query
       while( $row = mysqli_fetch_assoc($consulta)) {  
        $servicios[$i]['id'] = $row['id']; 
        $servicios[$i]['nombre'] = $row['nombre']; 
        $servicios[$i]['apellido'] = $row['apellido']; 
        $servicios[$i]['domicilio'] = $row['domicilio']; 
        $servicios[$i]['telefono'] = $row['telefono'];
        $servicios[$i]['codigo_ciudad'] = $row['codigo_ciudad']; 
        $servicios[$i]['codigo_provincia'] = $row['codigo_provincia'];
        $servicios[$i]['codigo_socio'] = $row['codigo_socio']; 

        $i++;

       }
        
       echo "<pre>";
       var_dump ( ( $servicios));
       echo "</pre>";
    // return $servicios; 
       
    

    } catch (\Throwable $th) {
        //throw $th;

        var_dump($th);
    }
}

obtenerSocios();

function incluirTemplate( string  $nombre, bool $inicio = false ) {
    include TEMPLATES_URL . "/${nombre}.php"; 
}