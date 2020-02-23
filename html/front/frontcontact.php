<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/contact_front.css">
    <link rel="stylesheet" href="../css/header_front.css">
    <link rel="stylesheet" href="../css/icofont/icofont.min.css">
    <title>Contact</title>
</head>

<body>

    <header class="headercontainer container-fluid">
        <?php require_once('frontheader.php') ?>
    </header>

    <main class="container-fluid">
        <div class="row">

            <!-- Contact -->

            <div class="col-10 mx-auto col-lg-5 mt-4 border p-2 contactform mx-2 text-white">
                <h4 class="text-center">Contact</h4>
                <form method="post" class="p-2 text-center">
                    <div class="form-group d-flex justify-content-between">
                        <label for="name">Nom</label>
                        <input type="text" class="col-8 d-inline form-control" id="name" name="name" placeholder="Nom">
                    </div>
                    <div class="form-group d-flex justify-content-between">
                        <label for="firstname">Prénom</label>
                        <input type="text" class="col-8 d-inline form-control" id="firstname" name="firstname" placeholder="Prénom">
                    </div>
                    <div class="form-group d-flex justify-content-between">
                        <label for="email">Email</label>
                        <input type="email" class="col-8 d-inline form-control" id="email" name="email" placeholder="Adresse email">
                    </div>
                    <div class="form-group d-flex justify-content-between">
                        <label for="object">Objet</label>
                        <input type="text" class="col-8 d-inline form-control" id="object" name="object" placeholder="Objet">
                    </div>
                    <div class="form-group d-flex justify-content-between">
                        <label for="subject">Message</label>
                        <textarea class="col-8 d-inline form-control" id="subject" name="subject" placeholder="Message" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-outline-dark text-white">Envoyer</button>
                </form>
            </div>

        </div>

    </main>

    <footer>

    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/1de34be0f9.js" crossorigin="anonymous"></script>
    <script src="../js/frontheader.js"></script>
</body>

</html>