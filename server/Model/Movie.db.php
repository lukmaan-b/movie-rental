<?php
require_once('./Database/Database.php');

class Movie
{
  private $conn;
  private $name;
  private $columns;
  private $results;

  function __construct()
  {
    $this->conn = new Database();
    $this->name = "movies";
    $this->columns = array("id", "title", "overview", "poster_path", "release_date", "vote_average");
  }

  public function select_amount($num)
  {
    $sql = "SELECT * FROM {$this->name} LIMIT {$num}";
    $stmt = $this->conn->prepare($sql);
    if (!$stmt->execute()) {
      die("Query Failed");
    }
    $result = $stmt->get_result();
    $this->results = $result->fetch_all(MYSQLI_ASSOC);
  }

  public function get_results()
  {
    return $this->results;
  }
}
