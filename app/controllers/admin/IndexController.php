<?php


namespace App\Controllers\Admin;

use App\Controllers\Admin\AppController;
use App\Models\Message;
use League\Csv\Writer;
use App\Models\Property;


class IndexController extends AppController
{

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
        $this->render('index/listuser');
    }

    public function listmessageAction($id = '', $action = '')
    {
        $message = new Message();

        if ($id != '' && $action == 'delete') {
            $message->setId($id);
            $message->updateIs(['isActive' => 0]);
        }
        $array['all'] = $message->selectBy(['isActive' => 1]);
        $this->render('index/listmessage', $array);
    }

    public function detailmessageAction($id)
    {
        $message = new Message();
        $message->setId($id);
        $array['one'] = $message->select();

        $message->updateIs(['isRead' => 1]);

        $this->render('index/detail_message', $array);
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

        $properties = new Property();
        $allProperties['all'] = $properties->selectPerso(['id', 'name', 'reference', 'price', 'isActive', 'isTop', 'isVisible']);

        if (isset($_POST['valider'])){
            //we create the CSV into memory
        $csv = Writer::createFromFileObject(new \SplTempFileObject());

        //we insert the CSV header
        $csv->insertOne(['firstname', 'lastname', 'email']);

        // The PDOStatement Object implements the Traversable Interface
        // that's why Writer::insertAll can directly insert
        // the data into the CSV
        $csv->insertAll($allProperties['all']);

        // Because you are providing the filename you don't have to
        // set the HTTP headers Writer::output can
        // directly set them for you
        // The file is downloadable
        $csv->output('users.csv');
        die;
        }
        
        $this->render('index/export');
    }
}
