<?php

namespace App\Controllers\Front;

use App\Controllers\Front\AppController;

class ErrorController extends AppController
{
    public function __construct()
    {
        parent::__construct();
    }
    
    public function indexAction()
    {
        $this->render('error/index');
    }
}
