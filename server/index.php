<?php
require_once('./Model/Movie.db.php');

$movie = new Movie;

$movie->select_amount(3);
var_dump($movie->get_results());
