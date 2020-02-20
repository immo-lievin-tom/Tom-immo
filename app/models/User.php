<?php 

namespace App\Models;

use Core\Model;

class User extends Model
{
     

    protected $firstname;

    protected $lastname;

    public function __construct()
    {
        $this->table = 'users';
    }

    public function getFistname()
    {
        return $this->firstname;
    }
    
    public function getLastname()
    {
        return $this->lastname;
    }
}