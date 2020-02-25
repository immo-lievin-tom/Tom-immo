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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="./js/admin.js"></script>
</body>

</html>