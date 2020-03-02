<?php


namespace App\Controllers\Admin;

use App\Controllers\Admin\AppController;
use App\Models\User;
use App\Models\Address;
use Core\Validator;

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
        $alluser['alluser'] = $user->selectPerso(['id', 'name', 'firstname', 'role', 'isActive']);
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

    public function activeuserAction()
    {
        $user = new User();
        $user->setId($_POST['id']);
        if ($_POST['isact'] == 1) {
            $user->setIs_active(0);
        } else {
            $user->setIs_active(1);
        }

        $user->updateIs(["isActive" => $user->getIs_active()]);
    }

    public function adduserAction()
    {
        $user = new User();
        if (isset($_POST['name'])) {
            $adress = new Address();
            $validator = new Validator();
            $result = $validator->testMail($_POST['email'], 'Email invalide')->testPassword($_POST['password'], 'Mot de passe invalide')->testInputLength($_POST['name'], 2, 'Données invalide')->testInputLength($_POST['firstname'], 2, 'Données invalide')->testDate($_POST['date_birth'], 'Date invalide', 'Date invalide')->testInputLength($_POST['phone_number'], 2, 'Numéro de téléphone invalide')->testInputLength($_POST['country'], 2, 'Pays invalide')->testInputLength($_POST['city'], 2, 'Ville invalide')->testInputLength($_POST['zipcode'], 4, 'Ville invalide')->testInputLength($_POST['street'], 2, 'Adresse invalide')->testInputLength($_POST['number'], 1, 'Numéro invalide')->isValid();

            if ($result) {
                $address['error'] = $result;
                $this->render('index/adduser', $address);
            } else {
                $adress->setCountry(htmlspecialchars($_POST['country']));
                $adress->setCity(htmlspecialchars($_POST['city']));
                $adress->setZipcode(htmlspecialchars($_POST['zipcode']));
                $adress->setStreet(htmlspecialchars($_POST['street']));
                $adress->setNumber(htmlspecialchars($_POST['number']));
                $id_address = $adress->insert();
                $datebirth = date('Y-m-d H:i:s', strtotime(htmlspecialchars($_POST['date_birth'])));
                $user->setName(htmlspecialchars($_POST['name']));
                $user->setFirstname(htmlspecialchars($_POST['firstname']));
                $user->setDate_birth($datebirth);
                $user->setEmail(htmlspecialchars($_POST['email']));
                $user->setPassword(htmlspecialchars(password_hash($_POST['password'], PASSWORD_BCRYPT)));
                $user->setPhone_number(htmlspecialchars($_POST['phone_number']));
                $user->setRole(htmlspecialchars($_POST['role']));
                $user->setId_address($id_address);
                $user->insert();
            }
        }
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
                $user->setPassword(htmlspecialchars(password_hash($_POST['password'], PASSWORD_BCRYPT)));
                $user->setPhone_number(htmlspecialchars($_POST['phone_number']));
                $user->setRole(htmlspecialchars($_POST['role']));
                $user->setId_address(htmlspecialchars($_POST['id_address']));
                $user->update();
                $address['coor'] = $user->selectInner('address', 'user.id_address = address.id', ['user.id' => $user->getId()]);
            }
        }
        $this->render('index/modifyuser', $address);
    }

    public function connectionAction()
    {
        $user = new User();
        if (isset($_POST['email']) && isset($_POST['password'])) {
            $result = $user->selectPersoCondition(['email', 'password'], ['email'=>$_POST['email']]);
            var_dump($result);
            if($result){
                if (password_verify($_POST['password'], $result[0]['password'])) {
                    header('Location: index/index');
                }
            }else{
                echo "Dommage";
            }
        }
        $this->render('index/connection');
    }


    public function exportAction()
    {
        $this->render('index/export');
    }
}
