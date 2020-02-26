<?php 

namespace App\Models;

use Core\Model;

class Image extends Model
{
    public function __construct()
    {
        $this->set_table('image');
    }

    public function getTable()
    {
        return $this->get_table();
    }
    
    function selectImage(){
        return $this->selectAll();
    }
}