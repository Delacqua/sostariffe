<?php

include_once "php/CheckStore.php";

if (is_null($_POST['id']) || !isset($_POST['id']) ) {
  $_POST['id'] = 0;
}


$itemsJson = file_get_contents('http://localhost/sostariffe/layout/db/controlleCta.php', false, CheckStore::postUrl($_POST['id']));
$itemsArray = json_decode($itemsJson);

$gest = false;

?>

<!DOCTYPE html>
<html lang="it">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="">

    <title>SOS Tariffe</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link href="css/style.css" rel="stylesheet">

  </head>

  <body>

	<script type="text/javascript"> let objs = <?= $itemsJson; ?>; </script>

  <div class="contentArea">

      <header>

        <?php include "content/headerGestione.php"; ?>

      </header>

      <main>

        <?php include "content/mainRistoccaggio.php"; ?>  
      
      </main>

  </div>


    <!-- Bootstrap core JavaScript -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- JavaScript -->
    <script src="js/Ristoccaggio.js"></script>
    <script src="js/ElencoRis.js"></script>
	  <script src="js/controllerRistoccagio.js"></script>

  </body>
</html>