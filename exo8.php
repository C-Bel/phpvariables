<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>créer 3 variables.Dans la première mettre le résultat de l'opération 3+4, dans la deuxieme mettre le resultat de l'operation 5*20, dans les toisieme mettre le resultat de l'operation 45/5, afficher le contenu des variables.</title>
  </head>
  <body>
    <p>
      <?php
      $chiffre1 = 3;
      $chiffre2 = 4;
      $opération = $chiffre1 + $chiffre2;
      echo $opération;
      echo "<br>";

      $la = 5;
      $lo = 20;
      $lalo = $la * $lo;
      echo $lalo;
      echo "<br>";

      $ra = 45;
      $ro = 5;
      $raro = $ra / $ro;
      echo $raro;


       ?>
    </p>
  </body>
</html>
