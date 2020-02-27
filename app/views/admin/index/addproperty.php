<div class="col-12 col-sm-8 mx-auto col-lg-5 col-xl-9 mt-4 border p-2 mx-2 property-espace">
    <?php

    // use Core\Validator;

    // $formvalidator = new Validator();


    // if (isset($_POST['submit'])) {
    //     $formvalidator->testInputLength($_POST['desc'], 20, "Longueur de la description invalide")->testInputLength($_POST['title'], 5, "Longueur du nom invalide")->testInputLength($_POST['ref'], 5, "Longueur de la référence invalide")->testInputLength($_POST['ref'], 5, "Longueur du pays est invalide")->testInputLength($_POST['ref'], 2, "Longueur du chauffage est invalide")->validTypeMime('photo1', ['image/jpg', 'image/png'], "This MIME Content-type is not valid")->validTypeMime('photo2', ['image/jpg', 'image/png'], "This MIME Content-type is not valid")
    //     ->validTypeMime('photo3', ['image/jpg', 'image/png'], "This MIME Content-type is not valid")->isValid();
    // }

var_dump($_FILES);
?>
    <h4 class="text-center">Ajouter un bien</h4>
    <form method="post" class="mx-auto text-center col-12" enctype="multipart/form-data">
        <div class="form-check form-check-inline">
            <input class="form-check-input m-2" selected type="radio" id="sale" name="typeproperty" value="1">
            <label class="form-check-label m-2" for="sale">Vente</label>
            <input class="form-check-input m-2" type="radio" id="leasing" name="typeproperty" value="0">
            <label class="form-check-label m-2" for="leasing">Location</label>
        </div>
        <div class="input-group mb-3">
            <select class="custom-select property-select" name="type" id="type">
                <option disabled>Type de bien</option>
                <option value="1" selected>Appartement</option>
                <option value="2">Maison</option>
                <option value="3">Garage</option>
                <option value="4">Autres...</option>
            </select>
        </div>
        <div class="form-group d-flex justify-content-between">
            <label for="title">Titre</label>
            <input type="text" class="col-8 d-inline form-control" id="title" name="title">
        </div>

        <div class="form-group d-flex justify-content-between">
            <label for="photo3">Description</label>
            <textarea class="col-8 resize form-control" name="desc" id="desc" rows="6"></textarea>
        </div>

        <div class="form-group d-flex justify-content-between">
            <label for="ref">Référence</label>
            <input type="text" class="col-8 d-inline form-control" name="ref" id="ref">
        </div>
        <div class="form-group d-flex justify-content-between">
            <label for="price">Prix</label>
            <input type="number" class="col-8 d-inline form-control" required id="price" name="price">
        </div>
        <div class="form-group d-flex justify-content-between">
            <label for="num">Num</label>
            <input type="number" class="col-2 d-inline form-control" id="num" required name="num">
            <label for="address">Adresse</label>
            <input type="text" class="col-8 d-inline form-control" id="address" required name="address">
        </div>
        <div class="form-group d-flex justify-content-between">
            <label for="city">Ville</label>
            <input type="text" class="col-3 d-inline form-control" id="city" required name="city">
            <label for="zipcode">Code Postal</label>
            <input type="number" class="col-3 d-inline form-control" id="zipcode" required name="zipcode">
        </div>
        <div class="form-group d-flex justify-content-between">
            <label for="country">Pays</label>
            <input type="text" class="col-8 d-inline form-control" id="country" name="country">
        </div>
        <div class="form-group d-flex justify-content-between">
            <label for="surface">Surface</label>
            <input type="number" class="col-8 col-md-8 d-inline form-control" id="surface" required name="surface">
        </div>
        <div class="form-group d-flex justify-content-between no-garage">
            <label for="garden">Jardin</label>
            <input type="number" class="col-8 col-md-8 d-inline form-control" id="garden" value="0" name="garden">
        </div>
        <div class="form-group d-flex justify-content-between no-garage">
            <label for="room">Nb de pièce</label>
            <input type="number" class="col-8 d-inline form-control" id="room" name="room">
        </div>
        <div class="form-group d-flex justify-content-between no-garage">
            <label for="heating">Type de chauffage</label>
            <input type="number" class="col-8 d-inline form-control" id="heating" name="heating">
        </div>
        <div class="form-group d-flex justify-content-between no-garage">
            <label for="bedroom">Nb de chambre</label>
            <input type="number" class="col-8 d-inline form-control" id="bedroom" name="bedroom">
        </div>
        <div class="form-group d-flex justify-content-between no-garage">
            <label for="nb_bathroom">Nb de Salle de bain</label>
            <input type="number" class="col-8 d-inline form-control" id="nb_bathroom" name="nb_bathroom">
        </div>
        <div class="form-check form-check-inline text-left w-100 no-garage">
            <div class="w-25">
                <label class="form-check-label" required for="garage">Garage</label>
            </div>
            <div class="w-75">
                <div class="text-center">
                    <input class="form-check-input m-2" type="radio" value="1" name="garage" value="1">
                    <label class="form-check-label m-2" for="garage">Oui</label>
                    <input class="form-check-input m-2" checked type="radio" value="0" name="garage" value="0">
                    <label class="form-check-label m-2" for="garage">Non</label>
                </div>
            </div>
        </div>
        <div class="custom-control custom-switch">
            <input type="checkbox" class="custom-control-input" id="isActive" name="isActive">
            <label class="custom-control-label" for="isActive">Actif</label>
        </div>
        <div class="custom-control custom-switch">
            <input type="checkbox" class="custom-control-input" id="isVisible" name="isVisible">
            <label class="custom-control-label" for="isVisible">Visible</label>
        </div>
        <div class="custom-control custom-switch">
            <input type="checkbox" class="custom-control-input" id="isTop" name="isTop">
            <label class="custom-control-label" for="isTop">Top</label>
        </div>
        <div class="form-group d-flex justify-content-between no-garage">
            <label for="energy">Classe énergetique</label>
            <select class="custom-select property-select col-8" name="energy" id="energy">
                <option value="A" selected>A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option>
                <option value="E">E</option>
            </select>
        </div>
        <div class="form-group d-flex justify-content-between">
            <label for="photo1">Photo 1</label>
            <input type="file" class="btn buttonrad col-8 d-inline form-control" required id="photo1" name="photo1">
        </div>
        <div class="form-group d-flex justify-content-between">
            <label for="photo2">Photo 2</label>
            <input type="file" class="btn buttonrad col-8 d-inline form-control" required id="photo2" name="photo2">
        </div>
        <div class="form-group d-flex justify-content-between">
            <label for="photo3">Photo 3</label>
            <input type="file" class="btn buttonrad col-8 d-inline form-control" required id="photo3" name="photo3">
        </div>
        <button type="submit" class="btn btn-outline-dark color1b0a2e text-white">Ajouter</button>
    </form>
</div>