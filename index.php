<?php
/**
 * Created by PhpStorm.
 * User: brlaranjeira
 * Date: 25/09/18
 * Time: 19:45
 */
?>
<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/index.css">
    <title>Document</title>
</head>
<body style="margin: 0;width: 100vw">
<div class="m-0 p-0 container-fluid">

    <!--HEADER SPOILER -->
    <section class="m-0 p-0" id="header-section"></section>


    <!--DESTAQUES-->

    <div style="width: 100vw" id="div-carousel" class="m-0 p-0 carousel slide carousel-fade" data-ride="carousel">
        <ul class="carousel-indicators">
            <li data-target="#div-carousel" data-slide-to="0" class="active"></li>
            <li data-target="#div-carousel" data-slide-to="1"></li>
            <li data-target="#div-carousel" data-slide-to="2"></li>
        </ul>
        <?php
            $caption =
                '<div class="mb-5 pb-5 carousel-caption d-none d-md-block">
                    <div class="row mx-5 px-5 mb-5">
                        <div class="col ">
                            <div class="box">MODA URBANA</div>
                        </div>
                        <div class="col ">
                            <div class="box">FITNESS - PRAIA</div>
                        </div>
                    </div>
                </div>';
        ?>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="carousel-image" src="./img/carr-1.jpg" alt="Los Angeles"/>
                <?=$caption?>
            </div>
            <div class="carousel-item">
                <img class="carousel-image" src="./img/carr-2.jpg" alt="Los Angeles" />
                <?=$caption?>
            </div>
            <div class="carousel-item">
                <img class="carousel-image" src="./img/carr-3.jpg" alt="Los Angeles" />
                <?=$caption?>
            </div>
        </div>
    </div>


    <div id="div-destaques" class="d-flex flex-column">
        <div id="destaques-imagens" class="row">

            <div class="col-6 offset-3 d-flex justify-content-around align-items-center">
                <span class="span-arrow"><</span>
                <img src="./img/galeria/1.jpg" class="img-fluid img-destaque" alt="">
                <img src="./img/galeria/2.jpg" class="img-fluid img-destaque" alt="">
                <img src="./img/galeria/3.jpg" class="img-fluid img-destaque" alt="">
                <img src="./img/galeria/2.jpg" class="img-fluid img-destaque" alt="">
                <span class="span-arrow">></span>
            </div>

        </div>
        <div class="row" style="flex-grow: 1">
            <div class="col d-flex justify-content-center">
                <span class="align-self-baseline px-3 py-1" style=" background-color: #aa3d4d; color: #171717; font: normal normal 700 17px/1.4em brandon-grot-w01-light,sans-serif;">Ver Mais</span>
            </div>
        </div>
    </div>

    <section id="section-about">


    </section>

</div>
</body>
<script language="ecmascript" type="application/ecmascript" src="./js/jquery.min.js"></script>
<script language="ecmascript" type="application/ecmascript" src="./js/popper.min.js"></script>
<script language="ecmascript" type="application/ecmascript" src="./js/bootstrap.min.js"></script>
<script>
    /*$(document).ready(() => {
        const $img = $('<img src="./img/galeria/1.jpg"></img>');
        $('#destaques-imagens').append($img);
    });*/
</script>
</html>

