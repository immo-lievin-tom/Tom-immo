<?php 

namespace App\Models;

use Core\Model;

class User extends Model
{
    public function __construct()
    {
        $this->set_table('user');
    }
    
    public function selectUser()
    {
        return $this->selectAll();
    }
}