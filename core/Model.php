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

  function select($where = [])
  {
    if (count($where) == 0) {
      $where = ['id' => $this->id];
    }
    $dbh = self::getDb();
    $result = $dbh->select($this->_table, $where)->getResult();
    return $result;
  }

  function selectInner($table2, $on, array $where = [])
  {
    $wherereq = "";
    $where2 = [];
    if (count($where) == 0) {
      $insert = "SELECT * FROM " . $this->_table;
    } else {
      foreach ($where as $key => $value) {
        $wherereq .= $key . "= :" .  str_replace('.', '', $key);
        $where2[":" .  str_replace('.', '', $key)] = $value;
      }
      $insert = "SELECT * FROM " . $this->_table . " inner join " . $table2 . " on " . $on . " where " . $wherereq;
    }
    $dbh = self::getDb();
    $dbh->query($insert, $where2);
    return $dbh->getResult();
  }

  function selectChoiceInner(array $choice, $table2, $on, array $where = [])
  {
    $wherereq = "";
    $condition = implode(" , ", $choice);
    $where2 = [];
    if (count($where) == 0) {
      $insert = "SELECT * FROM " . $this->_table;
    } else {
      foreach ($where as $key => $value) {
        $wherereq .= $key . "= :" .  str_replace('.', '', $key);
        $where2[":" .  str_replace('.', '', $key)] = $value;
      }
      $insert = "SELECT " . $condition . " FROM " . $this->_table . " inner join " . $table2 . " on " . $on . " where " . $wherereq;
    }
    $dbh = self::getDb();
    $dbh->query($insert, $where2);
    return $dbh->getResult();
  }

  function selectPersoCondition($choice, array $where = [])
  {
    $wherereq = "";
    $condition = implode(" , ", $choice);
    $where2 = [];
    if (count($where) == 0) {
      $insert = "SELECT * FROM " . $this->_table;
    } else {
      foreach ($where as $key => $value) {
        $wherereq .= $key . "= :" .  str_replace('.', '', $key);
        $where2[":" .  str_replace('.', '', $key)] = $value;
      }
      $insert = "SELECT " . $condition . " FROM " . $this->_table . " where " . $wherereq;
      // echo $insert;
    }
    $dbh = self::getDb();
    $dbh->query($insert, $where2);
    return $dbh->getResult();
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

  function update($where = [])
  {
    $dbh = self::getDb();
    if (count($where) == 0) {
      $where = ['id' => $this->id];
    }
    $dbh->update($this->_table, $this->getFieldArray(), $where);
    return $dbh->getResult();
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
