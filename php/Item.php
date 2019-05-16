<?php

class Item implements JsonSerializable {

	private $id;
	private $qty;
	private $minQty;
	private $status;
	
	function __construct($obj) {
		$this->id = $obj->id;
		$this->qty = $obj->qty;
		$this->minQty = $obj->minQty;
		$this->status = $this->checkStatus($obj->qty, $obj->minQty);
	}

	private function checkStatus($qty, $min) {
		if ($qty < $min) {
			return false;
		}

		else {
			return true;
		}
	}

	public function getStatus() {
		return $this->status;
	}

	public function getQty() {
		return $this->qty;
	}

	public function getMinQty() {
		return $this->minQty;
	}

	public function getID() {
		return $this->id;
	}

    public function jsonSerialize()
    {
        return 
        [
            'id' => $this->getID(),
            'qty' => $this->getQty(),
            'minQty' => $this->getMinQty(),
            'status' => $this->getStatus(),
        ];
    }

}