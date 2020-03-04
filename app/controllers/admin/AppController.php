<?php 

namespace App\Controllers\Admin;

use Core\Controller;
use App\Models\Message;

class AppController extends Controller
{

    protected $appName = 'admin';

    public function __construct()
    {
        /**
         * Dans le constructeur on push des elements specifique à notre module
         */
        $this->viewPath = PATH_VIEWS .   $this->appName;
        //Chacun de ses elements peut etre surchargé dans vos methodeAction
        $element['header'] = $this->buildHeader();
        $element['footer'] = $this->buildFooter();
        $element['menu'] = $this->buildMenu();
        $element['title'] = 'Admin';

        $this->addContentToView($element);

        parent::__construct();
    }

    public function buildHeader()
    {
        return $this->renderView('partial/header');
    }

    public function buildFooter()
    {
        return $this->renderView('partial/footer');
    }

    public function buildMenu()
    {
        $messages = New Message();
        $messagesNonLus = $messages->getMessagesNonLus()[0]['Nb'];
        return $this->renderView('partial/menu', ['messages'=>$messagesNonLus]);
    }

}