<div class="row w-100 h-100">

    <!-- Header logo -->

    <div class="col-6 col-lg-3 my-auto d-flex justify-content-center">
        <a href="<?= BASE_DIR ?>"><img src="<?= BASE_IMG . "logo_head.png" ?>" alt="" class="w-100 img-fluid logohead"></a>
    </div>

    <div class="d-none d-lg-block menu col-lg-7 my-auto">

        <!-- Menu -->

        <nav class="w80 mx-auto text-white bg-dark">
            <ul class="p-0 d-lg-flex flex-row justify-content-around my-lg-auto ulmenu">
                <li class="list-unstyled py-2 flex-fill text-center limenu">
                    <a class="p-0 text-decoration-none" href="<?= BASE_DIR ?>">Accueil</a>
                </li>
                <li class="list-unstyled py-2 flex-fill text-center limenu">
                    <a class="p-0 text-decoration-none" href="<?= BASE_DIR . "index/category" ?>">Biens</a>
                </li>
                <li class="list-unstyled py-2 flex-fill text-center limenu limenucat position-relative">
                    <a class="p-0 text-decoration-none" href="<?= BASE_DIR . "index/property" ?>">Catégories</a>
                    <ul class="submenu p-0 mt-lg-2 w-100">
                        <li class="list-unstyled py-2 licat"><a class="text-decoration-none" href="#">Catégorie 1</a></li>
                        <li class="list-unstyled py-2 licat"><a class="text-decoration-none" href="#">Catégorie 2</a></li>
                        <li class="list-unstyled py-2 licat"><a class="text-decoration-none" href="#">Catégorie 3</a></li>
                    </ul>
                </li>
                <li class="list-unstyled py-2 flex-fill text-center limenu">
                    <a class="p-0 text-decoration-none" href="<?= BASE_ESPACE . "propose" ?>">Proposer un bien</a>
                </li>
                <li class="list-unstyled py-2 flex-fill text-center limenu">
                    <a class="p-0 text-decoration-none" href="<?= BASE_DIR . "index/contact" ?>">Contact</a>
                </li>
            </ul>
        </nav>

    </div>

    <div class="col-6 col-lg-2 iconheader d-flex justify-content-center justify-content-lg-start align-items-center position-relative">

        <!-- Icon header  -->

        <i class="icofont-ui-search icon iconsearch icofont-2x mx-2"></i>
        <div class="input-group mt-2 position-absolute w-75 searchinput mx-2">
            <input type="text" class="form-control formsearch" placeholder="Search">
        </div>
        <a class="icon" href="<?= BASE_DIR . "index/connection" ?>"><i class="icofont-user-alt-7 icon icofont-2x mx-2"></i></a>
        <div class="hamburger d-lg-none">
            <span class="bar1 bars"></span>
            <span class="bar2 bars"></span>
            <span class="bar3 bars"></span>
        </div>
    </div>

    <!-- Menu list mobile -->

    <div class="w65 h-100 d-lg-none position-fixed mobilemenu">
    </div>

</div>