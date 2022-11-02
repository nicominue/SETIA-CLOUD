<?php

require 'includes/functions.php';

$servicios = obtenerSocios();

echo json_encode($servicios);

// var_dump($servicios);