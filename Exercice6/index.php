<?php
require_once 'connection.php';
$database = connectionToDatabase();
$query = 'SELECT `title`, `performer`, DATE_FORMAT(`date`,\'%d-%m-%Y\') `date`, `startTime` FROM `shows` ORDER BY `title` ASC';
$showListQuery = $database->query($query);
$showList = $showListQuery->fetchAll(PDO::FETCH_ASSOC);
foreach ($showList as $show){ ?>
  <p>Le spectacle "<?= $show['title'] ?>" par "<?= $show['performer'] ?>" se déroulera le <?= $show['date'] ?> à <?= $show['startTime'] ?>.</p>
<?php } ?>
