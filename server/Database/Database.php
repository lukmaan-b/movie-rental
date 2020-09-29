<?php

class Database
{
  function __construct()
  {
    try {
      $config = parse_ini_file('config.ini');
      var_dump($config);
    } catch (PDOException $e) {
      die("Error: " . $e->message);
    }
  }
}
