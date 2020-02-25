<?php 
namespace App\Controllers\Front;


use App\Controllers\Front\AppController;
use App\Models\User;

class IndexController extends AppController{

    

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
        $this->render('index/connection');
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