<?php

extract($property[0]);

?>

<!-- Title image and thumbnail -->

<div class="row text-center w85 mx-auto imgcontain position-relative d-xl-flex justify-content-center">
    <h1 class="w-100 announcetitle my-3"><?= $name ?></h1>
    <div id="carouselIndicators" class="carousel col-12 mx-auto p-0" data-ride="carousel" data-interval="false">
        <div class="carousel-inner slidecontain">
            <div class="carousel-item active">
                <?php
                foreach ($image as $key => $value) {
                    if ($value['isTop'] == 1) {
                        echo "<img class='w-100 h-100 imgmain2 img-fluid' src='" . BASE_READIMG . $value['path'] . "' alt='Maison1'>";
                    };
                }
                ?>
            </div>
        </div>
    </div>
    <div class="col-12 mt-3 thumbnail">
        <div class="row d-flex justify-content-center">
                <?php
                foreach ($image as $key => $value) {
                    echo "<div class='col-4 col-sm-3 col-lg-2'>";
                    echo "<img class='w-100 img-fluid thumbnailimg' src='" . BASE_READIMG . $value['path'] . "' alt='Maison1'>";
                    echo "</div>";
                }
                ?>
        </div>
    </div>
</div>



<div class="row d-flex justify-content-center">

    <!-- Description -->

    <div class="col-10 col-lg-5 col-xl-4 mt-4 border description p-2 mx-2">
        <h4>Description</h4>
        <p class="ref">Référence : <span class="reference">FDC899964</span></p>
        <p><?= utf8_encode($description) ?></p>
        <div class="row">
            <p class="col-4">Surface : <span class="surface"><?= $surface ?></span> m²</p>
            <p class="col-4">Garage : <span class="garage"><?= $garage ?></span></p>
            <p class="col-4">Chambre : <span class="bedroom"><?= $nb_bedroom ?></span></p>
            <p class="col-4">Nb de pièces : <span class="room"><?= $nb_room ?></span></p>
            <p class="col-4">Chauffage : <span class="heating"><?= $type_heating ?></span></p>
            <p class="col-4">Salle de bain : <span class="bathroom"><?= $nb_bedroom ?></span></p>
        </div>
        <p class="text-center">Détail du prix :</p>
        <div class="contain border text-center p-2">
            <p class="text-dark"><span class="price"><?= $price ?></span> €</p>
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
        <a href="#"><img src="<?= BASE_IMG . "img1_.jpg" ?>" class="w-100 img-fluid imgupselling" alt=""></a>
        <div class="px-2 text-left txtsub">
            <p class="mt-2">Titre annonce</p>
            <p>Référence : <span>FDC899964</span></p>
            <p><i class="icofont-location-pin mr-1"></i>Lieu : <span>Lièvin</span></p>
            <p>Prix : <span class="price">125 000</span> €</p>
        </div>
    </div>
    <div class="col-12 col-sm-10 col-md-8 col-lg-3 mx-auto text-center">
        <a href="#"><img src="<?= BASE_IMG . "img2_.jpg" ?>" class="w-100 img-fluid imgupselling" alt=""></a>
        <div class="px-2 text-left txtsub">
            <p class="mt-2">Titre annonce</p>
            <p>Référence : <span>FDC899964</span></p>
            <p><i class="icofont-location-pin mr-1"></i>Lieu : <span>Lièvin</span></p>
            <p>Prix : <span class="price">125 000</span> €</p>
        </div>
    </div>
    <div class="col-12 col-sm-10 col-md-8 col-lg-3 mx-auto text-center">
        <a href="#"><img src="<?= BASE_IMG . "img3_.jpg" ?>" class="w-100 img-fluid imgupselling" alt=""></a>
        <div class="px-2 text-left txtsub">
            <p class="mt-2">Titre annonce</p>
            <p>Référence : <span>FDC899964</span></p>
            <p><i class="icofont-location-pin mr-1"></i>Lieu : <span>Lièvin</span></p>
            <p>Prix : <span class="price">125 000</span> €</p>
        </div>
    </div>
</div>