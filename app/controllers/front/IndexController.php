<?php

namespace App\Controllers\Front;


use App\Controllers\Front\AppController;
use App\Models\Property;
use App\Models\Image;
use App\Models\User;

class IndexController extends AppController
{



    public function __construct()
    {


        parent::__construct();
    }

    public function indexAction()
    {
        $topproperty = new Property();
        $topimage = new Image();
        $result['property'] = $topproperty->selectPersoCondition(['id', 'name'], ['isTop' => 1]);
        $result['image'] = [];
        foreach ($result['property'] as $key) {
            foreach ($key as $key2 => $value) {
                if ($key2 == 'id') {
                    array_push($result['image'], $topimage->selectPersoCondition(['name', 'id_property', 'path', 'isTop'], ['id_property' => $value]));
                }
            }
        }
        $this->render('index/index', $result);
    }

    public function connectionAction()
    {
        $this->render('index/connection');
    }

    public function aboutusAction()
    {
        $this->render('index/aboutus');
    }

    public function inscriptionAction()
    {
        $this->render('index/inscription');
    }

    public function announceAction($id)
    {
        $property = new Property();
        $image = new Image();
        $result['property'] = $property->select(['id' => $id]);
        $result['image'] = $image->selectPersoCondition(['name', 'id_property', 'path', 'isTop'], ['id_property' => $id]);
        $this->render('index/announce', $result);
    }

    public function categoryAction()
    {
        $this->render('index/category');
    }

    public function contactAction()
    {
        $this->render('index/contact');
    }

    public function mentionAction()
    {
        $this->render('index/mention');
    }
}
