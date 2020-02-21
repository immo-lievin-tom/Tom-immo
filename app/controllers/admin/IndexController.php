<?php 


namespace App\Controllers\Admin;

use App\Controllers\Admin\AppController;

class IndexController extends AppController{

    public function __construct()
    {
        parent::__construct();
    }

    public function indexAction()
<<<<<<< HEAD
    { 
=======
    {
>>>>>>> 13533d8004d40a113556d0aa621c0652438dafd7
        $this->render('index/index');
    }
}