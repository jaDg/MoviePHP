<!DOCTYPE html>
<html lang="es">

<head>

    <!-- Bootstrap Core JavaScript -->
   
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Shop Homepage - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- plugins -->
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" type="text/css" href="css/owl.theme.green.min.css">
    <!-- Custom CSS -->
    <link href="css/shop-homepage.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
        <?php 
        include "connection.php";
        include "defaultnavbar.php";
        ?>
</head>
<body>


    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-md-3">
                <p class="lead">Shop Name</p>
                <div class="list-group">
                    <a href="#" class="list-group-item">Category 1</a>
                    <a href="#" class="list-group-item">Category 2</a>
                    <a href="#" class="list-group-item">Category 3</a>
                </div>
            </div>

            <div class="col-md-9">

                <div id="sliderhome" class="owl-carousel owl-theme">
                    <div class="item pelicula">
                        <a href="#" title="Titulo de la peli" class="pelink">
                            <figure>
                                <img class="img-responsive" src="img/peliculas/1.jpg">
                                <figcaption>
                                    <div class="caption_content">
                                        <h3 class="movie_title">
                                            Lorem ipsum dolor sit
                                        </h3>
                                        <p>hola</p>
                                        <a href=""> caca</a>
                                    </div>
                                </figcaption>
                            </figure>
                        </a>
                    </div>

                    
                </div>

                <!--<div class="row carousel-holder">

                    <div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img class="slide-image" src="http://placehold.it/800x300" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="http://placehold.it/800x300" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="http://placehold.it/800x300" alt="">
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>

                </div>-->
                <?php 
                    $result = mysqli_query($connect,"SELECT p.nombre, p.sinopsis, p.anio, g.genero, p.contenidoimagen, p.tipoimagen FROM peliculas p INNER JOIN generos g ON (p.generos_id = g.id);");
                    while($catalogo = mysqli_fetch_array($result)){
                        $image_data = $catalogo["contenidoimagen"];
                        $encoded_image = base64_encode($image_data);
                        //You dont need to decode it again.
 
                        $Hinh = "<img src='data:image/jpeg;base64,{$encoded_image}' alt=\"\">";
 
                        //and you echo $Hinh



                ?>
                <div class="row">

                    <div class="col-xs-12 col-sm-6 col-md-12">
                        <div class="thumbnail">
                            <img> <?php echo $Hinh; ?> </img>
                            <div class="caption">
                                <h4 class="pull-right"> <?php echo $catalogo["anio"]; ?> </h4>
                                <h4><a href="#"><?php echo $catalogo["nombre"]; ?></a>
                                <p></p>
                                <p class="text-muted"> <?php echo $catalogo["genero"]; ?>  </p>
                                </h4>
                                <p> <?php echo $catalogo["sinopsis"]; ?> </p>
                            </div>
                            <div class="ratings">
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                    </div>
                    <?php
                    }
                    ?>

                    <!--<div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </div> 
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </div> 
                    </div>-->
                    <!--<div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-4">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </div> 
                        <div class="col-xs-12 col-sm-6 col-md-4">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </div>-->
                        <!--<div class="col-xs-12 col-sm-6 col-md-4">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </div> 
                    </div>-->
                

            </div>

        </div>

    </div>
    <!-- /.container -->

    <div class="container">

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <!-- plugins -->
    <script src="js/owl.carousel.min.js"></script>
    <script type="text/javascript">
        $('#sliderhome').owlCarousel({
            loop:true,
            margin:10,
            nav:false,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:1
                },
                1000:{
                    items:3
                },
                autoplay:true,
                autoplayTimeout:1000,
                autoplayHoverPause:true
            }
        });

        var $nav = $('#nav');
        $(window).scroll(function(){
            var scroll = $(window).scrollTop();
            console.log(scroll);
            if (scroll > 100) {
                $nav.addClass('navbar-fixed-top');
            }else{
                $nav.removeClass('navbar-fixed-top');
            }
        });
    </script>

</body>

</html>
