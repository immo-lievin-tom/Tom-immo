<?php 

namespace App\Controllers\Api;

use Core\Controller;

class AppController extends Controller
{

    protected $appName = 'api';

    public function __construct()
    {
        /**
         * Dans le constructeur on push des elements specifique à notre module
         */
        $this->viewPath = PATH_VIEWS .   $this->appName;
        //Chacun de ses elements peut etre surchargé dans vos methodeAction
        $element['title'] = 'Api';
        $this->addContentToView($element);
        parent::__construct();
    }


}