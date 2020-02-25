<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/theo.css">
    <title>Document</title>
</head>

<body>
    <header>
        <?php
        require_once('header.php')
        ?>
    </header>

    <main class="container-fluid main">
        <div class="row">
            <?php
            require_once('menu_admin.php')
            ?>
            <!-- <div class="col-10 pl-0 pt-5"> -->
            <div class="col-12 col-sm-8 mx-auto col-lg-5 col-xl-9 mt-4 border p-2 mx-2 property-espace">
                <h4 class="text-center">Ajouter un bien</h4>
                <form method="post" class="text-center mx-auto">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input m-2" type="radio" id="sale" name="contrat" value="sale">
                        <label class="form-check-label m-2" for="sale">Vente</label>
                        <input class="form-check-input m-2" type="radio" id="leasing" name="genre" value="leasing">
                        <label class="form-check-label m-2" for="leasing">Location</label>
                    </div>
                    <div class="input-group mb-3">
                        <select class="custom-select property-select" id="type">
                            <option selected>Type de bien</option>
                            <option value="1">Appartement</option>
                            <option value="2">Maison</option>
                            <option value="garage">Garage</option>
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
                    <div class="form-group d-flex justify-content-between no-garage">
                        <label for="garden">Jardin</label>
                        <input type="number" class="col-8 col-md-8 d-inline form-control" id="surface" name="surface">
                    </div>
                    <div class="form-group d-flex justify-content-between no-garage">
                        <label for="room">Nb de pièce</label>
                        <input type="number" class="col-8 d-inline form-control" id="room" name="room">
                    </div>
                    <div class="form-group d-flex justify-content-between no-garage">
                        <label for="bedroom">Nb de chambre</label>
                        <input type="number" class="col-8 d-inline form-control" id="bedroom" name="street">
                    </div>
                    <div class="form-check form-check-inline text-left w-100 no-garage">
                        <div class="w-25">
                            <label class="form-check-label " for="miss">Garage</label>
                        </div>
                        <div class="w-75">
                            <div class="text-center">
                                <input class="form-check-input m-2" type="radio" id="garage-y" name="garage" value="garage">
                                <label class="form-check-label m-2" for="miss">Oui</label>
                                <input class="form-check-input m-2" type="radio" id="garage-n" name="garage" value="garage">
                                <label class="form-check-label m-2" for="mister">Non</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group d-flex justify-content-between no-garage">
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
                        <textarea class="col-8 resize form-control" name="desc" id="desc" rows="10"></textarea>
                    </div>
                    <button type="submit" class="btn btn-outline-dark color1b0a2e text-white">Ajouter</button>
                </form>
                <div class="col-12 d-flex justify-content-end bouton_ajout">

                </div>

            </div>
        </div>

    </main>

    <footer>
        <?php
        require_once('footer_admin.php')
        ?>
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/admin.js"></script>
    
</body>

</html>