<?php 

namespace App\Models;

use Core\Model;

class Property extends Model
{
    public function __construct()
    {
        $this->set_table('property');
    }

    public function getTable()
    {
        return $this->get_table();
    }
    
    function selectProperty(){
        return $this->selectAll();
    }
}