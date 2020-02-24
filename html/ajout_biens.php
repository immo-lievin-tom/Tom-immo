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
            <div class="col-10 pl-0 pt-5">
                <form class="mx-auto">

                    <div class="form-group col-12">
                        <label for="inputName">Catégorie</label>
                        <div class="btn-group">
                            <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Action
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-12">
                        <label for="inputSurname">Type</label>
                        <div class="btn-group">
                            <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Action
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-12">
                        <label for="inputDescription">Description</label>
                        <input type="text" class="form-control" id="inputDescription" placeholder="1234 Main St">
                    </div>
                    <div class="form-group col-12">
                        <label for="inputAddress2">Prix</label>
                        <input type="text" class="form-control" id="inputAddress2" placeholder="Appartement, studio..">
                    </div>
                    <div class="form-group col-12">
                        <label for="inputCity">Close Energie</label>
                        <input type="text" class="form-control" id="inputCity">
                    </div>
                    <div class="form-group col-12">
                        <label for="inputCity">Adresse</label>
                        <input type="text" class="form-control" id="inputCity">
                    </div>
                    <div class="form-row col-12">
                        <div class="form-group col-12">
                            <label for="inputEmail4">Ville</label>
                            <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                        </div>
                        <div class="form-group col-12">
                            <label for="inputZip">Surface</label>
                            <input type="text" class="form-control" id="inputZip">
                        </div>
                        <div class="form-group col-12">
                            <label for="inputPassword4">Nombre de pièces</label>
                            <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                        </div>
                        <div class="form-group col-12">
                            <label for="inputPassword4">Nombre de chambres</label>
                            <input type="password" class="form-control" id="inputPassword4" placeholder="Confirmation">
                        </div>
                        <div class="form-group col-12">
                            <label for="inputPassword4">Photo 1</label>
                            <input type="password" class="form-control" id="inputPassword4" placeholder="Confirmation">
                        </div>
                        <div class="form-group col-12">
                            <label for="inputPassword4">Photo 2</label>
                            <input type="password" class="form-control" id="inputPassword4" placeholder="Confirmation">
                        </div>
                        <div class="form-group col-12">
                            <label for="inputPassword4">Photo 3</label>
                            <input type="password" class="form-control" id="inputPassword4" placeholder="Confirmation">
                        </div>
                    </div>
                    <a href="biens.php"><button type="submit">Ajouter</button></a>
                    <button><a href="modify_biens.php">Modifier</button>

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
    <script src="./js/admin.js"></script>
</body>

</html>