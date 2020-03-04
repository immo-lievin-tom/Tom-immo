<div class="row">

    <!-- Title category -->

    <h2 class="col-12 text-center my-4">Titre de catégorie</h2>

    <!-- Filter -->

    <div class="col-12 mx-auto txtfilter mb-3">
        <div class="row mx-auto">
            <div class="col-12 col-lg-4 d-flex flex-column justify-content-center align-items-center">
                <div>
                    <input class="checktest" type="checkbox" id="sale" name="sale">
                    <label for="sale">Achat</label>
                </div>
                <div>
                    <input class="checktest" type="checkbox" id="rent" name="rent">
                    <label for="rent">Location</label>
                </div>
            </div>
            <div class="col-12 col-lg-4 d-lg-flex align-items-center justify-content-around check">
                <div class="m-2 position-relative">
                    <i class="icofont-court icofont-2x"></i>
                    <input class="position-absolute checkfilter checktest" type="checkbox" id="house" name="house">
                </div>
                <div class="m-2 position-relative">
                    <i class="icofont-building-alt icofont-2x"></i>
                    <input class="position-absolute checkfilter checktest" type="checkbox" id="apartment" name="apartment">
                </div>
                <div class="m-2 position-relative">
                    <i class="icofont-car-alt-4 icofont-2x"></i>
                    <input class="position-absolute checkfilter checktest" type="checkbox" id="garage" name="garage">
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
            <button class="btn btn-outline-dark filter mx-auto">Filtrer</button>
            <button class="btn btn-outline-dark d-lg-none mx-auto filterbtn">Plus de filtres</button>
        </div>
    </div>

    <!-- List of announce -->
    <!-- 
    <div class="col-12 col-sm-10 col-md-8 col-lg-4 mx-auto text-center announcecat position-relative">
        <img src="" class="w-100 img-fluid imgcategory" alt="">
        <div class="txtdescannounce position-absolute mx-auto d-flex align-items-center">
            <p class="mx-auto p-3 descannounce">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis doloribus, accusamus...<a href="#">Plus d'infos</a></p>
        </div>
        <div class="px-2 text-left txtsub">
            <p class="mt-2">Titre annonce</p>
            <p>Référence : <span>FDC899964</span></p>
            <p><i class="icofont-location-pin mr-1"></i>Lieu : <span>Lièvin</span></p>
            <p>Prix : <span class="price">125 000</span> €</p>
        </div>
    </div> -->
    <div class="contentannouncecat w-100 d-flex">
        <?php

        foreach ($result as $key => $value) {
            echo "<div class='col-12 col-sm-10 col-md-8 col-lg-4 mx-auto text-center announcecat position-relative'>";
            extract($value);

            echo "<img src='" . BASE_IMG . $path . "' class='w-100 img-fluid imgcategory' alt=''>";
        ?>
            <div class="txtdescannounce position-absolute mx-auto d-flex align-items-center">
                <p class="mx-auto p-3 descannounce"><?= $description ?><a href="<?= BASE_ANNOUNCE . "/" . $id ?>">Plus d'infos</a></p>
            </div>
            <div class="px-2 text-left txtsub">
                <p class="mt-2"><?= $title ?></p>
                <p>Référence : <span><?= $reference ?></span></p>
                <!-- <p><i class="icofont-location-pin mr-1"></i>Lieu : <span></span></p> -->
                <p>Prix : <span class="price"><?= $price ?></span> €</p>
            </div>
        <?php
            echo "</div>";
        }
        ?>
    </div>
</div>