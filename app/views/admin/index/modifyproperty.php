<?php

extract($property[0]);
extract($address[0]);

?>

<div class="col-12 col-sm-8 mx-auto col-lg-5 col-xl-9 mt-4 border p-2 mx-2 property-espace">
    <?php

    if (!empty($err)) {
        foreach ($err as $val) {
            echo "<ul class='bg-danger text-white'>";
            
                echo "<li>" . $val . "</li>";
            
            echo "</ul>";
        };
    }
    ?>
    <h4 class="text-center">Modifier un bien</h4>
    <form method="post" class="w-50 mx-auto" id="formaddproperty" enctype="multipart/form-data">
        <div class="form-check form-check-inline">
            <input class="form-check-input m-2" <?= ($typeproperty == "sale") ? "checked" : "" ?> type="radio" id="sale" name="typeproperty" value="1">
            <label class="form-check-label m-2" for="sale">Vente</label>
            <input class="form-check-input m-2" <?= ($typeproperty == "rental") ? "checked" : "" ?> type="radio" id="leasing" name="typeproperty" value="0">
            <label class="form-check-label m-2" for="leasing">Location</label>
        </div>
        <div class="input-group mb-3">
            <select class="custom-select property-select" name="type" id="type">
                <option disabled>Type de bien</option>
                <option value="1" <?= ($id_cat == 1) ? "selected" : "" ?>>Appartement</option>
                <option value="2" <?= ($id_cat == 2) ? "selected" : "" ?>>Maison</option>
                <option value="3" <?= ($id_cat == 3) ? "selected" : "" ?>>Garage</option>
                <option value="4" <?= ($id_cat == 4) ? "selected" : "" ?>>Autres...</option>
            </select>
        </div>
        <div class="form-group d-flex justify-content-between">
            <label for="title">Titre</label>
            <input type="text" class="w-75 d-inline form-control" id="title" name="title" value="<?= $name ?>">
        </div>

        <div class="form-group d-flex justify-content-between">
            <label for="photo3">Description</label>
            <textarea class=" w-75 form-control" name="desc" id="desc"><?= $description ?></textarea>
        </div>

        <div class="form-group d-flex justify-content-between">
            <label for="ref">Référence</label>
            <input type="text" class="w-75 d-inline form-control" name="ref" id="ref" value="<?= $reference ?>">
        </div>
        <div class="form-group d-flex justify-content-between">
            <label for="price">Prix</label>
            <input type="number" class="w-50 d-inline form-control" id="price" name="price" value="<?= $price ?>">
        </div>
        <div class="form-group d-flex justify-content-between">
            <div class="d-flex w-25">
                <label for="num" class="mr-2">Numéro de rue</label>
                <input type="hidden" name="id_address" value="<?= $id_address ?>">
                <input type="number" class="d-inline form-control" id="num" name="num" value="<?= $number ?>">
            </div>
            <div class="d-flex w-50">
                <label for="address" class="mr-2">Adresse</label>
                <input type="text" class="d-inline form-control" id="address" name="address" value="<?= $street ?>">
            </div>
        </div>
        <div class="form-group d-flex justify-content-between">
            <div class="d-flex w-25">
                <label for="zipcode" class="mr-2">Code Postal</label>
                <input type="number" class="d-inline form-control" id="zipcode" name="zipcode" value="<?= $zipcode ?>">
            </div>
            <div class="d-flex w-50">
                <label for="city" class="mr-2">Ville</label>
                <input type="text" class="d-inline form-control" id="city" name="city" value="<?= $city ?>">
            </div>
        </div>
        <div class="form-group d-flex justify-content-between">
            <label for="country">Pays</label>
            <input type="text" class="w-75 d-inline form-control" id="country" name="country" value="<?= $country ?>">
        </div>
        <div class="form-group d-flex justify-content-between">
            <label for="surface">Surface</label>
            <input type="number" class="w-25 d-inline form-control" id="surface" name="surface" value="<?= $surface ?>">
        </div>
        <div class="form-group d-flex justify-content-between no-garage">
            <label for="garden">Jardin</label>
            <input type="number" class=" w-25 d-inline form-control" id="garden" name="garden" value="<?= $garden ?>">
        </div>
        <div class="form-group d-flex justify-content-between no-garage">
            <label for="room">Nb de pièce</label>
            <input type="number" class="w-25 d-inline form-control" id="room" name="room" value="<?= $nb_room ?>">
        </div>
        <div class="form-group d-flex justify-content-between no-garage">
            <label for="bedroom">Nb de chambre</label>
            <input type="number" class="w-25 d-inline form-control" id="bedroom" name="bedroom" value="<?= $nb_bedroom ?>">
        </div>
        <div class="form-group d-flex justify-content-between no-garage">
            <label for="nb_bathroom">Nb de Salle de bain</label>
            <input type="number" class="w-25 d-inline form-control" id="nb_bathroom" name="nb_bathroom" value="<?= $nb_bedroom ?>">
        </div>
        <div class="form-check d-flex form-check-inline no-garage">
            <label for="heating" class="w-25 text-left">Type de chauffage</label>
            <div class="w-75">
                <input class="form-check-input m-2" <?= ($type_heating == 'gaz') ? "checked" : "" ?> type="radio" name="heating" value="gaz">
                <label class="form-check-label m-2" for="gaz">Gaz</label>
                <input class="form-check-input m-2" <?= ($type_heating == 'electricity') ? "checked" : "" ?> type="radio" name="heating" value="electricity">
                <label class="form-check-label m-2" for="electricity">Electricité</label>
            </div>
        </div>
        <div class="form-check form-check-inline d-flex no-garage">
            <label class="w-25 text-left" for="garage">Garage</label>
            <div class="w-75">
                <input class="form-check-input m-2" <?= ($garage == 1) ? "checked" : "" ?> type="radio" value=1 name="garage">
                <label class="form-check-label m-2" for="garage">Oui</label>
                <input class="form-check-input m-2" <?= ($garage == 0) ? "checked" : "" ?> type="radio" value=0 name="garage">
                <label class="form-check-label m-2" for="garage">Non</label>
            </div>
        </div>
        <div class="my-2 custom-control custom-switch">
            <input type="checkbox" class="custom-control-input" id="isActive" name="isActive" <?= ($property[0]['isActive'] == 1) ? "checked" : " " ?>>
            <label class="custom-control-label" for="isActive">Actif</label>
        </div>
        <div class="my-2 custom-control custom-switch">
            <input type="checkbox" class="custom-control-input" id="isTop" name="isTop" <?= ($isTop == 1) ? "checked" : " " ?>>
            <label class="custom-control-label" for="isTop">Top</label>
        </div>
        <div class="my-2 custom-control custom-switch">
            <input type="checkbox" class="custom-control-input" id="isVisible" name="isVisible" <?= ($isVisible == 1) ? "checked" : " " ?>>
            <label class="custom-control-label" for="isVisible">Visible</label>
        </div>
        <div class="form-group d-flex justify-content-between no-garage">
            <label for="energy">Classe énergetique</label>
            <select class="custom-select property-select w-25" name="energy" id="energy">
                <option value=0>Choix</option>
                <option <?= ($energy_class == "A") ? "selected" : "" ?> value="A">A</option>
                <option <?= ($energy_class == "B") ? "selected" : "" ?> value="B">B</option>
                <option <?= ($energy_class == "C") ? "selected" : "" ?> value="C">C</option>
                <option <?= ($energy_class == "D") ? "selected" : "" ?> value="D">D</option>
                <option <?= ($energy_class == "E") ? "selected" : "" ?> value="E">E</option>
            </select>
        </div>
        <div class="form-group">
            <label for="energy">Les images</label>
            <div class="row d-flex justify-content-between align-items-center">
                <?php
                $idarr = [];
                foreach ($image as $table) {
                    $int = '$';
                    foreach ($table as $key => $value) {
                        if ($key == 'path') {
                            echo "<div class='col-4'><img src=" . BASE_READIMG . $value . " alt='' class='w-100 photo img-fluid'></div>";
                        } else {
                            array_push($idarr, $value);
                        }
                    };
                }
                ?>
            </div>
            <p class="modifyimg text-danger">Modifier les images</p>
        </div>

        <div class="form-group d-none justify-content-between imggroup">
            <label for="photo1">Photo 1</label>
            <input type="file" class="w-75 btn buttonrad d-inline form-control" id="photo1" name="<?= $idarr[0] ?>">
        </div>
        <div class="form-group d-none justify-content-between imggroup">
            <label for="photo2">Photo 2</label>
            <input type="file" class="w-75 btn buttonrad d-inline form-control" id="photo2" name="<?= $idarr[1] ?>">
        </div>
        <div class="form-group d-none justify-content-between imggroup">
            <label for="photo3">Photo 3</label>
            <input type="file" class="w-75 btn buttonrad d-inline form-control" id="photo3" name="<?= $idarr[2] ?>">
        </div>
        <button type="submit" class="btn btn-outline-dark color1b0a2e text-white">Ajouter</button>
    </form>
</div>