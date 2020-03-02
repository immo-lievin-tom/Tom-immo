<?php

namespace App\Models;
use Core\Model;

class User extends Model
{

    
    protected $id_address;
    protected $name;
    protected $firstname;
    protected $email;
    protected $date_birth;
    protected $password;
    protected $role;
    protected $phone_number;
    private $is_active;
    
    public function __construct()
    {
        $this->set_table('user');
    }

    public function getTable()
    {
        return $this->_table;
    }

    public function getFieldArray()
    {
        
        return ['name'=> $this->getName(), 'firstname' => $this->getFirstname(), 'email'=> $this->getEmail(),'date_birth'=>$this->getDate_birth(), 'password'=>$this->getPassword(),'role'=>$this->getRole(), 'phone_number'=>$this->getPhone_number(), 'id_address'=>$this->getId_address()];
    }

    
    /**
     * Get the value of firstname
     */ 
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set the value of firstname
     *
     * @return  self
     */ 
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

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
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of date_birth
     */ 
    public function getDate_birth()
    {
        return $this->date_birth;
    }

    /**
     * Set the value of date_birth
     *
     * @return  self
     */ 
    public function setDate_birth($date_birth)
    {
        $this->date_birth = $date_birth;

        return $this;
    }

    /**
     * Get the value of password
     */ 
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */ 
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get the value of role
     */ 
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set the value of role
     *
     * @return  self
     */ 
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get the value of phone_number
     */ 
    public function getPhone_number()
    {
        return $this->phone_number;
    }

    /**
     * Set the value of phone_number
     *
     * @return  self
     */ 
    public function setPhone_number($phone_number)
    {
        $this->phone_number = $phone_number;

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
     * Get the value of is_active
     */ 
    public function getIs_active()
    {
        return $this->is_active;
    }

    /**
     * Set the value of is_active
     *
     * @return  self
     */ 
    public function setIs_active($is_active)
    {
        $this->is_active = $is_active;

        return $this;
    }
}
