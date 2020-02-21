<?php 


namespace App\Controllers\Admin;

use App\Controllers\Admin\AppController;

class IndexController extends AppController{

    public function __construct()
    {
        parent::__construct();
    }

    public function indexAction()
    { 
        $this->render('index/index');
    }
}