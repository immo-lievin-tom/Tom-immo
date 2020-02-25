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
                <div class="titre_message pb-5">
                    <h4 class="text-center">LISTE DES MESSAGES</h4>
                </div>
                <div class="col-12 col-lg-10 mx-auto">
                    <h4 class="text-center my-3">Messages</h4>
                    <table class="table table-striped mx-auto border w-100">
                        <thead>
                            <tr>
                                <th scope="col">Supprimer</th>
                                <th scope="col">Voir</th>
                                <th scope="col">Expéditeur</th>
                                <th scope="col">Objet</th>
                                <th scope="col">Message</th>
                                <th scope="col">Heure</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="row"><button class="btn bg-white mx-auto col-12 rounded-0 btndelete">Supprimer</button></td>
                                <td scope="row"><a class="text-decoration-none text-dark" href="#"><i class="icofont-eye icofont-2x"></i></a></td>
                                <td>Mark</td>
                                <td>Salut</td>
                                <td class="messageadmin">Lorem deux ipsum dolor sit amet consectetur adipisicing elit. Eaque ex sint maxime, placeat hic cupiditate rerum aliquam...</td>
                                <td>12:00</td>
                            </tr>
                        </tbody>
                    </table>
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