<?php

namespace App\Models;

use Core\Model;

class Favorite extends Model {
    
    private $id_property;
    private $id_user;


    public function __construct()
    {
        $this->set_table('favorite');
    }

    public function getFieldArray()
    {
        return ['id_user' =>  $this->getId_user(), 'id_property' => $this->getId_property()];
    }

    /**
     * Get the value of id_property
     */ 
    public function getId_property()
    {
        return $this->id_property;
    }

    /**
     * Set the value of id_property
     *
     * @return  self
     */ 
    public function setId_property($id_property)
    {
        $this->id_property = $id_property;

        return $this;
    }

    /**
     * Get the value of id_user
     */ 
    public function getId_user()
    {
        return $this->id_user;
    }

    /**
     * Set the value of id_user
     *
     * @return  self
     */ 
    public function setId_user($id_user)
    {
        $this->id_user = $id_user;

        return $this;
    }
}