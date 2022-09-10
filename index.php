<?php 
include('configuracion/configuracion.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $S_TITULO; ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <?php include('css/estilo.php'); ?>
</head>

<body class="body">
    <?php
    include('configuracion/header.php'); ?>

        <div class="container">
            <div class="sobre-mi">
                <h1> <b>Hola, soy Ezequiel; un gusto en conocerte.</b></h1>
            </div>
        </div>
        <div class="container-2">
            <h2><b>Acerca de mi</b></h2>
            <div class="sobre-mi-info">
                <section class="contenido"><h5>Soy de San Martín, Mendoza (Argentina).
                    <div class="img img-1"></div>
                </section>
                <section class="contenido"><h5>Mi título es Téc. Sup. en Comp. y Redes.
                    <div class="img img-2"></div>    
                </section>
                <section class="contenido"><h5>Actualmente estudio Desarrollo Web FS.
                    <div class="img img-3"></div>    
                </section>
            </div>
        </div>
        <div class="container-3">
            <div class="te-invito">
                <h3><b>Te invito a ver mis <a href="#">proyectos</a></b></h3>
            </div>
        </div>


    <?php
    include('configuracion/footer.php');
?>
<?php include('js/script.php')?>
</body>
</html>
