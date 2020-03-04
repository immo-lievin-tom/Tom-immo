<?php

namespace Core;

use Core\Db;

class Model
{
  protected static $_db;
  protected $id;
  protected $_table;

  protected function __construct()
  {
  }

  public static function getDb()
  {
    if (!self::$_db) {
      self::$_db = Db::getInstance();
    }
    return self::$_db;
  }

  /**
   * Get the value of id
   */
  public function getId()
  {
    return $this->id;
  }

  /**
   * Set the value of id
   *
   * @return  self
   */
  public function setId($id)
  {
    $this->id = $id;

    return $this;
  }

  function selectPerso(array $table)
  {
    $condition = implode(" , ", $table);


    $insert = "SELECT " . $condition . " FROM " . $this->_table;
    $dbh = self::getDb();
    $dbh->query($insert);
    return $dbh->getResult();
  }


  protected function freeSelect($sql, $tab)
  {
    $dbh = self::getDb();
    $dbh->query($sql, $tab);
    return $dbh->getResult();
  }



  function select($where = [])
  {
    if (count($where) == 0) {
      $where = ['id' => $this->id];
    }
    $dbh = self::getDb();
    $result = $dbh->select($this->_table, $where)->getResult();
    return $result;
  }

  function selectAll()
  {
    $dbh = self::getDb();
    $result = $dbh->select($this->_table)->getResult();
    return $result;
  }

  /**
   * Get the value of _table
   */
  public function get_table()
  {
    return $this->_table;
  }

  /**
   * Set the value of _table
   *
   * @return  self
   */
  public function set_table($_table)
  {
    $this->_table = $_table;

    return $this;
  }

  function updateIs($condition, $where = [])
  {
    $dbh = self::getDb();
    if (count($where) == 0) {
      $where = ['id' => $this->id];
    }
    $dbh->update($this->_table, $condition, $where);
    return $dbh->getResult();
  }
}
