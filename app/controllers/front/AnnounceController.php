<?php

namespace App\Controllers\Front;

use App\Controllers\Front\AppController;

class AnnounceController extends AppController
{
    public function __construct()
    {
        parent::__construct();
    }
    
    public function categoryAction()
    {
       $this->render('category/index');
    }

}