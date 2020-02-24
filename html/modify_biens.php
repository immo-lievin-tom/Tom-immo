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
            require_once('menu_biens.php')
            ?>
            <div class="col-10 pt-5">
                <form class="mx-auto">
                    
                    <div class="form-group col-12">
                        <label for="inputName">Nom</label>
                        <input type="text" class="form-control" id="inputNom" placeholder="Dupond">
                    </div>
                    <div class="form-group col-12">
                        <label for="inputSurname">Prénom</label>
                        <input type="text" class="form-control" id="inputPrenom" placeholder="Pierre">
                    </div>
                    <div class="form-group col-12">
                        <label for="inputAddress">Rue</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
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
                            <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                        </div>
                        <div class="form-group col-12">
                            <label for="inputZip">Code postal</label>
                            <input type="text" class="form-control" id="inputZip">
                        </div>
                        <div class="form-group col-12">
                            <label for="inputPassword4">Mot de passe</label>
                            <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                        </div>
                        <div class="form-group col-12">
                            <label for="inputPassword4">Confirmation</label>
                            <input type="password" class="form-control" id="inputPassword4" placeholder="Confirmation">
                        </div>
                    </div>
                        <button type="submit" class="btn btn-primary">Valider</button>
                </form>
            </div>

        </div>

    </main>

    <footer>
        <?php
        require_once('footer_admin.php')
        ?>
    </footer>
</body>

</html>