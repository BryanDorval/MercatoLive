<?php
  include('connection.php');

  $query = "SELECT
  FROM
  INNER JOIN ON  = 
  INNER JOIN ON  = ";
  $statement = $conn->query($query);

  $results = $statement->fetchAll();
?>