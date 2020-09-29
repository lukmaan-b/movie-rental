<?php

class Database extends mysqli
{

  function __construct()
  {
    try {
      $config = parse_ini_file('config.ini');
      parent::__construct($config['host'], $config['username'], $config['password'], $config['database']);
    } catch (PDOException $e) {
      die("Error: " . $e->message);
    }
  }
}
