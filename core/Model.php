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

  function select()
  {
    $dbh = self::getDb();
    $result = $dbh->select($this->_table)->getResult();
    return $result;
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
    return $this->_table = $_table;
  }
}
