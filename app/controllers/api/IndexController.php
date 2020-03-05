<?php

namespace App\Controllers\Api;


use App\Controllers\Api\AppController;
use App\Models\Property;
use App\Models\Address;
use App\Models\Image;

class IndexController extends AppController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function propertiesAction()
    {
        if ($_SERVER['PHP_AUTH_USER'] == "user" && $_SERVER['PHP_AUTH_PW'] == "password") {
            if ($_SERVER['REQUEST_METHOD'] === 'GET') {
                http_response_code(200);
                header('Content-Type: application/json');
                $topproperty = new Property();
                $data = $topproperty->selectAll();
                $content = json_encode($data, JSON_INVALID_UTF8_IGNORE);
                echo $content;
            } elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
                echo 'en cours ...';

                if (isset($_POST) && isset($_POST['city'])) {
                    $address = new Address();
                    $address->setCity(htmlspecialchars($_POST['city']));
                    $address->setStreet(htmlspecialchars($_POST['address']));
                    $address->setCountry(htmlspecialchars($_POST['country']));
                    $address->setZipcode(htmlspecialchars($_POST['zipcode']));
                    $address->setNumber(htmlspecialchars($_POST['num']));
                    $idaddress = $address->insert();

                    echo "Adresse ajoutée avec succés !";

                    // $isTop = isset($_POST['isTop']) && $_POST['isTop'] == "on" ? 1 : 0;
                    // $isActive = isset($_POST['isActive']) && $_POST['isActive'] == "on" ? 1 : 0;
                    // $isVisible = isset($_POST['isVisible']) && $_POST['isVisible'] == "on" ? 1 : 0;
                    // $typeproperty = (isset($_POST['typeproperty']) && $_POST['typeproperty'] == 1) ? 'sale' : 'rental';
                    // $heating = !isset($_POST['heating']) ? 0 : $_POST['heating'];
                    // $garage = isset($_POST['garage']) ? $_POST['garage'] : 0;

                    // $property->setId_User(1);
                    // $property->setTitle(htmlspecialchars($_POST['title']));
                    // $property->setPrice(htmlspecialchars($_POST['price']));
                    // $property->setSurface(htmlspecialchars($_POST['surface']));
                    // $property->setReference(htmlspecialchars($_POST['ref']));
                    // $property->setDescription(htmlspecialchars($_POST['desc']));
                    // $property->setNb_room(htmlspecialchars($_POST['room']));
                    // $property->setNb_bedroom(htmlspecialchars($_POST['bedroom']));
                    // $property->setNb_bathroom(htmlspecialchars($_POST['nb_bathroom']));
                    // $property->setGarden(htmlspecialchars($_POST['garden']));
                    // $property->setEnergy_class(htmlspecialchars($_POST['energy']));
                    // $property->setType_heating(htmlspecialchars($heating));
                    // $property->setGarage(htmlspecialchars($garage));
                    // $property->setIsActive($isActive);
                    // $property->setIsTop($isTop);
                    // $property->setId_address($idaddress);
                    // $property->setIsVisible($isVisible);
                    // $property->setId_cat(htmlspecialchars($_POST['type']));
                    // $property->setTypeproperty($typeproperty);

                    // $idproperty = $property->insert();
                    // $init = 0;
                    // foreach ($_FILES as $key) {
                    //     $target_file = BASE_UPIMG . basename($key["name"]);
                    //     $keyarr = array_keys($_FILES);
                    //     if (move_uploaded_file($key['tmp_name'], $target_file)) {
                    //         $image = new Image();
                    //         $name = explode(".", $key["name"]);
                    //         $image->setName($name[0]);
                    //         $image->setPath($key['name']);
                    //         if ($keyarr[$init] == $_POST['phototop']) {
                    //             echo $_POST['phototop'] . $keyarr[$init];
                    //             $image->setIsTop(1);
                    //         } else {
                    //             $image->setIsTop(0);
                    //         };
                    //         $image->setId_Property($idproperty);
                    //         $image->insert();
                    //     }
                    //     $init++;
                }
            } elseif ($_SERVER['REQUEST_METHOD'] === 'PUT') {
                
                parse_str(file_get_contents("php://input"), $res);
                var_dump(json_encode($res));
                $address = new Address();
                $address->setCity(htmlspecialchars($res['city']));
                $address->setStreet(htmlspecialchars($res['address']));
                $address->setCountry(htmlspecialchars($res['country']));
                $address->setZipcode(htmlspecialchars($res['zipcode']));
                $address->setNumber(htmlspecialchars($res['num']));
                $address->setId(htmlspecialchars($res['id']));
                $address->update();
            }
        } else {
            echo "Connexion échouée";
        }
    }

    public function propertyAction($id)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            http_response_code(200);
            header('Content-Type: application/json');
            $topproperty = new Property();
            $topproperty->setId($id);
            $data = $topproperty->select();
            $content = json_encode($data, JSON_INVALID_UTF8_IGNORE);
            echo $content;
        } elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
        }
    }
}
