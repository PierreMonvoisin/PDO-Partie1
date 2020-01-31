<?php
require_once 'connection.php';
$database = connectionToDatabase();
$query = 'SELECT `lastName`, `firstName` FROM `clients` WHERE `card` = 1';
$clientListQuery = $database->query($query);
$clientList = $clientListQuery->fetchAll(PDO::FETCH_ASSOC);
foreach ($clientList as $client){ ?>
  <p>Client avec carte de fidelité : <?= $client['lastName']. ' ' .$client['firstName'] ?></p>
<?php } ?>
