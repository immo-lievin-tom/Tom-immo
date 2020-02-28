<?php

namespace Core;

use Core\Db;

abstract class Model
{
  protected static $_db;
  protected $id;
  protected $_table;

  abstract public function getFieldArray();

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
    $where = ['id' => $this->id];
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

  function selectPerso(array $table)
  {
    $condition = implode(" , ", $table);
    $insert = "SELECT " . $condition . " FROM " . $this->_table;
    $dbh = self::getDb();
    $dbh->query($insert);
    return $dbh->getResult();
  }

  function insert()
  {
    $dbh = self::getDb();
    return $dbh->insert($this->_table, $this->getFieldArray());
  }

  function update($where)
  {
    $dbh = self::getDb();
    if (count($where) == 0) {
      $where = ['id' => $this->id];
    }
    $dbh->update($this->_table, $this->getFieldArray(), $where);
    return $dbh->getResult();
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
