<?php 

class FlatArray {
	
	public function convertArray($arrayAnnidato, $arrayPiatto = []) {

		foreach ($arrayAnnidato as $value) {

			if (is_array($value)) {
				$arrayPiatto = FlatArray::convertArray($value, $arrayPiatto);
			}

			else {
				array_push($arrayPiatto, $value);	
			}
			
		}

		return $arrayPiatto;
	}
}