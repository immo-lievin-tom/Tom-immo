<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/header_front.css">
    <link rel="stylesheet" href="../css/category_front.css">
    <link rel="stylesheet" href="../css/icofont/icofont.min.css">
    <title>Catégorie title</title>
</head>

<body>
    <header class="headercontainer container-fluid">
        <?php require_once('frontheader.php') ?>
    </header>

    <main class="container-fluid">
        <div class="row">

            <!-- Title category -->

            <h2 class="col-12 text-center my-4">Titre de catégorie</h2>

            <!-- Filter -->

            <div class="col-12 mx-auto txtfilter mb-3">
                <div class="row mx-auto">
                    <div class="col-12 col-lg-4 d-flex flex-column justify-content-center align-items-center">
                        <div>
                            <input type="checkbox" id="sale" name="sale">
                            <label for="sale">Achat</label>
                        </div>
                        <div>
                            <input type="checkbox" id="rent" name="rent">
                            <label for="rent">Location</label>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 d-lg-flex align-items-center justify-content-around check">

                        <div class="m-2 position-relative">
                            <i class="icofont-court icofont-2x"></i>
                            <input class="position-absolute checkfilter" type="checkbox" id="apartment" name="apartment">
                        </div>

                        <div class="m-2 position-relative">
                            <i class="icofont-building-alt icofont-2x"></i>
                            <input class="position-absolute checkfilter" type="checkbox" id="house" name="house">
                        </div>

                        <div class="m-2 position-relative">
                            <i class="icofont-tree icofont-2x"></i>
                            <input class="position-absolute checkfilter" type="checkbox" id="garden" name="garden">
                        </div>

                    </div>

                    <div class="col-12 col-lg-4 text-center d-lg-block inputfilter">
                        <div class="row">
                            <div class="col-12 col-lg-6 form-group">
                                <label for="city">Ville</label>
                                <input type="text" class="form-control w-75 mx-auto" id="city" name="city">
                            </div>
                            <div class="col-12 col-lg-6 form-group">
                                <label for="surface">Surface</label>
                                <input type="number" class="form-control w-75 mx-auto" id="surface" name="surface">
                            </div>
                            <div class="col-12 col-lg-6 form-group">
                                <label for="minprice">Prix min</label>
                                <input type="number" class="form-control w-75 mx-auto" id="minprice" name="minprice">
                            </div>
                            <div class="col-12 col-lg-6 form-group">
                                <label for="maxprice">Prix max</label>
                                <input type="number" class="form-control w-75 mx-auto" id="maxprice" name="maxprice">
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-outline-dark d-lg-none mx-auto filterbtn">Plus de filtres</button>
                </div>
            </div>

            <!-- List of announce -->

            <div class="col-12 col-sm-10 col-md-8 col-lg-4 mx-auto text-center announcecat position-relative">
                <img src="../img/img1_.jpg" class="w-100 img-fluid imgcategory" alt="">
                <div class="txtdescannounce position-absolute mx-auto d-flex align-items-center">
                    <p class="mx-auto p-3 descannounce">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis doloribus, accusamus...<a href="#">Plus d'infos</a></p>
                </div>
                <div class="px-2 text-left txtsub">
                    <p class="mt-2">Titre annonce</p>
                    <p>Référence : <span>FDC899964</span></p>
                    <p><i class="icofont-location-pin mr-1"></i>Lieu : <span>Lièvin</span></p>
                    <p>Prix : <span class="price">125 000</span> €</p>
                </div>
            </div>
            <div class="col-12 col-sm-10 col-md-8 col-lg-4 mx-auto text-center announcecat position-relative">
                <img src="../img/img2_.jpg" class="w-100 img-fluid imgcategory" alt="">
                <div class="txtdescannounce position-absolute mx-auto d-flex align-items-center">
                    <p class="mx-auto p-3 descannounce">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis doloribus, accusamus...<a href="#">Plus d'infos</a></p>
                </div>
                <div class="px-2 text-left txtsub">
                    <p class="mt-2">Titre annonce</p>
                    <p>Référence : <span>FDC899964</span></p>
                    <p><i class="icofont-location-pin mr-1"></i>Lieu : <span>Lièvin</span></p>
                    <p>Prix : <span class="price">125 000</span> €</p>
                </div>
            </div>
            <div class="col-12 col-sm-10 col-md-8 col-lg-4 mx-auto text-center announcecat position-relative">
                <img src="../img/img3_.jpg" class="w-100 img-fluid imgcategory" alt="">
                <div class="txtdescannounce position-absolute mx-auto d-flex align-items-center">
                    <p class="mx-auto p-3 descannounce">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis doloribus, accusamus...<a href="#">Plus d'infos</a></p>
                </div>
                <div class="px-2 text-left txtsub">
                    <p class="mt-2">Titre annonce</p>
                    <p>Référence : <span>FDC899964</span></p>
                    <p><i class="icofont-location-pin mr-1"></i>Lieu : <span>Lièvin</span></p>
                    <p>Prix : <span class="price">125 000</span> €</p>
                </div>
            </div>
            <div class="col-12 col-sm-10 col-md-8 col-lg-4 mx-auto text-center announcecat position-relative">
                <img src="../img/img1_.jpg" class="w-100 img-fluid imgcategory" alt="">
                <div class="txtdescannounce position-absolute mx-auto d-flex align-items-center">
                    <p class="mx-auto p-3 descannounce">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis doloribus, accusamus...<a href="#">Plus d'infos</a></p>
                </div>
                <div class="px-2 text-left txtsub">
                    <p class="mt-2">Titre annonce</p>
                    <p>Référence : <span>FDC899964</span></p>
                    <p><i class="icofont-location-pin mr-1"></i>Lieu : <span>Lièvin</span></p>
                    <p>Prix : <span class="price">125 000</span> €</p>
                </div>
            </div>
            <div class="col-12 col-sm-10 col-md-8 col-lg-4 mx-auto text-center announcecat position-relative">
                <img src="../img/img2_.jpg" class="w-100 img-fluid imgcategory" alt="">
                <div class="txtdescannounce position-absolute mx-auto d-flex align-items-center">
                    <p class="mx-auto p-3 descannounce">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis doloribus, accusamus...<a href="#">Plus d'infos</a></p>
                </div>
                <div class="px-2 text-left txtsub">
                    <p class="mt-2">Titre annonce</p>
                    <p>Référence : <span>FDC899964</span></p>
                    <p><i class="icofont-location-pin mr-1"></i>Lieu : <span>Lièvin</span></p>
                    <p>Prix : <span class="price">125 000</span> €</p>
                </div>
            </div>
            <div class="col-12 col-sm-10 col-md-8 col-lg-4 mx-auto text-center announcecat position-relative">
                <img src="../img/img3_.jpg" class="w-100 img-fluid imgcategory" alt="">
                <div class="txtdescannounce position-absolute mx-auto d-flex align-items-center">
                    <p class="mx-auto p-3 descannounce">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis doloribus, accusamus...<a href="#">Plus d'infos</a></p>
                </div>
                <div class="px-2 text-left txtsub">
                    <p class="mt-2">Titre annonce</p>
                    <p>Référence : <span>FDC899964</span></p>
                    <p><i class="icofont-location-pin mr-1"></i>Lieu : <span>Lièvin</span></p>
                    <p>Prix : <span class="price">125 000</span> €</p>
                </div>
            </div>
            <div class="col-12 col-sm-10 col-md-8 col-lg-4 mx-auto text-center announcecat position-relative">
                <a href="#"><img src="../img/img1_.jpg" class="w-100 img-fluid imgcategory" alt=""></a>
    
                <div class="txtdescannounce position-absolute mx-auto ex align-items-center">
                    <p class="mx-auto p-3 descannounce">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis doloribus, accusamus...<a href="#">Plus d'infos</a></p>
                </div>
                <div class="px-2 text-left txtsub">
                    <p class="mt-2">Titre annonce</p>
                    <p>Référence : <span>FDC899964</span></p>
                    <p><i class="icofont-location-pin mr-1"></i>Lieu : <span>Lièvin</span></p>
                    <p>Prix : <span class="price">125 000</span> €</p>
                </div>
            </div>
            <div class="col-12 col-sm-10 col-md-8 col-lg-4 mx-auto text-center announcecat position-relative">
                <img src="../img/img2_.jpg" class="w-100 img-fluid imgcategory" alt="">
                <div class="txtdescannounce position-absolute mx-auto d-flex align-items-center">
                    <p class="mx-auto p-3 descannounce">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis doloribus, accusamus...<a href="#">Plus d'infos</a></p>
                </div>
                <div class="px-2 text-left txtsub">
                    <p class="mt-2">Titre annonce</p>
                    <p>Référence : <span>FDC899964</span></p>
                    <p><i class="icofont-location-pin mr-1"></i>Lieu : <span>Lièvin</span></p>
                    <p>Prix : <span class="price">125 000</span> €</p>
                </div>
            </div>
            <div class="col-12 col-sm-10 col-md-8 col-lg-4 mx-auto text-center announcecat position-relative">
                <img src="../img/img3_.jpg" class="w-100 img-fluid imgcategory" alt="">
                <div class="txtdescannounce position-absolute mx-auto d-flex align-items-center">
                    <p class="mx-auto p-3 descannounce">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis doloribus, accusamus...<a href="#">Plus d'infos</a></p>
                </div>
                <div class="px-2 text-left txtsub">
                    <p class="mt-2">Titre annonce</p>
                    <p>Référence : <span>FDC899964</span></p>
                    <p><i class="icofont-location-pin mr-1"></i>Lieu : <span>Lièvin</span></p>
                    <p>Prix : <span class="price">125 000</span> €</p>
                </div>
            </div>
        </div>

    </main>

    <footer class="headercontainer container-fluid">

    </footer>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/1de34be0f9.js" crossorigin="anonymous"></script>
    <script src="../js/frontheader.js"></script>
    <script src="../js/frontcategory.js"></script>
</body>

</html>