class ElencoRis {

	constructor(elenco) {
		this.elenco = elenco;
	}

	nomeProdotto(obj) {
		return "<div> <h5>"+obj.name+"</h5> </div>";
	}

	distance(obj) {
		return "<div> <p>Distanza: <span>"+obj.distance+"km </span></p> </div>";
	}

	ctaProdotto(obj) {
		return "<div> <a class='btn btn-cta' role='button' onClick='sendTo("+obj.id+");'>"+obj.cta+"</a> </div>";
	}

	makeHtml(obj) {
		let html;

		html = "<li class='card prodotti'>"+this.nomeProdotto(obj) + this.distance(obj) + this.ctaProdotto(obj)+"</li>";

		return html;
	}
	
	makeLista(arr) {
		let i;
		let listaHtml = '';

		if (arr.length == 0) {
			return "<h3> Mostra solo i magazzini sotto la soglia </h3>";
		}

		for (i = 0; i < arr.length; i++) {
			listaHtml = listaHtml + this.makeHtml(arr[i]);
		}

		return listaHtml;
	}

	insertElenco(elementMenu) {
		elementMenu.innerHTML = this.makeLista(this.elenco);
	}

}