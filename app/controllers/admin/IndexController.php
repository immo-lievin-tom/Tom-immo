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
            $idaddress = $address->insert(['number' => $_POST['num'], 'street' => $_POST['address'], 'zipcode' => $_POST['zipcode'], 'country' => $_POST['country'], 'city' => $_POST['city']]);

            $target_dir = BASE_UPIMG;
            foreach ($_FILES as $key) {
                $target_file = $target_dir . basename($key["name"]);
                if (move_uploaded_file($key['tmp_name'], $target_file)) {
                    $name = explode(".", $key["name"]);
                    $image->insert(['name' => $name[0], 'path' => $key['name'], 'isTop' => true, 'id_property' => 2]);
                } else {
                    echo 'error';
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
