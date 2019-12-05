<?php
$months = array('Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre');
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>PHP partie3 exo3</title>
</head>
<body>
  <?php foreach ($months as $element) { ?>
    <p><?php echo $element; ?></p>
  <?php }; ?>
</body>
</html>
