<?php
$bdd = "mysql:host=localhost;dbname=mercato";
$user = "root";
$mdp = "";

try {
$conn = new PDO($bdd, $user, $mdp);

echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>