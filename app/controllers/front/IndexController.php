<?php

namespace App\Controllers\Front;


use App\Controllers\Front\AppController;
use App\Models\Property;
use App\Models\Favorite;
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
        $user = new User();
        if (isset($_POST['email']) && isset($_POST['password'])) {
            $result = $user->selectPersoCondition(['id', 'email', 'password', 'role'], ['email' => $_POST['email']]);

            if ($result) {
                if (password_verify($_POST['password'], $result[0]['password'])) {
                    echo 'coucou';
                    $_SESSION['role'] = $result[0]['role'];
                    $_SESSION['id'] = $result[0]['id'];
                    header('Location: index/index');
                }
            } else {
                echo "Dommage";
            }
        }
        $this->render('index/connection');
    }


    public function disconnectAction()
    {
        session_destroy();
        header('Location: ' . BASE_DIR . 'index/index');
        $this->render('index/index');
    }

    public function aboutusAction()
    {
        $this->render('index/aboutus');
    }

    public function inscriptionAction()
    {
        $this->render('index/inscription');
    }

    public function addfavoriteAction()
    {
        $fav = new Favorite();
        $fav->setId_property($_POST['idproperty']);
        $fav->setId_user($_POST['iduser']);
        $fav->insert();
        echo true;
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
        $property = new Property();
        $result['result'] = $property->selectPropertyInner('image', 'property.id = image.id_property', 'image.isTop = 1');
        $this->render('index/category', $result);
    }

    public function contactAction()
    {
        $this->render('index/contact');
    }

    public function selectrentalAction()
    {
        $property = new Property();
        $result['result'] = $property->selectPropertyInner('image', 'property.id = image.id_property', 'image.isTop = 1 and property.typeproperty = "rental"');

        foreach ($result['result'] as $key => $value) {
            echo "<div class='col-12 col-sm-10 col-md-8 col-lg-4 text-center announcecat position-relative'>";
            extract($value);
            echo "<img src='" . BASE_IMG . $path . "' class='w-100 img-fluid imgcategory' alt=''>
                    <div class='txtdescannounce position-absolute mx-auto d-flex align-items-center'>
                        <p class='mx-auto p-3 descannounce'>" . $description .
                "<a href='" .  BASE_ANNOUNCE . "/" . $id . "'>Plus d'infos</a>
                        </p>
                    </div>

                    <div class='px-2 text-left txtsub'>
                        <p class='mt-2'>" .  $title . "</p>
                        <p>Référence : <span>" . $reference  . "</span></p>
                        <p>Prix : <span class='price'>" . $price  . "</span> €</p>
                    </div>
                </div>";
        }
    }

    public function selectsaleAction()
    {
        $property = new Property();
        $result['result'] = $property->selectPropertyInner('image', 'property.id = image.id_property', 'image.isTop = 1 and property.typeproperty = "sale"');

        foreach ($result['result'] as $key => $value) {
            echo "<div class='col-12 col-sm-10 col-md-8 col-lg-4 text-center announcecat position-relative'>";
            extract($value);
            echo "<img src='" . BASE_IMG . $path . "' class='w-100 img-fluid imgcategory' alt=''>
                    <div class='txtdescannounce position-absolute mx-auto d-flex align-items-center'>
                        <p class='mx-auto p-3 descannounce'>" . $description .
                "<a href='" .  BASE_ANNOUNCE . "/" . $id . "'>Plus d'infos</a>
                        </p>
                    </div>

                    <div class='px-2 text-left txtsub'>
                        <p class='mt-2'>" .  $title . "</p>
                        <p>Référence : <span>" . $reference  . "</span></p>
                        <p>Prix : <span class='price'>" . $price  . "</span> €</p>
                    </div>
                </div>";
        }
    }

    public function selectallpropertyAction()
    {
        $property = new Property();
        $result['result'] = $property->selectPropertyInner('image', 'property.id = image.id_property', 'image.isTop = 1');

        foreach ($result['result'] as $key => $value) {
            echo "<div class='col-12 col-sm-10 col-md-8 col-lg-4 text-center announcecat position-relative'>";
            extract($value);
            echo "<img src='" . BASE_IMG . $path . "' class='w-100 img-fluid imgcategory' alt=''>
                    <div class='txtdescannounce position-absolute mx-auto d-flex align-items-center'>
                        <p class='mx-auto p-3 descannounce'>" . $description .
                "<a href='" .  BASE_ANNOUNCE . "/" . $id . "'>Plus d'infos</a>
                        </p>
                    </div>

                    <div class='px-2 text-left txtsub'>
                        <p class='mt-2'>" .  $title . "</p>
                        <p>Référence : <span>" . $reference  . "</span></p>
                        <p>Prix : <span class='price'>" . $price  . "</span> €</p>
                    </div>
                </div>";
        }
    }

    public function selectapartmentAction()
    {
        $property = new Property();
        $result['result'] = $property->selectPropertyInner('image', 'property.id = image.id_property', 'image.isTop = 1 and property.id_cat = "2"');

        foreach ($result['result'] as $key => $value) {
            echo "<div class='col-12 col-sm-10 col-md-8 col-lg-4 text-center announcecat position-relative'>";
            extract($value);
            echo "<img src='" . BASE_IMG . $path . "' class='w-100 img-fluid imgcategory' alt=''>
                    <div class='txtdescannounce position-absolute mx-auto d-flex align-items-center'>
                        <p class='mx-auto p-3 descannounce'>" . $description .
                "<a href='" .  BASE_ANNOUNCE . "/" . $id . "'>Plus d'infos</a>
                        </p>
                    </div>

                    <div class='px-2 text-left txtsub'>
                        <p class='mt-2'>" .  $title . "</p>
                        <p>Référence : <span>" . $reference  . "</span></p>
                        <p>Prix : <span class='price'>" . $price  . "</span> €</p>
                    </div>
                </div>";
        }
    }

    public function selecthouseAction()
    {
        $property = new Property();
        $result['result'] = $property->selectPropertyInner('image', 'property.id = image.id_property', 'image.isTop = 1 and property.id_cat = "1"');

        foreach ($result['result'] as $key => $value) {
            echo "<div class='col-12 col-sm-10 col-md-8 col-lg-4 text-center announcecat position-relative'>";
            extract($value);
            echo "<img src='" . BASE_IMG . $path . "' class='w-100 img-fluid imgcategory' alt=''>
                    <div class='txtdescannounce position-absolute mx-auto d-flex align-items-center'>
                        <p class='mx-auto p-3 descannounce'>" . $description .
                "<a href='" .  BASE_ANNOUNCE . "/" . $id . "'>Plus d'infos</a>
                        </p>
                    </div>

                    <div class='px-2 text-left txtsub'>
                        <p class='mt-2'>" .  $title . "</p>
                        <p>Référence : <span>" . $reference  . "</span></p>
                        <p>Prix : <span class='price'>" . $price  . "</span> €</p>
                    </div>
                </div>";
        }
    }

    public function selectgarageAction()
    {
        $property = new Property();
        $result['result'] = $property->selectPropertyInner('image', 'property.id = image.id_property', 'image.isTop = 1 and property.id_cat = "3"');

        foreach ($result['result'] as $key => $value) {
            echo "<div class='col-12 col-sm-10 col-md-8 col-lg-4 text-center announcecat position-relative'>";
            extract($value);
            echo "<img src='" . BASE_IMG . $path . "' class='w-100 img-fluid imgcategory' alt=''>
                    <div class='txtdescannounce position-absolute mx-auto d-flex align-items-center'>
                        <p class='mx-auto p-3 descannounce'>" . $description .
                "<a href='" .  BASE_ANNOUNCE . "/" . $id . "'>Plus d'infos</a>
                        </p>
                    </div>

                    <div class='px-2 text-left txtsub'>
                        <p class='mt-2'>" .  $title . "</p>
                        <p>Référence : <span>" . $reference  . "</span></p>
                        <p>Prix : <span class='price'>" . $price  . "</span> €</p>
                    </div>
                </div>";
        }
    }

    public function mentionAction()
    {
        $this->render('index/mention');
    }
}
