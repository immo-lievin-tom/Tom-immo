<?php 

namespace App\Models;

use Core\Model;

class Category extends Model
{
    private $name;
    
    public function __construct()
    {
        $this->set_table('category');
    }

    public function getFieldArray()
    {
        return ['name' => $this->getName()];
    }
    
    public function selectUser()
    {
        return $this->selectAll();
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
}