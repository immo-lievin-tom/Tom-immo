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
            require_once('menu_utilisateurs.php')
            ?>
            <div class="col-10 pl-0 pt-5">
                <table class="table table-striped mx-auto border">
                    <thead>
                        <tr>
                            <th scope="col">Nom</th>
                            <th scope="col">Prénoms</th>
                            <th scope="col">Activer</th>
                            <th scope="col">Modifier</th>
                            <th scope="col">Supprimer</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="row">DOE</td>
                            <td>Mark</td>
                            <td><button>Activer</button></td>
                            <td><button>Modifier</button></td>
                            <td><button>Supprimer</button></td>

                        </tr>
                        <tr>
                            <td scope="row">DOE</td>
                            <td>Markus</td>
                            <td><button>Activer</button></td>
                            <td><button>Modifier</button></td>
                            <td><button>Supprimer</button></td>

                        </tr>
                        <tr>
                            <td scope="row">DOE</td>
                            <td>Larry</td>
                            <td><button>Activer</button></td>
                            <td><button>Modifier</button></td>
                            <td><button>Supprimer</button></td>

                        </tr>
                        <tr>
                            <td scope="row">DOE</td>
                            <td>Larry</td>
                            <td><button>Activer</button></td>
                            <td><button>Modifier</button></td>
                            <td><button>Supprimer</button></td>

                        </tr>
                        <tr>
                            <td scope="row">DOE</td>
                            <td>Larry</td>
                            <td><button>Activer</button></td>
                            <td><button>Modifier</button></td>
                            <td><button>Supprimer</button></td>

                        </tr>
                        <tr>
                            <td scope="row">DOE</td>
                            <td>Larry</td>
                            <td><button>Activer</button></td>
                            <td><button>Modifier</button></td>
                            <td><button>Supprimer</button></td>

                        </tr>
                    </tbody>
                </table>
                <div class="col-12 d-flex justify-content-end bouton_ajout">
                   <button><a href="ajout_utilisateurs.php">Ajouter</a></button> 
                </div>
                
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