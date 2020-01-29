<?php
require_once 'connection.php';
$database = connectionToDatabase();
$query = 'SELECT `lastName`, `firstName` FROM `clients` WHERE `lastName` LIKE \'M%\' ORDER BY `lastName` ASC';
$clientListQuery = $database->query($query);
$clientList = $clientListQuery->fetchAll(PDO::FETCH_ASSOC);
foreach ($clientList as $client){ ?>
  <p>Client au nom de famille commencant par M : Nom de famille - "<?= $client['lastName']. '", Prénom - "' .$client['firstName'] ?>"</p>
<?php } ?>
