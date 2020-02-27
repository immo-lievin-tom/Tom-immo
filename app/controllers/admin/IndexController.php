<?php


namespace App\Controllers\Admin;

use App\Controllers\Admin\AppController;
use App\Models\User;
use App\Models\Address;

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
        $this->render('index/listproperty');
    }

    public function listuserAction()
    {
        $user = new User();
        $alluser['alluser'] = $user->selectPerso(['id', 'name', 'firstname', 'role']);
        $this->render('index/listuser', $alluser);
    }

    public function listmessageAction()
    {
        $this->render('index/listmessage');
    }

    public function addpropertyAction()
    {
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

    public function modifyuserAction($id)
    {
        $user = new User(); 
        $user->setId($id);
        $address['coor'] = $user->selectInner('address', 'user.id_address = address.id', ['user.id' => $user->getId()]);
        if (isset($_POST['name'])) {   

            $user->setName($_POST['name']);
            $user->setFirstname($_POST['firstname']);
            $user->setDate_birth($_POST['date_birth']);
            $user->setEmail($_POST['email']);
            $user->setPassword($_POST['password']);
            $user->setPhone_number($_POST['phone_number']);
            $user->update();

            $adress = new Address(); 
            $adress->setId($_POST['id_address']);
            $adress->setCountry($_POST['country']);
            $adress->setCity($_POST['city']);
            $adress->setZipcode($_POST['zipcode']);
            $adress->setStreet($_POST['street']);
            $adress->setNumber($_POST['number']);
            $adress->update();

        }
        $this->render('index/modifyuser', $address);
    }

    // public function modifyaddressUserAction($id)
    // {
    //     $user = new User();
    //     $address['coor'] = $user->selectInner('address', ['address.id'=>'user.id_adress']);
    //     $this->render('index/modifyuser', $address);
    //     var_dump($address);
    // }

    public function exportAction()
    {
        $this->render('index/export');
    }
}
