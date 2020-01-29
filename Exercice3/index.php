<?php
require_once 'connection.php';
$database = connectionToDatabase();
$query = 'SELECT `lastName`, `firstName` FROM `clients` LIMIT 20';
$clientListQuery = $database->query($query);
$clientList = $clientListQuery->fetchAll(PDO::FETCH_ASSOC);
$i = 0;
foreach ($clientList as $client){ ?>
  <p>Client <?= ++$i ?> : <?= $client['lastName']. ' ' .$client['firstName'] ?></p>
<?php } ?>
