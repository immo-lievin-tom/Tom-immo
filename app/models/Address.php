<?php 

namespace App\Models;

use Core\Model;

class Address extends Model
{
    public function __construct()
    {
        $this->set_table('address');
    }

    public function getTable()
    {
        return $this->get_table();
    }
    
    function selectAddress(){
        return $this->selectAll();
    }
}