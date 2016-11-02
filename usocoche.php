<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Usocoche</title>
  </head>
  <body>
    <?php

    include "coche.php";
    $Coche= new Coche ();

    $Coche->setmarca("BMW");
   
    $Coche->setcaballos(1300);

     $Coche= new Coche ();
   
    $Coche->setmarca("mercedes");
    
    $Coche->setcaballos(1000);
 
    ?>
    La marca es : <b><?=$Coche->getmarca()?></b>. <br>
    Sus caballos son : <b><?=$Coche->getcaballos()?></b>.
  </body>
</html>
