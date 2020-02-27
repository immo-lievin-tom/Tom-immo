<?php 

namespace App\Models;

use Core\Model;

class Image extends Model
{


    public function __construct()
    {
        $this->set_table('image');
    }

    public function getFieldArray(){
        return [];
    }

    public function getTable()
    {
        return $this->get_table();
    }
    
    function selectImage(){
        return $this->selectAll();
    }

    function insertImage($data)
    {
      $dbh = self::getDb();
      return $dbh->insert($this->_table, $data);
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