<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  </head>
  <body>
    <?php
      for ($iContX=0; $iContX < 10; $iContX++) {
        for ($iContY=0; $iContY < 4 ; $iContY++) {
          $aArray[$iContX][$iContY] = rand ( 0 , 100 );
        }
      }
      $sFrase = 'Essa é a posição %s%s e o seu conteúdo é %s. <br>';
      for ($iContX=0; $iContX < 10; $iContX++) {
        for ($iContY=0; $iContY < 4 ; $iContY++) {
          printf($sFrase, $iContX, $iContY, $aArray[$iContX][ $iContY]);
        }
      }
    ?>
  </body>
</html>