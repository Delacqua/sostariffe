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

  <?php include "content/head.php"; ?>

  <body>

	<script type="text/javascript"> let objs = <?= $itemsJson; ?>; </script>

  <div class="contentArea">

      <main>

        <?php include "content/headerGestione.php"; ?>

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