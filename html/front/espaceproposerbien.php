<div class="col-12 col-sm-8 mx-auto col-lg-5 col-xl-4 mt-4 border p-2 mx-2 property-espace">
    <h4 class="text-center">Proposer un bien</h4>
    <form method="post" class="text-center">
        <div class="form-check form-check-inline">
            <input class="form-check-input m-2" type="radio" id="miss" name="genre" value="miss">
            <label class="form-check-label m-2" for="miss">Vente</label>
            <input class="form-check-input m-2" type="radio" id="mister" name="genre" value="mister">
            <label class="form-check-label m-2" for="mister">Location</label>
        </div>
        <div class="input-group mb-3">
            <select class="custom-select" id="type">
                <option selected>Type de bien</option>
                <option value="1">Appartement</option>
                <option value="2">Maison</option>
                <option value="3">Garage</option>
                <option value="3">Autres...</option>
            </select>
        </div>
        <div class="form-group d-flex justify-content-between">
            <label for="price">Prix</label>
            <input type="number" class="col-8 d-inline form-control" id="price" name="price">
        </div>
        <div class="form-group d-flex justify-content-between">
            <label for="city">Ville</label>
            <input type="text" class="col-8 d-inline form-control" id="city" name="city">
        </div>
        <div class="form-group d-flex justify-content-between">
            <label for="surface">Surfarce</label>
            <input type="number" class="col-8 col-md-8 d-inline form-control" id="surface" name="surface">
        </div>
        <div class="form-group d-flex justify-content-between">
            <label for="room">Nb de pièce</label>
            <input type="number" class="col-8 d-inline form-control" id="room" name="room">
        </div>
        <div class="form-group d-flex justify-content-between">
            <label for="bedroom">Nb de chambre</label>
            <input type="number" class="col-8 d-inline form-control" id="bedroom" name="street">
        </div>
        <div class="form-group d-flex justify-content-between">
            <label for="typeheating">Classe énergetique</label>
            <input type="text" class="col-7 d-inline form-control" id="typeheating" name="typeheating">
        </div>
        <div class="form-group d-flex justify-content-between">
            <label for="photo1">Photo 1</label>
            <input type="file" class="btn buttonrad col-8 d-inline form-control" id="photo1" name="photo1">
        </div>
        <div class="form-group d-flex justify-content-between">
            <label for="photo2">Photo 2</label>
            <input type="file" class="btn buttonrad col-8 d-inline form-control" id="photo2" name="photo2">
        </div>
        <div class="form-group d-flex justify-content-between">
            <label for="photo3">Photo 3</label>
            <input type="file" class="btn buttonrad col-8 d-inline form-control" id="photo3" name="photo3">
        </div>
        <div class="form-group d-flex justify-content-between">
            <label for="photo3">Description</label>
            <textarea class="col-8 resize" name="desc" id="desc" rows="10"></textarea>
        </div>

        <button type="submit" class="btn btn-outline-dark bg text-white">Proposer</button>
    </form>
</div>