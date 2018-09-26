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


    <!--CAROUSEL-->
    <div style="width: 100vw" id="div-carousel" class="m-0 p-0 carousel slide" data-ride="carousel">

        <ul class="carousel-indicators">
            <li data-target="#div-carousel" data-slide-to="0" class="active"></li>
            <li data-target="#div-carousel" data-slide-to="1"></li>
            <li data-target="#div-carousel" data-slide-to="2"></li>
        </ul>

        <div class="carousel-inner">
            <div class="carousel-item active" style="">
                <img class="carousel-image" src="./img/carr-1.jpg" alt="Los Angeles">
            </div>
            <div class="carousel-item">
                <img class="carousel-image" src="./img/carr-2.jpg" alt="Los Angeles">
            </div>
            <div class="carousel-item">
                <img class="carousel-image" src="./img/carr-3.jpg" alt="Los Angeles">
            </div>
        </div>

    </div>



</div>
</body>
<script language="ecmascript" type="application/ecmascript" src="./js/jquery.min.js"></script>
<script language="ecmascript" type="application/ecmascript" src="./js/popper.min.js"></script>
<script language="ecmascript" type="application/ecmascript" src="./js/bootstrap.min.js"></script>
</html>
