<?php 

namespace App\Controllers\Espace;

use Core\Controller;

class AppController extends Controller
{

    protected $appName = 'espace';

    public function __construct()
    {
        /**
         * Dans le constructeur on push des elements specifique à notre module
         */
        $this->viewPath = PATH_VIEWS .   $this->appName;
        //Chacun de ses elements peut etre surchargé dans vos methodeAction
        $element['header'] = $this->buildHeader();
        $element['footer'] = $this->buildFooter();

        $this->addContentToView($element);

        parent::__construct();
    }

    public function buildHeader()
    {
        return $this->renderView('partial/menu');
    }

    public function buildFooter()
    {
        return $this->renderView('partial/footer');
    }

}