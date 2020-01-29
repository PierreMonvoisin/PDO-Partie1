<?php
require_once 'connection.php';
$database = connectionToDatabase();
$query = 'SELECT `lastName`,`firstName` FROM `clients`';
$userListQuery = $database->query($query);
$userList = $userListQuery->fetchAll(PDO::FETCH_ASSOC);
foreach ($userList as $client){ ?>
  <p>Client : <?= $client['firstName']. ' ' .$client['lastName']; ?></p>
<?php } ?>
