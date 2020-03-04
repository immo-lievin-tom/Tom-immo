<?php
echo '<div class="col-12 col-xl-9 mt-4 text-dark row m-0 p-0 favorite-espace">';
foreach ($voir as $key => $value) {
    
    echo '<div class="col-4 col-lg-4 mb-1 p-1">
            <div class="w-100 position-relative text-center">
                <img class="w-100" src="' . BASE_READIMG . $value['path'] .'" alt="">
                <i idproperty="'. $value['id_property'] . '" iduser="' . $value['id_user'] . '" class="iconefav fa-2x fas heart fa-heart text-danger"></i>
            </div>
        </div>';
}
echo '</div>';
