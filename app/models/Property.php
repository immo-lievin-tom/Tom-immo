<?php

namespace App\Models;

use Core\Model;

class Property extends Model
{
    private $title;
    private $price;
    private $surface;
    private $reference;
    private $description;
    private $nb_room;
    private $nb_bedroom;
    private $nb_bathroom;
    private $garden;
    private $energy_class;
    private $type_heating;
    private $garage;
    private $isActive;
    private $isTop;
    private $isVisible;
    private $id_address;
    private $id_cat;
    private $typeproperty;
    private $Id_User;
    private $isSale;
    private $isRental;

    public function __construct()
    {
        $this->set_table('property');
    }

    public function getFieldArray()
    {
        return ['name' => $this->getTitle(), 'typeproperty' => $this->getTypeproperty(), 'price' =>  $this->getPrice(), 'surface' =>  $this->getSurface(), 'reference' =>  $this->getReference(), 'description' =>  $this->getDescription(), 'nb_room' => $this->getNb_room(), 'nb_bedroom' =>  $this->getNb_bedroom(), 'nb_bathroom' =>  $this->getNb_bathroom(), 'garden' =>  $this->getGarden(), 'energy_class' => $this->getEnergy_class(), 'type_heating' =>  $this->getType_heating(), 'garage' =>  $this->getGarage(), 'isActive' =>  $this->getIsActive(), 'isTop' =>  $this->getIsTop(), 'isVisible' =>  $this->getIsVisible(), 'id_address' =>  $this->getId_address(), 'id_user' => $this->getId_User(), 'id_cat' => $this->getId_cat()];
    }

    public function getTable()
    {
        return $this->get_table();
    }

    function selectProperty()
    {
        return $this->selectAll();
    }

    function selectPropertyInner($table, $on, $cond)
    {

        $insert = "SELECT *, property.id as id, property.name as title FROM " . $this->_table . " inner join " . $table . " on " . $on . " where " . $cond;

        $dbh = self::getDb();
        $dbh->query($insert);
        return $dbh->getResult();
    }

    /**
     * Get the value of title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @return  self
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of price
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of price
     *
     * @return  self
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get the value of surface
     */
    public function getSurface()
    {
        return $this->surface;
    }

    /**
     * Set the value of surface
     *
     * @return  self
     */
    public function setSurface($surface)
    {
        $this->surface = $surface;

        return $this;
    }

    /**
     * Get the value of reference
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Set the value of reference
     *
     * @return  self
     */
    public function setReference($reference)
    {
        $this->reference = $reference;

        return $this;
    }

    /**
     * Get the value of description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of nb_room
     */
    public function getNb_room()
    {
        return $this->nb_room;
    }

    /**
     * Set the value of nb_room
     *
     * @return  self
     */
    public function setNb_room($nb_room)
    {
        $this->nb_room = $nb_room;

        return $this;
    }

    /**
     * Get the value of nb_bedroom
     */
    public function getNb_bedroom()
    {
        return $this->nb_bedroom;
    }

    /**
     * Set the value of nb_bedroom
     *
     * @return  self
     */
    public function setNb_bedroom($nb_bedroom)
    {
        $this->nb_bedroom = $nb_bedroom;

        return $this;
    }

    /**
     * Get the value of nb_bathroom
     */
    public function getNb_bathroom()
    {
        return $this->nb_bathroom;
    }

    /**
     * Set the value of nb_bathroom
     *
     * @return  self
     */
    public function setNb_bathroom($nb_bathroom)
    {
        $this->nb_bathroom = $nb_bathroom;

        return $this;
    }

    /**
     * Get the value of garden
     */
    public function getGarden()
    {
        return $this->garden;
    }

    /**
     * Set the value of garden
     *
     * @return  self
     */
    public function setGarden($garden)
    {
        $this->garden = $garden;

        return $this;
    }

    /**
     * Get the value of id_user
     */
    public function getId_User()
    {
        return $this->Id_User;
    }

    /**
     * Set the value of id_user
     *
     * @return  self
     */
    public function setId_User($Id_User)
    {
        $this->Id_User = $Id_User;

        return $this;
    }

    /**
     * Get the value of energy_class
     */
    public function getEnergy_class()
    {
        return $this->energy_class;
    }

    /**
     * Set the value of energy_class
     *
     * @return  self
     */
    public function setEnergy_class($energy_class)
    {
        $this->energy_class = $energy_class;

        return $this;
    }

    /**
     * Get the value of type_heating
     */
    public function getType_heating()
    {
        return $this->type_heating;
    }

    /**
     * Set the value of type_heating
     *
     * @return  self
     */
    public function setType_heating($type_heating)
    {
        $this->type_heating = $type_heating;

        return $this;
    }

    /**
     * Get the value of garage
     */
    public function getGarage()
    {
        return $this->garage;
    }

    /**
     * Set the value of garage
     *
     * @return  self
     */
    public function setGarage($garage)
    {
        $this->garage = $garage;

        return $this;
    }

    /**
     * Get the value of isActive
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * Set the value of isActive
     *
     * @return  self
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * Get the value of isVisible
     */
    public function getIsVisible()
    {
        return $this->isVisible;
    }

    /**
     * Set the value of isVisible
     *
     * @return  self
     */
    public function setIsVisible($isVisible)
    {
        $this->isVisible = $isVisible;

        return $this;
    }

    /**
     * Get the value of id_address
     */
    public function getId_address()
    {
        return $this->id_address;
    }

    /**
     * Set the value of id_address
     *
     * @return  self
     */
    public function setId_address($id_address)
    {
        $this->id_address = $id_address;

        return $this;
    }

    /**
     * Get the value of isTop
     */
    public function getIsTop()
    {
        return $this->isTop;
    }

    /**
     * Set the value of isTop
     *
     * @return  self
     */
    public function setIsTop($isTop)
    {
        $this->isTop = $isTop;

        return $this;
    }

    /**
     * Get the value of id_cat
     */
    public function getId_cat()
    {
        return $this->id_cat;
    }

    /**
     * Set the value of id_cat
     *
     * @return  self
     */
    public function setId_cat($id_cat)
    {
        $this->id_cat = $id_cat;

        return $this;
    }

    /**
     * Get the value of typeproperty
     */
    public function getTypeproperty()
    {
        return $this->typeproperty;
    }

    /**
     * Set the value of typeproperty
     *
     * @return  self
     */
    public function setTypeproperty($typeproperty)
    {
        $this->typeproperty = $typeproperty;

        return $this;
    }

    /**
     * Get the value of isSale
     */
    public function getIsSale()
    {
        return $this->isSale;
    }

    /**
     * Set the value of isSale
     *
     * @return  self
     */
    public function setIsSale($isSale)
    {
        $this->isSale = $isSale;

        return $this;
    }

    /**
     * Get the value of isRental
     */
    public function getIsRental()
    {
        return $this->isRental;
    }

    /**
     * Set the value of isRental
     *
     * @return  self
     */
    public function setIsRental($isRental)
    {
        $this->isRental = $isRental;

        return $this;
    }
}
