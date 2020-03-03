<?php

namespace App\Controllers\Front;


use App\Controllers\Front\AppController;
use App\Models\User;

class IndexController extends AppController
{



    public function __construct()
    {


        parent::__construct();
    }

    public function indexAction()
    {

        //Ici pour vous montrer je surcharge le title qui se trouve dans 
        // le constructeur parent
        // $element['title'] = 'changement';
        // $this->addContentToView($element);

        // //Dans un tableau la variable "name" qui se trouve
        // // dans la vue index de mon module "front"
        // $tableauPourLaVue = ['name' => 'undeundeu'];

        $this->render('index/index');
    }

    public function connectionAction()
    {
        $user = new User();
        if (isset($_POST['email']) && isset($_POST['password'])) {
            $result = $user->selectPersoCondition(['id', 'email', 'password', 'role'], ['email' => $_POST['email']]);

            if ($result) {
                if (password_verify($_POST['password'], $result[0]['password'])) {
                    echo 'coucou';
                    $_SESSION['role'] = $result[0]['role'];
                    $_SESSION['id'] = $result[0]['id'];
                    header('Location: index/index');
                }
            } else {
                echo "Dommage";
            }
        }
        $this->render('index/connection');
    }


    public function disconnectAction()
    {
        session_destroy();
        header('Location: ' . BASE_DIR . 'index/index');
        $this->render('index/index');
    }

    public function aboutusAction()
    {
        $this->render('index/aboutus');
    }

    public function inscriptionAction()
    {
        $this->render('index/inscription');
    }

    public function announceAction()
    {
        $this->render('index/announce');
    }

    public function categoryAction()
    {
        $this->render('index/category');
    }

    public function contactAction()
    {
        $this->render('index/contact');
    }



    public function mentionAction()
    {
        $this->render('index/mention');
    }
}
