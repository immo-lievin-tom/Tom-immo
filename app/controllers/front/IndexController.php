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
        $element['title'] = 'changement';
        $this->addContentToView($element);

        //Dans un tableau la variable "name" qui se trouve
        // dans la vue index de mon module "front"
        $tableauPourLaVue = ['name' => 'undeundeu'];
         
        $this->render('index/index', $tableauPourLaVue);
      
    }

public function connectionAction()
    {}

public function contactAction()
    {}

public function inscriptionAction()
    {}

public function agencyAction()
    {}

public function mentionAction()
    {}
}