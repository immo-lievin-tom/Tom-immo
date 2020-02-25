<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= BASE_CSS . "index_front.css"?>">
    <link rel="stylesheet" href="<?= BASE_CSS . "header_front.css"?>">
    <link rel="stylesheet" href="<?= BASE_CSS . "icofont/icofont.min.css"?>">
    <link rel="stylesheet" href="<?= BASE_CSS . "espace_info_front.css"?>">
    <link rel="stylesheet" href="<?= BASE_CSS . "footer_front.css"?>">
    <title>Espace perso</title>
</head>

<body class="bodycontainer">
    <header class="headercontainer container-fluid">
        <?= $header ?>
    </header>
    <main class="container-fluid">
        <div class="row align-items-start d-flex justify-content-lg-center bg-white w-75 mx-auto opa mb-5 sm">
            <!-- bouton -->
            <div class="btn-group-vertical col-12 mx-auto mx-lg-0 col-sm-8 col-lg-3 col-xl-3 mt-4 mr-1p-0 text-white">
                <button type="button" class="btn bb bg text-white info-e "><a class="text-white" href="<?= PATH_ESPACE . "info"?>">Mes infos personnelles</a></button>
                <button type="button" class="btn bb bg text-white property-e"><a class="text-white" href="<?= PATH_ESPACE . "propose"?>">Proposer un bien</a></button>
                <button type="button" class="btn bb bg text-white favoris-e"><a class="text-white" href="<?= PATH_ESPACE . "favorite"?>">Mes favoris</a></button>
            </div>
            <?= $content ?>
        </div>

    </main>

    <footer class="container-fluid">
        <?=$footer ?>
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/1de34be0f9.js" crossorigin="anonymous"></script>
    <script src="<?= BASE_JS . "frontheader.js"?>"></script>
    <script src="<?= BASE_JS . "frontindex.js"?>"></script>
    <script src="<?= BASE_JS . "frontfoot.js"?>"></script>
    <script src="<?= BASE_JS . "espaceform.js"?>"></script>
</body>

</html>