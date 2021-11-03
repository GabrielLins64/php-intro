<?php

namespace App\Model;

class Conexao
{
  // This class is a singleton.
  // In software engineering, the singleton pattern is a software
  // design pattern that restricts the instantiation of a class to
  // one "single" instance. This is useful when exactly one object
  // is needed to coordinate actions across the system.
  private static $instance;

  public static function getConn()
  {
    if (!isset(self::$instance)):
      self::$instance = new \PDO('pgsql:dbname=pdocrud;host=localhost;', "postgres", "postgres");
    endif;

    return self::$instance;
  }
}

?>