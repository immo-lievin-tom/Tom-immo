<?php 

namespace Core;

class Db
{
    private function __construct() {
        try {
          $this->_pdo = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASSWORD);
          $this->_pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
          die($e->getMessage());
        }
      }
    
      public static function getInstance() {
        if(!isset(self::$_instance)) {
          self::$_instance = new self();
        }
        return self::$_instance;
      }
      




}