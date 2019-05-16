<?php
header("Content-Type: application/json");

include_once '../php/autoload.php';

$storesJson = file_get_contents('../db/stores.json', true);
$storesArray = json_decode($storesJson);

$itemsJson = file_get_contents('../db/items.json', true);
$itemsArray = json_decode($itemsJson);

if (is_null($_POST['id']) || !isset($_POST['id']) ) {
  throw new Exception('id not set');
}

$id = $_POST['id'];

	$allStores = array();
	$name = CheckStore::storeName($id,$itemsArray);
	
	foreach ($storesArray as $value) {
		$allStores[] = new Store($name,$value);
	}

//----------------

	
	$ctas = CheckStore::trovaProdottoId($id, $allStores);	
	$ctas = CheckStore::orderDistance($ctas);
	
	echo json_encode($ctas);