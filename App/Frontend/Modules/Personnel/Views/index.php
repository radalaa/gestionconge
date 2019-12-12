<?php
foreach ($listePersonnel as $personnel)
{
?>
  <h2><a href="personnel-<?= $personnel['idcon'] ?>.html"><?= $personnel['nom'] ?></a></h2>
  <p><?= nl2br($personnel['adresse']) ?></p>
<?php
}