<?php
require_once 'connection.php';
$database = connectionToDatabase();
$query = 'SELECT `lastName`, `firstName`, `birthDate`, `card`, `cardNumber` FROM `clients` ORDER BY `lastname` ASC';
$clientListQuery = $database->query($query);
$clientList = $clientListQuery->fetchAll(PDO::FETCH_ASSOC);
$i = 0;
foreach ($clientList as $client){ ?>
  <ul style="float:left">
    <li style="color:red">Numéro client : <?= ++$i ?></li>
    <li>Nom du client : <?= $client['lastName'] ?></li>
    <li>Prénom du client : <?= $client['firstName'] ?></li>
    <li>Date de naissance : <?= $client['birthDate'] ?></li>
    <?php if ($client['card'] == 1){
      $client['card'] = 'Oui';
    } else {
      $client['card'] = 'Non';
    }?>
    <li>Carte de fidélité : <?= $client['card'] ?></li>
    <?php if ($client['card'] == 'Oui'){ ?>
      <li>Numéro de carte : <?= $client['cardNumber'] ?></li>
  <?php  } ?>
  </ul>
<?php } ?>
