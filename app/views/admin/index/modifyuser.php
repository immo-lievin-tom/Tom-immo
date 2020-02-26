<?php
var_dump($all);
?>


<div class="col-10 pt-5">
    <form class="mx-auto">
        <div class="form-group col-12">
            <label for="inputName">Nom</label>
            <input type="text" class="form-control" id="inputNom" value="<?= $all[0]['name']?>" >
        </div>
        <div class="form-group col-12">
            <label for="inputSurname">Prénom</label>
            <input type="text" class="form-control" id="inputPrenom" value="<?= $all[0]['firstname']?>">
        </div>
        <div class="form-group col-12">
            <label for="inputAddress">Rue</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="Main St">
        </div>
        <div class="form-group col-12">
            <label for="inputAddress2">Numéro</label>
            <input type="text" class="form-control" id="inputAddress2" placeholder="Appartement, studio..">
        </div>
        <div class="form-group col-12">
            <label for="inputCity">Pays</label>
            <input type="text" class="form-control" id="inputCity">
        </div>
        <div class="form-group col-12">
            <label for="inputCity">Ville</label>
            <input type="text" class="form-control" id="inputCity">
        </div>
        <div class="form-row col-12">
            <div class="form-group col-12">
                <label for="inputEmail4">Email</label>
                <input type="email" class="form-control" id="inputEmail4" value="<?= $all[0]['email']?>">
            </div>
            <div class="form-group col-12">
                <label for="inputZip">Code postal</label>
                <input type="text" class="form-control" id="inputZip">
            </div>
            <div class="form-group col-12">
                <label for="inputPassword4">Mot de passe</label>
                <input type="password" class="form-control" id="inputPassword4" value="<?= $all[0]['password']?>">
            </div>
            <div class="form-group col-12">
                <label for="inputPassword4">Confirmation</label>
                <input type="password" class="form-control" id="inputPassword4" value="<?= $all[0]['password']?>">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Modifier</button>
    </form>
</div>
