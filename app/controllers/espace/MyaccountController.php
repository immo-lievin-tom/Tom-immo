<?php

namespace App\Controllers\Espace;

use App\Controllers\Espace\AppController;
use App\Models\User;
use App\Models\Property;
use App\Models\Address;
use App\Models\Favorite;
use App\Models\Image;
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
    {if (isset($_POST) && isset($_POST['title'])) {
        $formvalidator = new Validator();

        $resultvalidator = $formvalidator->validTypeMime('photo1', ['image/jpg', 'image/jpeg', 'image/png'], "This MIME Content-type is not valid")->validTypeMime('photo2', ['image/jpg', 'image/jpeg', 'image/png'], "This MIME Content-type is not valid")->validTypeMime('photo3', ['image/jpg', 'image/jpeg', 'image/png'], "This MIME Content-type is not valid")->isValid();

        if ($resultvalidator) {
            $resultError['err'] = $resultvalidator;
            return $this->render('index/addproperty', $resultError);
        } else {
            $address = new Address();
            $property = new Property();

            $address->setCity(htmlspecialchars($_POST['city']));
            $address->setStreet(htmlspecialchars($_POST['address']));
            $address->setCountry(htmlspecialchars($_POST['country']));
            $address->setZipcode(htmlspecialchars($_POST['zipcode']));
            $address->setNumber(htmlspecialchars($_POST['num']));

            $idaddress = $address->insert();

            $isTop = 0;
            $isActive = 0;
            $isVisible = 0;
            $typeproperty = (isset($_POST['typeproperty']) && $_POST['typeproperty'] == 1) ? 'sale' : 'rental';
            $heating = !isset($_POST['heating']) ? 0 : $_POST['heating'];
            $garage = isset($_POST['garage']) ? $_POST['garage'] : 0;

            $property->setId_User(1);
            $property->setTitle(htmlspecialchars($_POST['title']));
            $property->setPrice(htmlspecialchars($_POST['price']));
            $property->setSurface(htmlspecialchars($_POST['surface']));
            $property->setReference(htmlspecialchars($_POST['ref']));
            $property->setDescription(htmlspecialchars($_POST['desc']));
            $property->setNb_room(htmlspecialchars($_POST['room']));
            $property->setNb_bedroom(htmlspecialchars($_POST['bedroom']));
            $property->setNb_bathroom(htmlspecialchars($_POST['nb_bathroom']));
            $property->setGarden(htmlspecialchars($_POST['garden']));
            $property->setEnergy_class(htmlspecialchars($_POST['energy']));
            $property->setType_heating(htmlspecialchars($heating));
            $property->setGarage(htmlspecialchars($garage));
            $property->setIsActive($isActive);
            $property->setIsTop($isTop);
            $property->setId_address($idaddress);
            $property->setIsVisible($isVisible);
            $property->setId_cat(htmlspecialchars($_POST['type']));
            $property->setTypeproperty($typeproperty);

            $idproperty = $property->insert();
            $init = 0;
            foreach ($_FILES as $key) {
                $target_file = BASE_UPIMG . basename($key["name"]);
                $keyarr = array_keys($_FILES);
                if (move_uploaded_file($key['tmp_name'], $target_file)) {
                    $image = new Image();
                    $name = explode(".", $key["name"]);
                    $image->setName($name[0]);
                    $image->setPath(md5($key['name']) . ".jpg");
                    if ($keyarr[$init]) {
                        $image->setIsTop(1);
                    } else {
                        $image->setIsTop(0);
                    };
                    $image->setId_Property($idproperty);
                    $image->insert();
                }
                $init++;
            }
        }
    }
        $this->render('myaccount/propose');
    }

    public function favoriteAction($id)
    {
        $user = new User();
        $fav = new Favorite();
        $user->setId($id);
        $favo['voir'] = $fav->selectFavoriteInner('image', $user->getId());
        $this->render('myaccount/favorite', $favo);
    }

    public function deletefavoriteAction()
    {
        $fav = new Favorite();
        $fav->deleteFavoriteInner($_POST['idproperty']);
        $voir = $fav->selectFavoriteInner('image', $_POST['iduser']);
        foreach ($voir as $key => $value) {
            echo '<div class="col-4 col-lg-4 mb-1 p-1">
            <div class="w-100 position-relative text-center">
                <img class="w-100" src="' . BASE_READIMG . $value['path'] . '" alt="">
                <i idproperty="' . $value['id_property'] . '" iduser="' . $value['id_user'] . '" class="iconefav fa-2x fas heart fa-heart text-danger"></i>
            </div>
        </div>';
        }
    }
}
