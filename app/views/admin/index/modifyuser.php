<?php
$date = explode(' ', $coor[0]['date_birth']);

?>


<div class="col-10 pt-5">
    <form method="POST" class="mx-auto">
        <div class="form-group col-12">
            <label for="inputName">Nom</label>
            <input type="text" class="form-control" name="name" id="inputNom" value="<?= utf8_encode($coor[0]['name']) ?>">
        </div>
        <div class="form-group col-12">
            <label for="inputSurname">Prénom</label>
            <input type="text" class="form-control" name="firstname" id="inputPrenom" value="<?= utf8_encode($coor[0]['firstname']) ?>">
        </div>
        <div class="form-group col-12">
            <label for="date_birth">Date de naissance</label>
            <input type="date" class="form-control" name="date_birth" id="date_birth" value="<?= $date[0] ?>">
        </div>
        <div class="form-group col-12">
            <label for="phone_number">Tel</label>
            <input type="number" class="form-control" name="phone_number" id="phone_number" value="<?= $coor[0]['phone_number'] ?>">
            <input type="hidden" name="id_address" value="<?= $coor[0]['id_address'] ?>">
        </div>
        <div class="form-group col-12">
            <label for="inputAddress2">Numéro</label>
            <input type="text" class="form-control" name="number" id="inputAddress2" value="<?= utf8_encode($coor[0]['number']) ?>">
        </div>
        <div class="form-group col-12">
            <label for="inputAddress">Rue</label>
            <input type="text" class="form-control" name="street" id="inputAddress" value="<?= utf8_encode($coor[0]['street']) ?>">
        </div>
        <div class="form-group col-12">
            <label for="inputCountry">Pays</label>
            <input type="text" class="form-control" name="country" id="inputCountry" value="<?= utf8_encode($coor[0]['country']) ?>">
        </div>
        <div class="form-group col-12">
            <label for="inputCity">Ville</label>
            <input type="text" class="form-control" name="city" id="inputCity" value="<?= utf8_encode($coor[0]['city']) ?>">
        </div>
        <div class="form-row col-12">
            <div class="form-group col-12">
                <label for="inputEmail4">Email</label>
                <input type="email" class="form-control" name="email" id="inputEmail4" value="<?= utf8_encode($coor[0]['email']) ?>">
            </div>
            <div class="form-group col-12">
                <label for="inputZip">Code postal</label>
                <input type="text" class="form-control" name="zipcode" id="inputZip" value="<?= utf8_encode($coor[0]['zipcode']) ?>">
            </div>
            <div class="form-group col-12">
                <label for="inputPassword4">Mot de passe</label>
                <input type="password" class="form-control" name="password" id="inputPassword4" value="<?= utf8_encode($coor[0]['password']) ?>">
            </div>
            <div class="form-group col-12">
                <label for="confirmPassword4">Confirmation</label>
                <input type="password" class="form-control" name="password" id="confirmPassword4" value="<?= utf8_encode($coor[0]['password']) ?>">
            </div>
            <div class="form-group col-6">
                <label for="role">Role</label>
                <select name="role" class="form-control" id="role">
                    <option <?= ($coor[0]['role'] == 1) ? "selected" : "" ?> value=1>Admin</option>
                    <option <?= ($coor[0]['role'] == 2) ? "selected" : "" ?> value=2>Utilisateur</option>
                </select>

            </div>
            <button type="submit" class="btn btn-primary">Modifier</button>
    </form>
</div>