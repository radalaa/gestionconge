<?php
foreach ($listePersonnel as $personnel)
{
?>
  <h2><a href="personnel-<?= $personnel['nom'] ?>.html"><?= $personnel['prenom'] ?></a></h2>
  <p><?= nl2br($personnel['adresse']) ?></p>
<?php
}
