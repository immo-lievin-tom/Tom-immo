<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/announce_front.css">
    <link rel="stylesheet" href="../css/header_front.css">
    <link rel="stylesheet" href="../css/icofont/icofont.min.css">
    <title>Annonce titre</title>
</head>

<body>

    <header class="headercontainer container-fluid">
        <?php require_once('frontheader.php') ?>
    </header>

    <main class="container-fluid">

        <!-- Title image and thumbnail -->

        <div class="row text-center w85 mx-auto imgcontain position-relative d-xl-flex justify-content-center">
            <h1 class="w-100 announcetitle my-3">Titre de l'annonce</h1>
            <div id="carouselIndicators" class="carousel slide col-12 mx-auto p-0" data-ride="carousel" data-interval="false">
                <div class="carousel-inner slidecontain">
                    <div class="carousel-item active">
                        <img class="w-100 h-100 imgmain img-fluid" src="../img/img1_.jpg" alt="Maison1">
                    </div>
                </div>
            </div>
            <div class="col-12 mt-3 thumbnail">
                <div class="row d-flex justify-content-center">
                    <div class="col-4 col-sm-3 col-lg-2">
                        <!-- image -->
                        <img class="w-100 img-fluid thumbnailimg" src="../img/img1_.jpg" alt="">
                    </div>
                    <div class="col-4 col-sm-3 col-lg-2">
                        <!-- image -->
                        <img class="w-100 img-fluid thumbnailimg" src="../img/img2_.jpg" alt="">

                    </div>
                    <div class="col-4 col-sm-3 col-lg-2">
                        <!-- image -->
                        <img class="w-100 img-fluid thumbnailimg" src="../img/img3_.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>



        <div class="row d-flex justify-content-center">

            <!-- Description -->

            <div class="col-10 col-lg-5 col-xl-4 mt-4 border description p-2 mx-2">
                <h4>Description</h4>
                <p class="ref">Référence : <span class="reference">FDC899964</span></p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit, minima fugiat modi totam similique autem quia error nemo rem at rerum nisi non, accusantium possimus quis dignissimos dicta assumenda harum.</p>
                <div class="row">
                    <p class="col-4">Surface : <span class="surface">125</span> m²</p>
                    <p class="col-4">Garage : <span class="garage">2</span></p>
                    <p class="col-4">Chambre : <span class="bedroom">2</span></p>
                    <p class="col-4">Nb de pièces : <span class="room">3</span></p>
                    <p class="col-4">Chauffage : <span class="heating">Gaz</span></p>
                    <p class="col-4">Salle de bain : <span class="bathroom">1</span></p>
                </div>
                <p class="text-center">Détail du prix :</p>
                <div class="contain border text-center p-2">

                    <p class="text-dark"><span class="price">125 000</span> €</p>
                </div>
            </div>

            <!-- Contact -->

            <div class="col-10 col-lg-5 col-xl-4 mt-4 border p-2 contactannounce mx-2">
                <h4 class="text-white text-center">Contact</h4>
                <form method="post" class="p-2 text-center">
                    <div class="form-group d-flex justify-content-between">
                        <label for="name">Nom</label>
                        <input type="text" class="col-8 d-inline form-control" id="name" name="name" placeholder="Nom">
                    </div>
                    <div class="form-group d-flex justify-content-between">
                        <label for="email">Email</label>
                        <input type="email" class="col-8 d-inline form-control" id="email" name="email" placeholder="Adresse email">
                    </div>
                    <div class="form-group d-flex justify-content-between">
                        <label for="reference">Référence</label>
                        <input type="text" class="col-8 d-inline form-control" id="reference" name="reference" placeholder="Référence">
                    </div>
                    <div class="form-group d-flex justify-content-between">
                        <label for="subject">Sujet</label>
                        <textarea class="col-8 d-inline form-control" id="subject" name="subject" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Envoyer</button>
                </form>
            </div>

        </div>

        <!-- Up selling -->

        <div class="row">
            <p class="col-12 text-center my-3 my-lg-5 txtupselling">Ces biens pourraient vous intéresser</p>
            <div class="col-12 col-sm-10 col-md-8 col-lg-3 mx-auto text-center">
                <a href="#"><img src="../img/img1_.jpg" class="w-100 img-fluid imgupselling" alt=""></a>
                <div class="px-2 text-left txtsub">
                    <p class="mt-2">Titre annonce</p>
                    <p>Référence : <span>FDC899964</span></p>
                    <p><i class="icofont-location-pin mr-1"></i>Lieu : <span>Lièvin</span></p>
                    <p>Prix : <span class="price">125 000</span> €</p>
                </div>
            </div>
            <div class="col-12 col-sm-10 col-md-8 col-lg-3 mx-auto text-center">
                <a href="#"><img src="../img/img2_.jpg" class="w-100 img-fluid imgupselling" alt=""></a>
                <div class="px-2 text-left txtsub">
                    <p class="mt-2">Titre annonce</p>
                    <p>Référence : <span>FDC899964</span></p>
                    <p><i class="icofont-location-pin mr-1"></i>Lieu : <span>Lièvin</span></p>
                    <p>Prix : <span class="price">125 000</span> €</p>
                </div>
            </div>
            <div class="col-12 col-sm-10 col-md-8 col-lg-3 mx-auto text-center">
                <a href="#"><img src="../img/img3_.jpg" class="w-100 img-fluid imgupselling" alt=""></a>
                <div class="px-2 text-left txtsub">
                    <p class="mt-2">Titre annonce</p>
                    <p>Référence : <span>FDC899964</span></p>
                    <p><i class="icofont-location-pin mr-1"></i>Lieu : <span>Lièvin</span></p>
                    <p>Prix : <span class="price">125 000</span> €</p>
                </div>
            </div>
        </div>

    </main>

    <footer>

    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/1de34be0f9.js" crossorigin="anonymous"></script>
    <script src="../js/frontheader.js"></script>
    <script src="../js/frontannounce.js"></script>
</body>

</html>