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
                <table class="table table-striped mx-auto border w-100">
                    <thead>
                        <tr>
                            <th scope="col">Titre</th>
                            <th scope="col">Référence</th>
                            <th scope="col">Prix</th>
                            <th scope="col">Modifier</th>
                            <th scope="col">Top</th>
                            <th scope="col">Visible</th>
                            <th scope="col">Supprimer</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="row">Maison</td>
                            <td>1524362</td>
                            <td>15€</td>
                            <td><button>Modifier</button></td>
                            <td><button>lol</button></td>

                            <td><button>lol</button></td>
                            <td><button>Supprimer</button></td>

                        </tr>
                        <tr>
                            <td scope="row">Maison</td>
                            <td>1524362</td>
                            <td>15€</td>
                            <td><button>Modifier</button></td>
                            <td><button>lol</button></td>

                            <td><button>lol</button></td>
                            <td><button>Supprimer</button></td>

                        </tr>
                        <tr>
                            <td scope="row">Maison</td>
                            <td>1524362</td>
                            <td>15€</td>
                            <td><button>Modifier</button></td>
                            <td><button>lol</button></td>

                            <td><button>lol</button></td>
                            <td><button>Supprimer</button></td>

                        </tr>
                        <tr>
                            <td scope="row">Maison</td>
                            <td>1524362</td>
                            <td>15€</td>
                            <td><button>Modifier</button></td>
                            <td><button>lol</button></td>

                            <td><button>lol</button></td>
                            <td><button>Supprimer</button></td>

                        </tr>
                        <tr>
                            <td scope="row">Maison</td>
                            <td>1524362</td>
                            <td>15€</td>
                            <td><button>Modifier</button></td>
                            <td><button>lol</button></td>

                            <td><button>lol</button></td>
                            <td><button>Supprimer</button></td>

                        </tr>
                        <tr>
                            <td scope="row">Maison</td>
                            <td>1524362</td>
                            <td>15€</td>
                            <td><button>Modifier</button></td>
                            <td><button>lol</button></td>

                            <td><button>lol</button></td>
                            <td><button>Supprimer</button></td>

                        </tr>
                    </tbody>
                </table>
                <div class="col-12 d-flex justify-content-end bouton_ajout">
                    <a href="ajout_biens.php"><button>Ajouter</button></a>
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