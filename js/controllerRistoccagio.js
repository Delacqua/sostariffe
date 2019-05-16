let dom = document;
let elencoRis = new ElencoRis(objs);
let elencoProdotti = dom.getElementById("elencoProdotti");

let ristoccaggio = new Ristoccaggio();
let elementModal = dom.getElementById("modalMsg");;

// ------------------

elencoRis.insertElenco(dom.getElementById("elencoProdotti"));

function sendTo(id) {
	let objIndex = objs.findIndex(x => x.id === id);
	ristoccaggio.sendTo(objs[objIndex], elementModal);
}