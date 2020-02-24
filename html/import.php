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
            require_once('menu_import.php')
            ?>
            <div class="mx-auto">
                <h6 class="mx-auto 
                ">EXPORT</h6>
                <div class="col-10 pl-0 pt-5 d-flex">

                <label class="label" for="start">Start date:</label>

                <input class="input" type="date" id="start" name="trip-start" value="2018-07-22" min="2018-01-01" max="2018-12-31">
                <label class="label" for="end">End date:</label>

                <input class="input" type="date" id="end" name="trip-end" value="2018-07-22" min="2018-01-01" max="2018-12-31">
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