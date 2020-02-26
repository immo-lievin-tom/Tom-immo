<?php 

namespace App\Controllers\Espace;

use App\Controllers\Espace\AppController;

class MyaccountController extends AppController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function infoAction()
    {
        $this->render('myaccount/info');
    }

    public function proposeAction()
    {
        $this->render('myaccount/propose');
    }
    
    public function favoriteAction()
    {
        $this->render('myaccount/favorite');
    }


}