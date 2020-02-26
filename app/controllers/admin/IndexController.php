<?php 


namespace App\Controllers\Admin;

use App\Controllers\Admin\AppController;
use App\Models\Address;

class IndexController extends AppController{

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
        $address = new Address();
        $hey = $address->selectAdress();

        $this->render('index/listproperty');
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