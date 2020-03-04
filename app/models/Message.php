<?php 

namespace App\Models;

use Core\Model;

class Message extends Model
{
    public function __construct()
    {
        $this->set_table('message');
    }
  

    public function selectPerso(array $table)
    {
      $condition = implode( " , ", $table );
      $where = ['isActive' => 1 ];
      $insert = "SELECT ". $condition . " FROM " . $this->_table;   

      $dbh = self::getDb();
 
      $dbh->query($insert, $where);
      var_dump($dbh->getResult());
      return $dbh->getResult();
    }

      public function getMessagesNonLus()
      {
        $sql = "select count(*) as Nb from message where isRead = 0";
        $tab = [];
        return $this->freeSelect($sql, $tab);
      }


  
    function selectBy($where = [])
    {
      if (count($where) == 0) {
        $where = ['id' => $this->id];
      }
      $dbh = self::getDb();
      $result = $dbh->select($this->_table, $where)->getResult();
      return $result;
    }

}