<?php


namespace App\Controllers\Admin;

use App\Controllers\Admin\AppController;
use App\Models\Address;
use App\Models\User;
use App\Models\Property;
use App\Models\Image;

class IndexController extends AppController
{

    public function __construct()
    {
        parent::__construct();
    }

    public function indexAction()
    {
        $this->render('index/index');
    }

    public function listpropertyAction()
    {
        // $address = new Address();
        // $allAddress = $address->selectAdress();
        // $users = new User();
        // $allUsers = $users->selectUser();
        // $images = new Image();
        // $allImages = $images->selectImage();
        $properties = new Property();
        $allProperties['all'] = $properties->selectPerso(['name', 'reference', 'price', 'isTop', 'isVisible']);
        $this->render('index/listproperty', $allProperties);
    }

    public function listuserAction()
    {

        $this->render('index/listuser');
    }

    public function listmessageAction()
    {
        $this->render('index/listmessage');
    }

    public function addpropertyAction()
    {
        if (isset($_POST['address'])) {
            $address = new Address();
            $image = new Image();
            $property = new Property();
            $address->setCity(htmlspecialchars($_POST['city']));
            $address->setStreet(htmlspecialchars($_POST['address']));
            $address->setCountry(htmlspecialchars($_POST['country']));
            $address->setZipcode(htmlspecialchars($_POST['zipcode']));
            $address->setNumber(htmlspecialchars($_POST['num']));

            $idaddress = $address->insert();

            $isTop = isset($_POST['isTop']) && $_POST['isTop'] == "on" ? 1 : 0;
            $isActive = isset($_POST['isActive']) && $_POST['isActive'] == "on" ? 1 : 0;
            $isVisible = isset($_POST['isVisible']) && $_POST['isVisible'] == "on" ? 1 : 0;
            $typeproperty = (isset($_POST['typeproperty']) && $_POST['typeproperty'] == 1) ? ['isSale' => 1] : ['isRental' => 1];

            $property->setId(1);
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
            $property->setType_heating(htmlspecialchars($_POST['heating']));
            $property->setGarden(htmlspecialchars($_POST['garage']));
            $property->setIsActive($isActive);
            $property->setIsTop($isTop);
            $property->setId_address($idaddress);
            $property->setIsVisible($isVisible);
            $property->setId_cat(htmlspecialchars($_POST['type']));
            $property->setTypeproperty($typeproperty);

            $idproperty = $property->insert();

            foreach ($_FILES as $key) {
                $target_file = BASE_UPIMG . basename($key["name"]);
                if (move_uploaded_file($key['tmp_name'], $target_file)) {
                    $name = explode(".", $key["name"]);
                    $image->insertImage(['name' => $name[0], 'path' => $key['name'], 'isTop' => true, 'id_property' => $idproperty]);
                }
            }
        }
        $this->render('index/addproperty');
    }

    public function adduserAction()
    {
        $this->render('index/adduser');
    }

    public function modifypropertyAction()
    {
        $this->render('index/modifyproperty');
    }
    public function modifyuserAction()
    {
        $this->render('index/modifyuser');
    }
    public function exportAction()
    {
        $this->render('index/export');
    }
}
