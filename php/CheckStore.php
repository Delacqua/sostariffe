<?php

class CheckStore {

	public function postUrl($id) {

		$postdata = http_build_query(
		    array(
		        'id' => $id
		    )
		);

		$opts = array('http' =>
		    array(
		        'method'  => 'POST',
		        'header'  => 'Content-Type: application/x-www-form-urlencoded',
		        'content' => $postdata
		    )
		);

		$context  = stream_context_create($opts);

		return $context;
	}

	public function trovaProdottoId($id, $arr) {

		$stores = array();

		foreach ($arr as $value) {
			if ($id == $value->trovaItem($id)) {
				if (!$value->getItemSelected()->getStatus()) {
					$stores[] = $value;
				}
			}
		}

		return $stores;
	}
	
	private function checkQty()  {

	}

	private function byDistance($a, $b) {
		//1° distance , 2° quantita
	    $c = $a->getDistance() - $b->getDistance();
	    $c .= $a->getItemSelected()->getQty() - $b->getItemSelected()->getQty();
	    $c .= strcmp($a->getName(),$b->getName());
	    
	    return $c;
	}

	
	public function orderDistance($arr) {
		usort($arr, array("CheckStore", "byDistance"));
		return $arr;
	}

	public function storeName($id, $arr) {

		foreach ($arr as $value) {
			if ($value->id == $id) {
				return $value->name;;
			}
		}

		return "Senza Nome";
	}

}