class Elenco {

	constructor(elenco) {
		this.elenco = elenco;
	}

	order(arr) {

		function compare( a, b ) {
			  if ( a.name < b.name ){
			    return -1;
			  }
			  if ( a.name > b.name ){
			    return 1;
			  }
			  return 0;
			}

		arr.sort( compare );

		return arr;
	}

	nomeProdotto(obj) {
		return "<div> <h5>"+obj.name+"</h5>";
	}

	descrizioneProdotto(obj) {
		return "<p>"+obj.description+"</p> </div>";
	}

	ctaProdotto(obj) {
		return "<div> <a class='btn btn-cta' role='button' onClick='nextStep("+obj.id+");'>"+obj.country+"</a> </div>";
	}

	makeHtml(obj) {
		let html;

		html = "<li class='card prodotti'>"+this.nomeProdotto(obj) + this.descrizioneProdotto(obj) + this.ctaProdotto(obj)+"</li>";

		return html;
	}
	
	makeLista(arr) {
		let i;
		let listaHtml = '';

		for (i = 0; i < arr.length; i++) {
			listaHtml = listaHtml + this.makeHtml(arr[i]);
		}

		return listaHtml;
	}

	insertElenco(elementMenu) {
		let elenco = this.order(this.elenco);
		elementMenu.innerHTML = this.makeLista(elenco);
	}

}
		  