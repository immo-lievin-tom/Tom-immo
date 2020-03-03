<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= BASE_CSS . "icofont/icofont.min.css" ?>">
    <link rel="stylesheet" href="<?= BASE_CSS . "announce_front.css" ?>">
    <link rel="stylesheet" href="<?= BASE_CSS . "header_front.css" ?>">
    <link rel="stylesheet" href="<?= BASE_CSS . "footer_front.css" ?>">
    <link rel="stylesheet" href="<?= BASE_CSS . "index_front.css" ?>">
    <link rel="stylesheet" href="<?= BASE_CSS . "contact_front.css" ?>">
    <link rel="stylesheet" href="<?= BASE_CSS . "announce_front.css" ?>">
    <link rel="stylesheet" href="<?= BASE_CSS . "category_front.css" ?>">
    <link rel="stylesheet" href="<?= BASE_CSS . "aboutus_front.css" ?>">
    <link rel="stylesheet" href="<?= BASE_CSS . "inscription_front.css" ?>">

    <title>Accueil</title>
</head>

<body>
    <header class="headercontainer container-fluid">
        <?= $header ?>
    </header>

    <main class="container-fluid p-0">
        <?= $content ?>
    </main>

    <footer class="container-fluid">
        <?= $footer ?>
    </footer>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/1de34be0f9.js" crossorigin="anonymous"></script>
    <script src="<?= BASE_JS . "frontheader.js" ?>"></script>
    <script src="<?= BASE_JS . "frontindex.js" ?>"></script>
    <script src="<?= BASE_JS . "frontfoot.js" ?>"></script>
    <script src="<?= BASE_JS . "frontannounce.js" ?>"></script>
    <script src="<?= BASE_JS . "frontcategory.js" ?>"></script>
</body>

</html>