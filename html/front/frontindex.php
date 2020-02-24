<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/index_front.css">
    <link rel="stylesheet" href="../css/header_front.css">
    <link rel="stylesheet" href="../css/icofont/icofont.min.css">
    <link rel="stylesheet" href="../css/footer_front.css">
    <title>Accueil</title>
</head>

<body>
    <header class="headercontainer container-fluid">
        <?php require_once('frontheader.php') ?>
    </header>

    <main class="container-fluid p-0">

        <div id="carouselIndicators" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item slide active">
                    <img class="d-block w-100 img-fluid" src="../img/imgslide1" alt="Maison1">
                </div>
                <div class="carousel-item slide">
                    <img class="d-block w-100 img-fluid" src="../img/imgslide2" alt="Maison2">
                </div>
                <div class="carousel-item slide">
                    <img class="d-block w-100 img-fluid" src="../img/imgslide3" alt="Maison3">
                </div>
            </div>
            <a class="carousel-control-prev text-dark" href="#carouselIndicators" role="button" data-slide="prev">
                <span class="arrowcontrol"><i class="fas fa-chevron-left" aria-hidden="true"></i></span>
                <span class="sr-only">Précédent</span>
            </a>
            <a class="carousel-control-next" href="#carouselIndicators" role="button" data-slide="next">
                <span class="arrowcontrol"><i class="fas fa-chevron-right" aria-hidden="true"></i></span>
                <span class="sr-only">Suivant</span>
            </a>
        </div>

        <div class="container-fluid mt-5 text-center">
            <h4 class="titlereassurance">Notre force...</h4>
            <div class="row">
                <div class="d-lg-flex w-75 mx-auto justify-content-center align-items-end">
                    <div class="col-10 col-lg-4 col-xl-3 mx-auto my-3 border-bottom p-0">
                        <span class="sizereassurance">126</span>
                        <p class="textreassurance mx-auto">Nombre d'annonce sur le site</p>
                    </div>
                    <div class="col-10 col-lg-4 col-xl-3 mx-auto my-3 border-bottom p-0">
                        <i class="sizereassurance icofont-chart-histogram-alt"></i>
                        <p class="mt-3 textreassurance mx-auto">Meilleur site</p>
                    </div>
                    <div class="col-10 col-lg-4 col-xl-3 mx-auto my-3 border-bottom p-0">
                        <i class="sizereassurance icofont-euro"></i>
                        <p class="mt-3 textreassurance mx-auto">Proposez votre bien</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row my-3 my-lg-5">

                <div class="col-12 col-lg-4">
                    <div class="row my-3 my-lg-5">
                        <h4 class="col-12 text-center announcetitle"><a href="http://localhost/tom-immo/html/front/frontannounce.php" class="text-decoration-none">Titre annonce</a></h4>
                        <div class="col-12 col-sm-10 col-md-9 col-lg-10 p-0 mx-auto mt-3">
                            <!-- image -->
                            <img class="w-100 img-fluid imgmain" src="../img/img2_.jpg" alt="">
                        </div>
                        <div class="row mx-1 mt-3 d-flex justify-content-center">
                            <div class="col-4 col-sm-3 p-1">
                                <!-- image -->
                                <img class="w-100 img-fluid imgthumbnail" src="../img/img1_.jpg" alt="">
                            </div>
                            <div class="col-4 col-sm-3 p-1">
                                <!-- image -->
                                <img class="w-100 img-fluid imgthumbnail" src="../img/img2_.jpg" alt="">
                            </div>
                            <div class="col-4 col-sm-3 p-1">
                                <!-- image -->
                                <img class="w-100 img-fluid imgthumbnail" src="../img/img3_.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-4">
                    <div class="row my-3 my-lg-5">
                        <h4 class="col-12 text-center announcetitle"><a href="http://localhost/tom-immo/html/front/frontannounce.php" class="text-decoration-none">Titre annonce</a></h4>
                        <div class="col-12 col-sm-10 col-md-9 col-lg-10 p-0 mx-auto mt-3">
                            <!-- image -->
                            <img class="w-100 img-fluid imgmain" src="../img/img2_.jpg" alt="">
                        </div>
                        <div class="row mx-1 mt-3 d-flex justify-content-center">
                            <div class="col-4 col-sm-3 p-1">
                                <!-- image -->
                                <img class="w-100 img-fluid imgthumbnail" src="../img/img1_.jpg" alt="">
                            </div>
                            <div class="col-4 col-sm-3 p-1">
                                <!-- image -->
                                <img class="w-100 img-fluid imgthumbnail" src="../img/img2_.jpg" alt="">

                            </div>
                            <div class="col-4 col-sm-3 p-1">
                                <!-- image -->
                                <img class="w-100 img-fluid imgthumbnail" src="../img/img3_.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-4">
                    <div class="row my-3 my-lg-5">
                        <h4 class="col-12 text-center announcetitle"><a href="http://localhost/tom-immo/html/front/frontannounce.php" class="text-decoration-none">Titre annonce</a></h4>
                        <div class="col-12 col-sm-10 col-md-9 col-lg-10 p-0 mx-auto mt-3">
                            <!-- image -->
                            <img class="w-100 img-fluid imgmain" src="../img/img2_.jpg" alt="">
                        </div>
                        <div class="row mx-1 mt-3 d-flex justify-content-center">
                            <div class="col-4 col-sm-3 p-1">
                                <!-- image -->
                                <img class="w-100 img-fluid imgthumbnail" src="../img/img1_.jpg" alt="">
                            </div>
                            <div class="col-4 col-sm-3 p-1">
                                <!-- image -->
                                <img class="w-100 img-fluid imgthumbnail" src="../img/img2_.jpg" alt="">

                            </div>
                            <div class="col-4 col-sm-3 p-1">
                                <!-- image -->
                                <img class="w-100 img-fluid imgthumbnail" src="../img/img3_.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </main>

    <footer class="container-fluid">
        <?php require_once('footer.php'); ?>
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/1de34be0f9.js" crossorigin="anonymous"></script>
    <script src="../js/frontheader.js"></script>
    <script src="../js/frontindex.js"></script>
    <script src="../js/frontfoot.js"></script>
</body>

</html>