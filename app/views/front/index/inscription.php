<div class="row align-items-start">
            <!-- Image -->
            <div class="col-12 col-sm-8 mx-auto col-lg-5 col-xl-4 mt-4 border p-2 mx-2 text-white order-lg-0 order-1">
                <img src="<?= BASE_IMG . "insc.jpg"?>" class="w-100 img-fluid" alt="image de connexion">
            </div>
            <!-- Contact -->

            <div class="col-12 col-sm-8 mx-auto col-lg-5 col-xl-4 mt-4 border p-2 inscriptionform mx-2 text-white">
                <h4 class="text-center">Inscrivez-vous !</h4>
                <form method="post" class="text-center">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input m-2" type="radio" id="miss" name="genre" value="miss">
                        <label class="form-check-label m-2" for="miss">Mme</label>
                        <input class="form-check-input m-2" type="radio" id="mister" name="genre" value="mister">
                        <label class="form-check-label m-2" for="mister">Mr</label>
                    </div>
                    <div class="form-group d-flex justify-content-between">
                        <label for="name">Nom</label>
                        <input type="text" class="col-8 d-inline form-control" id="name" name="name" placeholder="Nom">
                    </div>
                    <div class="form-group d-flex justify-content-between">
                        <label for="firstname">Prénom</label>
                        <input type="text" class="col-8 d-inline form-control" id="firstname" name="firstname" placeholder="Prénom">
                    </div>
                    <div class="form-group d-flex justify-content-between">
                        <label for="birth">Date de naissance</label>
                        <input type="date" class="col-6 col-md-8 d-inline form-control" id="birth" name="birth">
                    </div>
                    <div class="form-group d-flex justify-content-between">
                        <label for="number">Numéro</label>
                        <input type="number" class="col-8 d-inline form-control" id="number" name="number" placeholder="125">
                    </div>
                    <div class="form-group d-flex justify-content-between">
                        <label for="street">Rue</label>
                        <input type="text" class="col-8 d-inline form-control" id="street" name="street" placeholder="Rue">
                    </div>
                    <div class="form-group d-flex justify-content-between">
                        <label for="zipcode">Code postal</label>
                        <input type="number" class="col-8 d-inline form-control" id="zipcode" name="zipcode" placeholder="62950">
                    </div>
                    <div class="form-group d-flex justify-content-between">
                        <label for="city">Ville</label>
                        <input type="text" class="col-8 d-inline form-control" id="city" name="city" placeholder="Ville">
                    </div>
                    <div class="form-group d-flex justify-content-between">
                        <label for="country">Pays</label>
                        <input type="text" class="col-8 d-inline form-control" id="country" name="country" placeholder="Pays">
                    </div>
                    <div class="form-group d-flex justify-content-between">
                        <label for="email">Email</label>
                        <input type="email" class="col-8 d-inline form-control" id="email" name="email">
                    </div>
                    <div class="form-group d-flex justify-content-between">
                        <label for="password">Mot de passe</label>
                        <input type="password" class="col-8 d-inline form-control" id="password" name="password">
                    </div>
                    <div class="form-group d-flex justify-content-between">
                        <label for="confirmation">Confirmation</label>
                        <input type="password" class="col-8 d-inline form-control" id="confirmation" name="confirmation">
                    </div>
                    <button type="submit" class="btn btn-outline-dark bg-dark text-white">Je m'inscris !</button>
                </form>
            </div>

        </div>
