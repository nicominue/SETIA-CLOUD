<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Protegiendo tu Salud · OSETYA</title>
    <link rel="stylesheet" href="/build/css/app.css">
</head>
<body>
    
    <header class="header <?php echo $inicio  ? 'inicio' : ''; ?>">
        <div class="contenedor contenido-header">
            <div class="barra">
                <a href="/">
                <img src="/build/img/logoOsetya.webp" alt="Logotipo de OSETYA"> 
                </a>

                <div class="mobile-menu">
                    <img src="/build/img/barras.svg" alt="icono menu responsive">
                </div>

                <div class="derecha">
                   
                    <nav class="navegacion">
                        <a href="login.html">Mi OSETYA</a>
                        <a href="nosotros.html">Nosotros</a>
                        <a href="contacto.html">Contacto</a>
                    </nav>
                   
                </div>
                
            </div> <!--.barra-->

            <?php  echo $inicio ? "<h1></h1>" : ''; ?>
        </div>
    </header>