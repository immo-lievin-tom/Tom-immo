<?php

namespace App\Controllers\Espace;

use App\Controllers\Espace\AppController;
use App\Models\User;
use App\Models\Address;
use App\Models\Favorite;
use Core\Validator;

class MyaccountController extends AppController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function infoAction($id)
    {
        $user = new User();
        $user->setId($id);
        $address['coor'] = $user->selectInner('address', 'user.id_address = address.id', ['user.id' => $user->getId()]);
        if (isset($_POST['name'])) {
            $adress = new Address();
            $validator = new Validator();

            $result = $validator->testMail($_POST['email'], 'Email invalide')->testPassword($_POST['password'], 'Mot de passe invalide')->testInputLength($_POST['name'], 2, 'Données invalide')->testInputLength($_POST['firstname'], 2, 'Données invalide')->testDate($_POST['date_birth'], 'Date invalide', 'Date invalide')->testInputLength($_POST['phone_number'], 2, 'Numéro de téléphone invalide')->testInputLength($_POST['country'], 2, 'Pays invalide')->testInputLength($_POST['city'], 2, 'Ville invalide')->testInputLength($_POST['zipcode'], 4, 'Ville invalide')->testInputLength($_POST['street'], 2, 'Adresse invalide')->testInputLength($_POST['number'], 1, 'Numéro invalide')->isValid();

            if ($result) {
                $address['error'] = $result;
            } else {
                $adress->setId(htmlspecialchars($_POST['id_address']));
                $adress->setCountry(htmlspecialchars($_POST['country']));
                $adress->setCity(htmlspecialchars($_POST['city']));
                $adress->setZipcode(htmlspecialchars($_POST['zipcode']));
                $adress->setStreet(htmlspecialchars($_POST['street']));
                $adress->setNumber(htmlspecialchars($_POST['number']));
                $adress->update();
                $user->setName(htmlspecialchars($_POST['name']));
                $user->setFirstname(htmlspecialchars($_POST['firstname']));
                $user->setDate_birth(htmlspecialchars($_POST['date_birth']));
                $user->setEmail(htmlspecialchars($_POST['email']));
                if ($_POST['password2'] == $_POST['password']) {
                    $user->setPassword(htmlspecialchars($_POST['password']));
                } else {
                    $user->setPassword(htmlspecialchars(password_hash($_POST['password'], PASSWORD_BCRYPT)));
                }

                $user->setPhone_number(htmlspecialchars($_POST['phone_number']));
                $user->setRole(htmlspecialchars($_POST['role']));
                $user->setId_address(htmlspecialchars($_POST['id_address']));
                $user->update();
                $address['coor'] = $user->selectInner('address', 'user.id_address = address.id', ['user.id' => $user->getId()]);
            }
        }
        $this->render('myaccount/info', $address);
    }

    public function proposeAction()
    {
        $this->render('myaccount/propose');
    }

    public function favoriteAction($id)
    {
        $user = new User();
        $fav = new Favorite();
        $user->setId($id);
        $favo = $fav->selectInner('property', 'favorite.id_user ='. $id, ['favorite.id_user' => $user->getId()]);
        var_dump($favo);
        $this->render('myaccount/favorite');
    }
}
