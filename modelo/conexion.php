<?php
include_once('dataBase.php');

// Define configuration
define("DB_HOST", "ec2-54-204-6-113.compute-1.amazonaws.com");
define("DB_USER", "jicnmumknlmuyd");
define("DB_PASS", "JTKvA5jBPjC_JDUHF9fdHDZkWG");
define("DB_NAME", "do2qi8u7spl7o");


class conexion extends dataBase
{
  public static $db;
  private $host      = DB_HOST;
  private $username  = DB_USER;
  private $password  = DB_PASS;
  private $dbname    = DB_NAME;
    
  public function __construct()
  {
    self::$db = new dataBase($this->username, $this->password, $this->host, $this->dbname);
  }

}

?>
