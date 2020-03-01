<?php 

namespace App\Models;

use Core\Model;

class Image extends Model
{

    private $name;
    private $path;
    private $isTop;
    private $id_Property;

    public function __construct()
    {
        $this->set_table('image');
    }

    public function getFieldArray(){
        return ['name' => $this->getName(), 'path' => $this->getPath(), 'isTop' => $this->getIsTop(), 'id_property' => $this->getId_Property()];
    }

    public function getTable()
    {
        return $this->get_table();
    }
    
    function selectImage(){
        return $this->selectAll();
    }

    /**
     * Get the value of path
     */ 
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }
    /**
     * Get the value of IsTop
     */ 
    public function getIsTop()
    {
        return $this->isTop;
    }

    /**
     * Set the value of IsTop
     *
     * @return  self
     */ 
    public function setIsTop($IsTop)
    {
        $this->isTop = $IsTop;

        return $this;
    }
    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }
    /**
     * Get the value of name
     */ 
    public function getId_Property()
    {
        return $this->id_Property;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setId_Property($Id_Property)
    {
        $this->id_Property = $Id_Property;

        return $this;
    }

    /**
     * Get the value of key
     */ 
    public function getKey()
    {
        return $this->key;
    }

    /**
     * Set the value of key
     *
     * @return  self
     */ 
    public function setKey($key)
    {
        $this->key = $key;

        return $this;
    }
}