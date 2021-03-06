<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/theo.css">
    <link rel="stylesheet" href="css/icofont/icofont.min.css">
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
                <table class="table table-striped mx-auto border w-100">
                    <thead>
                        <tr>
                            <th class="text-center" scope="col">Nom</th>
                            <th class="text-center" scope="col">Prénoms</th>
                            <th class="text-center" scope="col">Activer</th>
                            <th class="text-center" scope="col">Modifier</th>
                            <th class="text-center" scope="col">Supprimer</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center" scope="row">DOE</td>
                            <td class="text-center">Mark</td>
                            <td class="text-center"><button class="btn bg-white mx-auto col-9 rounded-0 btndelete">Activer</button></td>
                            <td class="text-center"><a class="text-decoration-none text-dark" href="#"><i class="icofont-arrow-right icofont-2x"></i></a></td>
                            <td class="text-center"><a class="text-decoration-none text-dark" href="#"><i class="icofont-ui-delete icofont-2x"></i></a></td>
                        </tr>
                    </tbody>
                </table>
                <div class="row m-0 d-flex col-12 justify-content-end">
                <a href="ajout_biens.php"><button type="submit" class="btn btn-outline-dark color1b0a2e text-white">Ajouter</button></a>
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