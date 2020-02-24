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
            require_once('menu_messages.php')
            ?>
            <div class="col-10 pl-0 pt-5">
                <table class="table table-striped mx-auto border">
                    <thead>
                        <tr>
                            <th scope="col">Supprimer</th>
                            <th scope="col">Expéditeur</th>
                            <th scope="col">Objet</th>
                            <th scope="col">Message</th>
                            <th scope="col">Heure</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="row"><button>Supprimer</button></td>
                            <td>Mark</td>
                            <td>Salut</td>
                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque ex sint maxime, placeat hic cupiditate rerum aliquam... <br><a href="#">Lire la suite</a></td>
                            <td>12:00</td>

                        </tr>
                        <tr>
                        <td scope="row"><button>Supprimer</button></td>
                            <td>Markus</td>
                            <td>Salut</td>
                            <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Assumenda consectetur praesentium quas cupiditate laborum non doloribus expedita, eligendi recusandae. Ab error aperiam animi necessitatibus neque, eaque quam! In, ducimus tenetur.</td>
                            <td>12:00</td>

                        </tr>
                        <tr>
                        <td scope="row"><button>Supprimer</button></td>
                            <td>Larry</td>
                            <td>Salut</td>
                            <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Assumenda consectetur praesentium quas cupiditate laborum non doloribus expedita, eligendi recusandae. Ab error aperiam animi necessitatibus neque, eaque quam! In, ducimus tenetur.</td>
                            <td>12:00</td>

                        </tr>
                        <tr>
                        <td scope="row"><button>Supprimer</button></td>
                            <td>Larry</td>
                            <td>Salut</td>
                            <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Assumenda consectetur praesentium quas cupiditate laborum non doloribus expedita, eligendi recusandae. Ab error aperiam animi necessitatibus neque, eaque quam! In, ducimus tenetur.</td>
                            <td>12:00</td>
                        </tr>
                        <tr>
                        <td scope="row"><button>Supprimer</button></td>
                            <td>Larry</td>
                            <td>Salut</td>
                            <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Assumenda consectetur praesentium quas cupiditate laborum non doloribus expedita, eligendi recusandae. Ab error aperiam animi necessitatibus neque, eaque quam! In, ducimus tenetur.</td>
                            <td>12:00</td>
                        </tr>
                        <tr>
                        <td scope="row"><button>Supprimer</button></td>
                            <td>Larry</td>
                            <td>Salut</td>
                            <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Assumenda consectetur praesentium quas cupiditate laborum non doloribus expedita, eligendi recusandae. Ab error aperiam animi necessitatibus neque, eaque quam! In, ducimus tenetur.</td>
                            <td>12:00</td>

                        </tr>
                    </tbody>
                </table>
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