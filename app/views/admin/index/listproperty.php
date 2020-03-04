<?php

?>

<div class="col-10 pt-5">
    <div class="titre_message pb-5">
        <h4 class="text-center">LISTE DES BIENS</h4>
    </div>
    <table class="table table-striped mx-auto border w-100">
        <p class="textdelete bg-danger text-white p-2">Un bien ne peut être supprimé, il a donc été désactivé !</p>
        <thead class="text-center">
            <tr>
                <th class="text-center" scope="col">Titre</th>
                <th class="text-center" scope="col">Référence</th>
                <th class="text-center" scope="col">Prix</th>
                <th class="text-center" scope="col">Modifier</th>
                <th class="text-center" scope="col">Actif</th>
                <th class="text-center" scope="col">Top</th>
                <th class="text-center" scope="col">Visible</th>
                <th class="text-center" scope="col">Supprimer</th>

            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($all as $value) {
                echo "<tr>";
                foreach ($value as $key => $result) {
                    if ($key == "price") {
                        echo "<td class='text-center'>" . $result . " € </td>";
                        echo '<td class="text-center"><a href=' . BASE_ADMIN . "index/modifyproperty/" . $value["id"] . '><button class="btn bg-white mx-auto col-12 rounded-0 btndelete">Modifier</button></a></td>';
                    } elseif ($key == "isTop" || $key == "isVisible" || $key == "isActive") {
                        $labelid = ($key == "isTop") ? "istop" : "isvis";
                        $labelid = ($key == "isActive") ? "isact" : $labelid;
                        if ($result == 1) {
                            echo '<td class="text-center">
                            <div class="' . $labelid . ' custom-control custom-switch">
                                <input property="' . $value["id"] .'" val ="' . 1 . '" type="checkbox" checked class="custom-control-input" id=' . $value["id"] . $value["reference"] . $labelid . '>
                                <label class="custom-control-label" for=' . $value["id"] . $value["reference"] . $labelid .  '></label>
                            </div>
                        </td>';
                        } else {
                            echo '<td class="text-center">
                            <div class="' . $labelid . ' custom-control custom-switch">
                                <input property="' . $value["id"] .'"val ="' . 0 . '"type="checkbox" class="custom-control-input" id=' . $value["id"] . $value["reference"] . $labelid . '>
                                <label class="custom-control-label" for=' . $value["id"] . $value["reference"] . $labelid .  '></label>
                            </div>
                        </td>';
                        }
                    } elseif ($key !== 'id') {
                        echo "<td class='text-center'>" . $result . "</td>";
                    }
                }
                echo '<td class="text-center"><a property="' . $value["id"] .'"class="delete text-decoration-none text-dark"><i class="icofont-ui-delete icofont-2x"></i></a></td>';
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
    <div class="col-12 d-flex justify-content-end bouton_ajout">
        <a href="<?= BASE_ADMIN . "index/addproperty" ?>"><button type="submit" class="btn btn-outline-dark color1b0a2e text-white">Ajouter</button></a>

    </div>
</div>