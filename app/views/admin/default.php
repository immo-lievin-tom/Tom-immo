<?php
// session_start();
// if(!isset($_SESSION['role']) || $_SESSION['role'] !== '1'){
//     header('Location: ' . BASE_DIR . 'index/index');
// }


?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link rel="stylesheet" href="<?= BASE_CSS . "admin.css" ?>">
    <link rel="stylesheet" href="<?= BASE_CSS . "icofont/icofont.min.css" ?>">
    <title><?= $title ?></title>
</head>

<body>

    <?= $header ?>

    <div class="container-fluid">
        <div class="row">

            <?= $menu ?>


            <?php 
            // ce qui est envoyé par render
            echo $content ?>

        </div>

    </div>

    <?= $footer ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a2bab1df4f.js" crossorigin="anonymous"></script>
    <script src="<?= BASE_JS . "admin.js" ?>"></script>

</body>

</html>