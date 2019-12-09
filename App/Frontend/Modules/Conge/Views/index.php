<?php
foreach ($listeConge as $conge)
{
?>
  <h2><a href="conge-<?= $conge['idcon'] ?>.html"><?= $conge['type'] ?></a></h2>
  <p><?= nl2br($conge['cause']) ?></p>
<?php
}