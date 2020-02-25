<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/index_front.css">
    <link rel="stylesheet" href="../css/header_front.css">
    <link rel="stylesheet" href="../css/icofont/icofont.min.css">
    <link rel="stylesheet" href="../css/espace_info_front.css">
    <link rel="stylesheet" href="../css/footer_front.css">
    <title>Espace perso</title>
</head>

<body class="bodycontainer">
    <header class="headercontainer container-fluid">
        <?php require_once('frontheader.php') ?>
    </header>
    <main class="container-fluid">
        <div class="row align-items-start d-flex justify-content-lg-center bg-white w-75 mx-auto opa mb-5 sm">
            <!-- bouton -->
            <div class="btn-group-vertical col-12 mx-auto mx-lg-0 col-sm-8 col-lg-3 col-xl-3 mt-4 mr-1p-0 text-white">
                <button type="button" class="btn bb bg text-white info-e buttonespace">Mes infos personnelles</button>
                <button type="button" class="btn bb bg text-white property-e">Proposer un bien</button>
                <button type="button" class="btn bb bg text-white favoris-e">Mes favoris</button>
            </div>
            <?php require_once('espaceinfoperso.php'); ?>
            <?php require_once('espaceproposerbien.php'); ?>
            <?php require_once('espacefavoris.php'); ?>
        </div>




    </main>

    <footer class="container-fluid">
        <?php require_once('footer.php'); ?>
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/1de34be0f9.js" crossorigin="anonymous"></script>
    <script src="../js/frontheader.js"></script>
    <script src="../js/frontindex.js"></script>
    <script src="../js/frontfoot.js"></script>
    <script src="../js/espaceform.js"></script>
</body>

</html>