<?php

class Store implements JsonSerializable {

	private $id;
	private $name;
	private $cta;
	private $distance;
	private $items;
	
	function __construct($name, $obj) {
		$this->id = $obj->id;
		$this->name = $name;
		$this->cta = $obj->name;
		$this->distance = $obj->distance;
		$this->items = $this->includeItems($obj->items);
		$this->itemSelected = $this->items[0];
	}

	private function includeItems($arr) {
		$items = array();

		if (is_array($arr)) {
			foreach ($arr as $value) {
				$items[] = new Item($value);
			}
		}

		return $items;
	}

	public function trovaItem($id) {

		foreach ($this->items as $value) {
			if ($id == $value->getID()) {
				$this->itemSelected = $value;
				return true;
			}
		}

		return false;
	}

	public function getID() {
		return $this->id;
	}

	public function getName() {
		return $this->name;
	}

	public function getCta() {
		return $this->cta;
	}

	public function getDistance() {
		return $this->distance;
	}

	public function getItemSelected() {
		return $this->itemSelected;
	}

    public function jsonSerialize()
    {
        return 
        [
        	'id' => $this->getID(),
            'name' => $this->getName(),
            'cta' => $this->getCta(),
            'distance' => $this->getDistance(),
            'item' => $this->getItemSelected()
        ];
    }

}

