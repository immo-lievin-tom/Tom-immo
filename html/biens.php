<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/icofont/icofont.min.css">
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
                            <th class="text-center" scope="col" >Titre</th>
                            <th class="text-center" scope="col" >Référence</th>
                            <th class="text-center" scope="col" >Prix</th>
                            <th class="text-center" scope="col" >Modifier</th>
                            <th class="text-center" scope="col" >Top</th>
                            <th class="text-center" scope="col" >Visible</th>
                            <th class="text-center" scope="col">Supprimer</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center" scope="row">Maison</td>
                            <td class="text-center" class="text-center">1524362</td>
                            <td class="text-center">15€</td>
                            <td class="text-center"><button class="btn bg-white mx-auto col-12 rounded-0 btndelete">Modifier</button></td>
                            <td class="text-center">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="customSwitchesTop">
                                    <label class="custom-control-label" for="customSwitchesTop"></label>
                                </div>
                            </td>

                            <td class="text-center">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="customSwitchesVisible">
                                    <label class="custom-control-label" for="customSwitchesVisible"></label>
                                </div>
                            </td>
                            <td class="text-center" class="text-center"><a class="text-decoration-none text-dark" href="#"><i class="icofont-ui-delete icofont-2x"></i></a></td>

                        </tr>
                        <tr>
                            <td class="text-center" scope="row">Maison</td>
                            <td class="text-center">1524362</td>
                            <td class="text-center">15€</td>
                            <td class="text-center"><button class="btn bg-white mx-auto col-12 rounded-0 btndelete">Modifier</button></td>
                            <td class="text-center">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="customSwitchesTop1">
                                    <label class="custom-control-label" for="customSwitchesTop1"></label>
                                </div>
                            </td>

                            <td class="text-center">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="customSwitchesVisible1">
                                    <label class="custom-control-label" for="customSwitchesVisible1"></label>
                                </div>
                            </td>
                            <td class="text-center" class="text-center"><a class="text-decoration-none text-dark" href="#"><i class="icofont-ui-delete icofont-2x"></i></a></td>

                        </tr>
                        <tr>
                            <td class="text-center" scope="row">Maison</td>
                            <td class="text-center">1524362</td>
                            <td class="text-center">15€</td>
                            <td class="text-center"><button class="btn bg-white mx-auto col-12 rounded-0 btndelete">Modifier</button></td>
                            <td class="text-center">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="customSwitchesTop2">
                                    <label class="custom-control-label" for="customSwitchesTop2"></label>
                                </div>
                            </td>

                            <td class="text-center">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="customSwitchesVisible2">
                                    <label class="custom-control-label" for="customSwitchesVisible2"></label>
                                </div>
                            </td>
                            <td class="text-center" class="text-center"><a class="text-decoration-none text-dark" href="#"><i class="icofont-ui-delete icofont-2x"></i></a></td>

                        </tr>
                        <tr>
                            <td class="text-center" scope="row">Maison</td>
                            <td class="text-center">1524362</td>
                            <td class="text-center">15€</td>
                            <td class="text-center"><button class="btn bg-white mx-auto col-12 rounded-0 btndelete">Modifier</button></td>
                            <td class="text-center">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="customSwitchesTop3">
                                    <label class="custom-control-label" for="customSwitchesTop3"></label>
                                </div>
                            </td>

                            <td class="text-center">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="customSwitchesVisible3">
                                    <label class="custom-control-label" for="customSwitchesVisible3"></label>
                                </div>
                            </td>
                            <td class="text-center" class="text-center"><a class="text-decoration-none text-dark" href="#"><i class="icofont-ui-delete icofont-2x"></i></a></td>

                        </tr>
                        <tr>
                            <td class="text-center" scope="row">Maison</td>
                            <td class="text-center">1524362</td>
                            <td class="text-center">15€</td>
                            <td class="text-center"><button class="btn bg-white mx-auto col-12 rounded-0 btndelete">Modifier</button></td>
                            <td class="text-center">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="customSwitchesTop4">
                                    <label class="custom-control-label" for="customSwitchesTop4"></label>
                                </div>
                            </td>

                            <td class="text-center">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="customSwitchesVisible4">
                                    <label class="custom-control-label" for="customSwitchesVisible4"></label>
                                </div>
                            </td>
                            <td class="text-center" class="text-center"><a class="text-decoration-none text-dark" href="#"><i class="icofont-ui-delete icofont-2x"></i></a></td>

                        </tr>
                        <tr>
                            <td class="text-center" scope="row">Maison</td>
                            <td class="text-center">1524362</td>
                            <td class="text-center">150000000000€</td>
                            <td class="text-center"><button class="btn bg-white mx-auto col-12 rounded-0 btndelete">Modifier</button></td>
                            <td class="text-center">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="customSwitchesTop5">
                                    <label class="custom-control-label" for="customSwitchesTop5"></label>
                                </div>
                            </td>

                            <td class="text-center">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input coucou" id="customSwitchesVisible5">
                                    <label class="custom-control-label coucou" for="customSwitchesVisible5"></label>
                                </div>
                            </td>
                            <td class="text-center" class="text-center"><a class="text-decoration-none text-dark" href="#"><i class="icofont-ui-delete icofont-2x"></i></a></td>

                        </tr>
                    </tbody>
                </table>
                <div class="col-12 d-flex justify-content-end bouton_ajout">
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