class Ristoccaggio {

	openModal(element) {
		$('#exampleModal').modal('show');
	}

	prodotto(obj) {
		return "<p>Prodotto: <span>"+ obj.name +"</span></p>";
	}

	magazzino(obj) {
		return "<p>Magazzino: <span>"+ obj.cta +"</span></p>";
	}

	inviati(obj) {
		let quantita = this.calcInviare(obj);
		return "<p>Articoli Inviati: <span>"+ quantita +"</span></p>";
	}

	calcInviare(obj){
		let _qty =  obj.item.minQty - obj.item.qty;

		if (_qty > 0) {
			return _qty; 
		}

		else {
			return 0;
		}
		
	}

	scriveMsg(obj) {
		let html;

		html = "<div>" + this.prodotto(obj) + this.magazzino(obj) + this.inviati(obj) + "</div>";

		return html;
	}

	postToPHP(obj) {
		/*
		$.post('',   
	       { data: obj }, 
	       function(data, status, jqXHR) {
	            // success callback
        })
		*/
        return true;
	}

	sendTo(obj, element) {
		if (!this.postToPHP(obj)) {
			return "fail";
		}
		element.innerHTML = this.scriveMsg(obj);
		this.openModal();
	}

}