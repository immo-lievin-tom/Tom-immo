<div class="col-10 pt-5">
    <form method="POST" class="mx-auto">
        <div class="form-group col-12">
            <label for="inputName">Nom</label>
            <input type="text" class="form-control" name="name" id="inputNom" value="">
        </div>
        <div class="form-group col-12">
            <label for="inputSurname">Prénom</label>
            <input type="text" class="form-control" name="firstname" id="inputPrenom" value="">
        </div>
        <div class="form-group col-12">
            <label for="date_birth">Date de naissance</label>
            <input type="date" class="form-control" name="date_birth" id="date_birth" value="">
        </div>
        <div class="form-group col-12">
            <label for="phone_number">Tel</label>
            <input type="number" class="form-control" name="phone_number" id="phone_number" value="">
            <input type="hidden" name="id_address" value="">
        </div>
        <div class="form-group col-12">
            <label for="inputAddress2">Numéro</label>
            <input type="text" class="form-control" name="number" id="inputAddress2" value="">
        </div>
        <div class="form-group col-12">
            <label for="inputAddress">Rue</label>
            <input type="text" class="form-control" name="street" id="inputAddress" value="">
        </div>
        <div class="form-group col-12">
            <label for="inputCountry">Pays</label>
            <input type="text" class="form-control" name="country" id="inputCountry" value="">
        </div>
        <div class="form-group col-12">
            <label for="inputCity">Ville</label>
            <input type="text" class="form-control" name="city" id="inputCity" value="">
        </div>
        <div class="form-row col-12">
            <div class="form-group col-12">
                <label for="inputEmail4">Email</label>
                <input type="email" class="form-control" name="email" id="inputEmail4" value="">
            </div>
            <div class="form-group col-12">
                <label for="inputZip">Code postal</label>
                <input type="text" class="form-control" name="zipcode" id="inputZip" value="">
            </div>
            <div class="form-group col-12">
                <label for="inputPassword4">Mot de passe</label>
                <input type="password" class="form-control" name="password" id="inputPassword4" value="">
            </div>
            <div class="form-group col-12">
                <label for="confirmPassword4">Confirmation</label>
                <input type="password" class="form-control" name="password" id="confirmPassword4" value="">
            </div>
            <div class="form-group col-6">
                <label for="role">Role</label>
                <select name="role" class="form-control" id="role">
                    <option value=1>Admin</option>
                    <option value=2>Utilisateur</option>
                </select>

            </div>
            <button type="submit" class="btn btn-primary">Modifier</button>
    </form>
</div>
