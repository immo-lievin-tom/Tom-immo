<div id="carouselIndicators" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item slide active">
            <img class="d-block w-100 img-fluid" src="<?= BASE_IMG . "imgslide1.jpg" ?>" alt="Maison1">
        </div>
        <div class="carousel-item slide">
            <img class="d-block w-100 img-fluid" src="<?= BASE_IMG . "imgslide2.jpg" ?>" alt="Maison2">
        </div>
        <div class="carousel-item slide">
            <img class="d-block w-100 img-fluid" src="<?= BASE_IMG . "imgslide3.jpg" ?>" alt="Maison3">
        </div>
    </div>
    <a class="carousel-control-prev text-dark" href="#carouselIndicators" role="button" data-slide="prev">
        <span class="arrowcontrol"><i class="fas fa-chevron-left" aria-hidden="true"></i></span>
        <span class="sr-only">Précédent</span>
    </a>
    <a class="carousel-control-next" href="#carouselIndicators" role="button" data-slide="next">
        <span class="arrowcontrol"><i class="fas fa-chevron-right" aria-hidden="true"></i></span>
        <span class="sr-only">Suivant</span>
    </a>
</div>

<div class="container-fluid mt-5 text-center">
    <h4 class="titlereassurance">Notre force...</h4>
    <div class="row">
        <div class="d-lg-flex w-75 mx-auto justify-content-center align-items-end">
            <div class="col-10 col-lg-4 col-xl-3 mx-auto my-3 border-bottom p-0">
                <span class="sizereassurance">126</span>
                <p class="textreassurance mx-auto">Nombre d'annonce sur le site</p>
            </div>
            <div class="col-10 col-lg-4 col-xl-3 mx-auto my-3 border-bottom p-0">
                <i class="sizereassurance icofont-chart-histogram-alt"></i>
                <p class="mt-3 textreassurance mx-auto">Meilleur site</p>
            </div>
            <div class="col-10 col-lg-4 col-xl-3 mx-auto my-3 border-bottom p-0">
                <i class="sizereassurance icofont-euro"></i>
                <p class="mt-3 textreassurance mx-auto">Proposez votre bien</p>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row my-3 my-lg-5">

        <?php

        foreach ($property as $key => $val) {
            echo "<div class='col-12 col-lg-4'><div class='row my-3 my-lg-5'>";
            foreach ($val as $key2 => $val2) {
                if ($key2 == 'name') {
                    echo "<h4 class='col-12 text-center announcetitle'><a href='" . BASE_ANNOUNCE . "/" . $val['id'] . "'class='text-decoration-none'>$val2</a></h4>";
                    foreach ($image as $key1 => $value) {
                        foreach ($value as $key2 => $value2) {
                            if ($value2['id_property'] == $val['id']) {
                                if ($value2['isTop'] == 1) {
                                    echo "<div class='col-12 col-sm-10 col-md-9 col-lg-10 p-0 mx-auto mt-3'><img class='w-100 img-fluid imgmain' src=" . BASE_READIMG . $value2['path'] . " alt=''></div>";
                                    echo "<div class='row mx-1 mt-3 d-flex justify-content-center'>";
                                }
                                echo "<div class='col-4 col-sm-3 p-1'><img class='w-100 img-fluid imgthumbnail' src=" .  BASE_READIMG . $value2['path'] . " alt=''></div>";
                            };
                        }
                    }
                    echo "</div>";
                }
            }
            echo "</div></div>";
        }

        ?>

    </div>
</div>