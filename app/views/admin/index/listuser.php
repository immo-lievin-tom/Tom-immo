<div class="col-10 pt-5">
    <table class="table table-striped mx-auto border w-100">
        <thead>
            <tr>
                <th class="text-center" scope="col">Nom</th>
                <th class="text-center" scope="col">Prénoms</th>
                <th class="text-center" scope="col">Role</th>
                <th class="text-center" scope="col">Activer</th>
                <th class="text-center" scope="col">Modifier</th>
            </tr>
        </thead>
        <tbody>

            <?php
            
            foreach ($alluser as $key) {
                echo '<tr>';
                foreach ($key as $key2 => $value) {
                    if($key2 !== "id" && $key2 !== 'isActive') {
                        echo '<td class="text-center" scope="row">' . $value . '</td>';
                    }
                    if($key2 == 'isActive'){
                        $result = ($value == 1) ? "Activer" : "Désactiver";
                        echo $result;
                        echo '<td class="text-center"><a href=' . BASE_ADMIN . 'index/activeuser/?id=' . $key['id'] . '><button class="btn bg-white mx-auto col-9 rounded-0 btndelete">' . $result . '</button></a></td>';
                        echo '<td class="text-center"><a class="text-decoration-none text-dark" href=' . BASE_ADMIN . 'index/modifyuser/' . $key['id'] . '><i class="icofont-arrow-right icofont-2x"></i></a></td>';
                    }
                }
                echo '</tr>';
            }
            ?>


            
            
            

        </tbody>
    </table>
    <div class="row m-0 d-flex col-12 justify-content-end">
        <a href="<?= BASE_ADMIN . "index/adduser" ?>"><button type="submit" class="btn btn-outline-dark color1b0a2e text-white">Ajouter</button></a>
    </div>
</div>
</div>