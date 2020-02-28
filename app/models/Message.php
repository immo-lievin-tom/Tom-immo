<?php 

namespace App\Models;

use Core\Model;

class Message extends Model
{
    public function __construct()
    {
        $this->set_table('message');
    }
}