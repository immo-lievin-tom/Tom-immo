<?php


namespace App\Controllers\Admin;

use App\Controllers\Admin\AppController;
use App\Models\Address;
use App\Models\User;
use App\Models\Property;
use App\Models\Image;
use Core\Validator;

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
        // $address = new Address();
        // $allAddress = $address->selectAdress();
        // $users = new User();
        // $allUsers = $users->selectUser();
        // $images = new Image();
        // $allImages = $images->selectImage();
        $properties = new Property();
        $allProperties['all'] = $properties->selectPerso(['id', 'name', 'reference', 'price', 'isActive', 'isTop', 'isVisible']);
        $this->render('index/listproperty', $allProperties);
    }

    public function listuserAction()
    {

        $this->render('index/listuser');
    }

    public function listmessageAction()
    {
        $this->render('index/listmessage');
    }

    public function addpropertyAction()
    {
        if (isset($_POST) && isset($_POST['title'])) {
            $formvalidator = new Validator();

            $resultvalidator = $formvalidator->validTypeMime('photo1', ['image/jpg', 'image/jpeg', 'image/png'], "This MIME Content-type is not valid")->validTypeMime('photo2', ['image/jpg', 'image/jpeg', 'image/png'], "This MIME Content-type is not valid")->validTypeMime('photo3', ['image/jpg', 'image/jpeg', 'image/png'], "This MIME Content-type is not valid")->isValid();

            if ($resultvalidator) {
                $resultError['err'] = $resultvalidator;
                return $this->render('index/addproperty', $resultError);
            } else {
                $address = new Address();
                $property = new Property();

                $address->setCity(htmlspecialchars($_POST['city']));
                $address->setStreet(htmlspecialchars($_POST['address']));
                $address->setCountry(htmlspecialchars($_POST['country']));
                $address->setZipcode(htmlspecialchars($_POST['zipcode']));
                $address->setNumber(htmlspecialchars($_POST['num']));

                $idaddress = $address->insert();

                $isTop = isset($_POST['isTop']) && $_POST['isTop'] == "on" ? 1 : 0;
                $isActive = isset($_POST['isActive']) && $_POST['isActive'] == "on" ? 1 : 0;
                $isVisible = isset($_POST['isVisible']) && $_POST['isVisible'] == "on" ? 1 : 0;
                $typeproperty = (isset($_POST['typeproperty']) && $_POST['typeproperty'] == 1) ? 'sale' : 'rental';
                $heating = !isset($_POST['heating']) ? 0 : $_POST['heating'];
                $garage = isset($_POST['garage']) ? $_POST['garage'] : 0;

                $property->setId_User(1);
                $property->setTitle(htmlspecialchars($_POST['title']));
                $property->setPrice(htmlspecialchars($_POST['price']));
                $property->setSurface(htmlspecialchars($_POST['surface']));
                $property->setReference(htmlspecialchars($_POST['ref']));
                $property->setDescription(htmlspecialchars($_POST['desc']));
                $property->setNb_room(htmlspecialchars($_POST['room']));
                $property->setNb_bedroom(htmlspecialchars($_POST['bedroom']));
                $property->setNb_bathroom(htmlspecialchars($_POST['nb_bathroom']));
                $property->setGarden(htmlspecialchars($_POST['garden']));
                $property->setEnergy_class(htmlspecialchars($_POST['energy']));
                $property->setType_heating(htmlspecialchars($heating));
                $property->setGarage(htmlspecialchars($garage));
                $property->setIsActive($isActive);
                $property->setIsTop($isTop);
                $property->setId_address($idaddress);
                $property->setIsVisible($isVisible);
                $property->setId_cat(htmlspecialchars($_POST['type']));
                $property->setTypeproperty($typeproperty);

                $idproperty = $property->insert();
                $init = 0;
                foreach ($_FILES as $key) {
                    $target_file = BASE_UPIMG . basename($key["name"]);
                    $keyarr = array_keys($_FILES);
                    if (move_uploaded_file($key['tmp_name'], $target_file)) {
                        $image = new Image();
                        $name = explode(".", $key["name"]);
                        $image->setName($name[0]);
                        $image->setPath($key['name']);
                        if ($keyarr[$init] == $_POST['phototop']) {
                            echo $_POST['phototop'] . $keyarr[$init];
                            $image->setIsTop(1);
                        } else {
                            $image->setIsTop(0);
                        };
                        $image->setId_Property($idproperty);
                        $image->insert();
                    }
                    $init++;
                }
            }
        }
        $this->render('index/addproperty');
    }

    public function adduserAction()
    {
        $this->render('index/adduser');
    }

    public function modifypropertyAction($id)
    {
        $property = new Property();
        $address = new Address();
        $image = new Image();
        $property->setId($id);

        if (isset($_POST) && isset($_POST['title'])) {

            $isTop = isset($_POST['isTop']) && $_POST['isTop'] == "on" ? 1 : 0;
            $isActive = isset($_POST['isActive']) && $_POST['isActive'] == "on" ? 1 : 0;
            $isVisible = isset($_POST['isVisible']) && $_POST['isVisible'] == "on" ? 1 : 0;
            $typeproperty = (isset($_POST['typeproperty']) && $_POST['typeproperty'] == 1) ? 'sale' : 'rental';
            $heating = !isset($_POST['heating']) ? 0 : $_POST['heating'];
            $garage = isset($_POST['garage']) ? $_POST['garage'] : 0;

            $property->setTitle(htmlspecialchars($_POST['title']));
            $property->setPrice(htmlspecialchars($_POST['price']));
            $property->setSurface(htmlspecialchars($_POST['surface']));
            $property->setReference(htmlspecialchars($_POST['ref']));
            $property->setDescription(htmlspecialchars($_POST['desc']));
            $property->setNb_room(htmlspecialchars($_POST['room']));
            $property->setNb_bedroom(htmlspecialchars($_POST['bedroom']));
            $property->setNb_bathroom(htmlspecialchars($_POST['nb_bathroom']));
            $property->setGarden(htmlspecialchars($_POST['garden']));
            $property->setEnergy_class(htmlspecialchars($_POST['energy']));
            $property->setId_address($_POST['id_address']);
            $property->setType_heating(htmlspecialchars($heating));
            $property->setGarage(htmlspecialchars($garage));
            $property->setIsActive($isActive);
            $property->setIsTop($isTop);
            $property->setIsVisible($isVisible);
            $property->setId_cat(htmlspecialchars($_POST['type']));
            $property->setTypeproperty($typeproperty);
            $property->update();

            $address->setCity(htmlspecialchars($_POST['city']));
            $address->setStreet(htmlspecialchars($_POST['address']));
            $address->setCountry(htmlspecialchars($_POST['country']));
            $address->setZipcode(htmlspecialchars($_POST['zipcode']));
            $address->setNumber(htmlspecialchars($_POST['num']));
            $address->setId(htmlspecialchars($_POST['id_address']));
            $address->update();

            if (isset($_POST['phototop'])) {
                $imagetop = new Image();
                $imagetop->updatePerso(['isTop' => 0], ['image.id_property' => $id]);
                $imagetop->setId(htmlspecialchars($_POST['phototop']));
                $imagetop->setId_Property($id);
                $imagetop->setIsTop(1);
                $imagetop->updateIs(['isTop' => $imagetop->getIsTop()]);
            }

            if (isset($_FILES)) {
                $keyarr = array_keys($_FILES);
                $formvalidator = new Validator();
                $in = 0;
                $init = $keyarr[0];

                foreach ($_FILES as $key) {
                    $target_file = BASE_UPIMG . basename($key["name"]);
                    $resultvalidator = $formvalidator->validTypeMime($keyarr[$in], ['image/jpg', 'image/jpeg', 'image/png'], "The MIME Content-type of " . $key['name'] . " is not valid")->isValid();
                    if ($resultvalidator) {
                        $table['err'] = $resultvalidator;
                    } else {
                        if ($key['name'] !== '' && move_uploaded_file($key['tmp_name'], $target_file)) {
                            $image = new Image();
                            $name = explode(".", $key["name"]);
                            $image->setId($init);
                            $image->setName($name[0]);
                            $image->setPath($key['name']);
                            $image->setId_Property($id);
                            $image->update();
                        }
                    }
                    $init++;
                    $in++;
                }
            }
        }

        $table['property'] = $property->select();
        $table['address'] = $property->selectInner('address', 'property.id_address = address.id', ['property.id' => $id]);
        $table['image'] = $image->selectChoiceInner(['image.id', 'path', 'image.isTop'], 'property', 'property.id = image.id_property', ['property.id' => $id]);

        $this->render('index/modifyproperty', $table);
    }

    public function modifyuserAction()
    {
        $this->render('index/modifyuser');
    }

    public function exportAction()
    {
        $this->render('index/export');
    }

    public function isactiveAction()
    {
        $property = new Property();
        if (isset($_POST['val'])) {
            $property->setId($_POST['isact']);
            if ($_POST['val'] == 1) {
                $property->setIsActive(0);
            } else {
                $property->setIsActive(1);
            }
            $property->updateIs(['isActive' => $property->getIsActive()]);
        }
    }

    public function isvisibleAction()
    {
        $property = new Property();
        if (isset($_POST['val'])) {
            $property->setId($_POST['isvis']);
            if ($_POST['val'] == 1) {
                $property->setIsVisible(0);
            } else {
                $property->setIsVisible(1);
            }
            $property->updateIs(['isVisible' => $property->getIsVisible()]);
        }
    }

    public function istopAction()
    {
        $property = new Property();
        if (isset($_POST['val'])) {
            $property->setId($_POST['istop']);
            if ($_POST['val'] == 1) {
                $property->setIsTop(0);
            } else {
                $property->setIsTop(1);
            }
            $property->updateIs(['isTop' => $property->getIsTop()]);
        }
    }

    public function desactiveAction()
    {
        $property = new Property();
        if (isset($_POST['desactive'])) {
            $property->setId($_POST['desactive']);
            $property->updateIs(['isActive' => 0]);
        }
    }
}
