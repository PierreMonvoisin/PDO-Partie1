<?php
require_once 'connection.php';
$database = connectionToDatabase();
$query = 'SELECT `type` FROM `showTypes`';
$showListQuery = $database->query($query);
$showList = $showListQuery->fetchAll(PDO::FETCH_ASSOC);
foreach ($showList as $show){ ?>
  <p>Type de show : <?= $show['type'] ?></p>
<?php } ?>
