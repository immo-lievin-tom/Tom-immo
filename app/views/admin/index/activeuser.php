<?php
echo '<h1>L\'utilisateur a bien été supprimé</h1>';
var_dump($_GET['id']);

use Core\Model;
use App\Models\User;
use App\Models\Address;


$user = new User();
$user->setId($_GET['id']);
$adress = new Address();
$address['coor'] = $user->selectInner('address', 'user.id_address = address.id', ['user.id' => $user->getId()]);
var_dump($address);