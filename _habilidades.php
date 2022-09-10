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
<div class="skills-container">
    <div class="skills-container-in">
        <div class="skills-caja">
            <div class="skills-name"><b>HTML5</b></div>
            <div class="skills-image"><img src="data:image/png;base64,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"/>
            </div>
        </div>
        <div class="skills-caja">
            <div class="skills-name"><b>CSS3</b></div>
            <div class="skills-image"><img src="data:image/png;base64,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"/>
            </div>
        </div>
        <div class="skills-caja">
            <div class="skills-name"><b>PHP</b></div>
            <div class="skills-image"><img src="data:image/png;base64,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"/>
            </div>
        </div>
        <div class="skills-caja">
            <div class="skills-name"><b>Bootstrap</b></div>
            <div class="skills-image"><img src="data:image/png;base64,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"/>
            </div>
        </div>
        <div class="skills-caja">
            <div class="skills-name"><b>Github</b></div>
            <div class="skills-image"><img src="data:image/png;base64,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"/>
            </div>
        </div>
        <div class="skills-caja">
            <div class="skills-name"><b>VSC</b></div>
            <div class="skills-image"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJYAAACWCAYAAAA8AXHiAAAGfUlEQVR4Xu2cgVHUQBhGc1SgHdCB2sHd2IBWIFSgVCBUIFYgVqANOMEKpAMpARsg7s9yA3dcspvd/ZIFXmZOBi/5svvuzW7u34RFwwYBAYGFIJNICDSIhQQSAoglwUooYuGAhEDdYrXda9frD+514F4XzXXzu3m7OJaQILQogXrFarul6+kP93qxo8enzWpxVJQEYUUJ1ClW231yvfzcI9V9AAhWVIdyYfWJFS/VpmBN89WNYpfl0JCUQ6AusX51x83ezUiVup26AxEslV7B4+oQq+3sOurL7UV6fveumxMu8vMx5iTML1Zpqe5oHLqp8SwHDsemE5hXLC/VN/d6l96F3iOvnFgvBblERhCYTywvlZUTlhHtTNtltZivf2ktfjJHzQPeFz5Nqn0pScSS4h0Kn16sqaSyXiPWMxFruJpeHgJilWcamRgesXzB0tbrLt3rxI0CF5HZm7u13YH7Dysp7FqiSYoMHoRYQUSqHfrF6i8DHDm5rBAZv6VV07fzr0ZLiVjxn1HhPXeLFS4DnDu5VlFt8VLZSJW6mVBH7s6G/dFVecRKZZ593G6x4pZW7ANfDU6NbWdCmVipm02772/WAOPatHkexErlnn1c34j11yXvR6Y/nBrLVNNturVrOhO4QazIT6OS3frEGjvSnN+OLFdNeBoNdd1PfdvLMYxYIW5VvT90jdW6llohM3YzIQ7dy75Bpi7R3E1922dFrNjPoYr9hssNbWdyLSdq6ebUh1gTYdecJqaOZYvEB5rT36TunvoQS4hcHx0Wy9qQ/+2uryc29dntLeGiK1Oh3oaCZ4gTy06Y8sEON/TMvW0X6f5bX2hLOT/lhhBV2fvxYvmRa2n/ZrbGRLIywrjqPWJlYp/28HFi5csVP/VxjTWtCYXPNl6slJFjs9Hj1xpTp2KmwsK6xMfFi+ULn/YETc4SzbplZ24qtJpX/JYiNGLF8y28Z5xYZZZotps+blpErMIfvTYuLFb+Ek2oB3FP0yBWiGNV74cq7/oHHjyO8KPyiFWVOKHGDN3oN80DD3ct7F8n5OI99DlW937fInSKVOeud3ZB/jHzAn/31MiIVZ08Qw3qE8sezYq/Q8Eead+7mc7S753abOXDqRGxnoRYf1wvYm6Z8bfKrBY/H/Q6RYTNkM2pMSWPcsNsMvaNWDZa2ag1tPmpb+hPB5VZArJbk38mrVUiVmVihS+Wh++dut+dMnKduocp/vEwxWyejD5xqNxw4BLtfqz1Fnfv1HYz/NPPtnht5YvpNkas6VhvnSmmQGpS2Dc92+yuhMuk1rbd/q1c9nOaDbGm4bzjLGGxSjbNV/HH3kuf3gLESmeXeeS0Ylljp/jzRWsoiJWpR/rh04u1busUD2ogVroZmUfOJ5YfvbQPaiBWph7ph88rlpdr7MOxsb29cF803sTuzH5lCcwvlvUnpao+zCGtLFKW7bNOq0MsP3Itb78x5n4g5y7A/tb7w2Wm3GSOjyZQj1j5cplQVmezn2wzE6hLLC/X2Cq9iWQPaIQfep0Z9nM6fX1ixcuFUBWbWqdYXq6+Kj1CVSzUumn1irVuof/G+Mr9eule35nyHoFVron1i/U4ONLKLQKIhRISAoglwUooYuGAhABiSbASilg4ICGAWBKshCIWDkgIIJYEK6GIhQMSAoglwUooYuGAhABiSbASilg4ICGAWBKshCIWDkgIIJYEK6GIhQMSAoglwUooYuGAhABiSbASilg4ICGAWBKshCIWDkgIIJYEK6GIhQMSAoglwUooYuGAhABiSbASilg4ICGAWBKshCIWDkgIIJYEK6GIhQMSAoglwUooYuGAhABiSbASilg4ICGAWBKshCIWDkgIIJYEK6GIhQMSAoglwUooYuGAhABiSbASilg4ICGAWBKshCIWDkgIIJYEK6GIhQMSAoglwUooYuGAhABiSbASilg4ICGAWBKshCIWDkgIIJYEK6GIhQMSAoglwUooYuGAhABiSbASilg4ICGAWBKshCIWDkgIIJYEK6GIhQMSAoglwUooYuGAhABiSbASilg4ICGAWBKshCIWDkgIIJYEK6GIhQMSAoglwUooYuGAhABiSbASilg4ICGAWBKshCIWDkgIIJYEK6GIhQMSAoglwUooYuGAhABiSbASilg4ICGAWBKshCIWDkgIIJYEK6GIhQMSAoglwUooYuGAhABiSbASilg4ICGAWBKshP4H9CxTpr1GewQAAAAASUVORK5CYII="/>
            </div>
        </div>
        <div class="skills-caja">
            <div class="skills-name"><b>Git</b></div>
            <div class="skills-image"><img src="data:image/png;base64,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"/>
            </div>
        </div>
        <div class="skills-caja">
            <div class="skills-name"><b>Javascript</b></div>
            <div class="skills-image"><img src="data:image/png;base64,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"/>
            </div>
        </div>
        <div class="skills-caja">
            <div class="skills-name"><b>PhpMyAdmin</b></div>
            <div class="skills-image"><img class="img-res"src="https://cdn.icon-icons.com/icons2/2699/PNG/512/phpmyadmin_logo_icon_168906.png"/>
            </div>
        </div>
        <div class="skills-caja">
            <div class="skills-name"><b>SQL</b></div>
            <div class="skills-image"><img class="img-res" src="https://cdn.icon-icons.com/icons2/2107/PNG/512/file_type_sql_icon_130152.png"/>
            </div>
        </div>
        <div class="skills-caja">
            <div class="skills-name"><b>Xampp</b></div>
            <div class="skills-image"><img class="img-res" src="https://cdn.icon-icons.com/icons2/1381/PNG/512/xampp_94513.png"/>
            </div>
        </div>
        <div class="skills-caja">
            <div class="skills-name"><b>Grunt</b></div>
            <div class="skills-image"><img class="img-res" src="https://cdn.icon-icons.com/icons2/2415/PNG/512/grunt_original_logo_icon_146488.png"/>
            </div>
        </div>
        
    </div>
</div>
    </div>
    <?php
    include('configuracion/footer.php');
    include('js/script.php')?>
</body>
</html>
