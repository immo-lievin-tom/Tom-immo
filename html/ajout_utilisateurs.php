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
            <div class="col-10 pt-5">
                <form method="post" class="mx-auto mb-3 text-center">
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
                    <button type="submit" class="btn btn-outline-dark bg-dark text-white">Ajouter</button>
                </form>
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
    <script src="./js/admin.js"></script>
</body>

</html>