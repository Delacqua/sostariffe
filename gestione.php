<?php

$itemsJson = file_get_contents('db/items.json', true);
$itemsArray = json_decode($itemsJson);

$gest = true;

?>

<!DOCTYPE html>
<html lang="it">

  <?php include "content/head.php"; ?>

  <body>

	<script type="text/javascript"> var objs = <?= $itemsJson; ?>; </script>

  <div class="contentArea">
		
		


  	<main>
    
    <?php include "content/headerGestione.php"; ?>
		
    <?php include "content/mainGestione.php"; ?>	
  	
  	</main>

  </div>


    <!-- Bootstrap core JavaScript -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <!-- JavaScript -->
    <script src="js/Elenco.js"></script>
    <script src="js/Ricerca.js"></script>
    <script src="js/controller.js"></script>

  </body>
</html>