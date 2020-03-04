

<div class="col-12 col-lg-10 pt-5">
    <div class="col-12 mx-auto">
        <h4 class="text-center my-3">Listes des Messages</h4>
        <table class="table table-striped mx-auto border w-100">
            <thead>
                <tr>
                    <th class="text-center" scope="col">Supprimer</th>
                    <th class="text-center" scope="col">Voir</th>
                    <th class="text-center" scope="col">Expéditeur</th>
                    <th class="text-center" scope="col">Objet</th>
                    <th class="text-center" scope="col">Message</th>
                    <th class="text-center" scope="col">Heure</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    foreach($all as $line){?>
                        <tr>
                    <td class="text-center" scope="row"><button class="btn bg-white mx-auto col-12 rounded-0 btndelete">Supprimer</button></td>
                    <td class="text-center" scope="row"><a class="text-decoration-none text-dark pt-3" href="<?= BASE_ADMIN . "index/detailmessage/".$line['id']?>">Voir</a></td>
                    <td class="text-center pt-3"><?php echo $line['name'];?></td>
                    <td class="text-center pt-3"><?php echo $line['object'];?></td>
                    <td class="messageadmin pt-3"><?php echo $line['message'];?></td>
                    <td class="text-center pt-3"><?php echo $line['date_create'];?></td>
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </div>
</div>