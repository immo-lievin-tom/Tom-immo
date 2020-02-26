<?php 


namespace App\Controllers\Admin;

use App\Controllers\Admin\AppController;
use App\Models\User;

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
        $this->render('index/listproperty');
    }

    public function listuserAction()
    {
        $user = new User();
        $alluser['alluser'] = $user->selectPerso(['id','name','firstname','role']);
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
    public function modifyuserAction($id, $id_adress)
    {
        $user = new User();
        $res["all"] = $user->select($id);
        $this->render('index/modifyuser', $res);
        $address['coor'] = $user->select($id_adress);
        $this->render('index/modifyuser', $address);
    }
    
    public function exportAction()
    {
        $this->render('index/export');
    }
}