let dom = document;
let elenco = new Elenco(objs);

let input = dom.getElementById("input");
let elencoProdotti = dom.getElementById("elencoProdotti");
let ricerca = new Ricerca();

// ------------------

elenco.insertElenco(dom.getElementById("elencoProdotti"));

function search() {
	ricerca.search(input, elencoProdotti);
}

function nextStep(id) {
	//window.open ('ristoccaggio.php','_self',false)
	openWindowWithPost(id);
}

function openWindowWithPost(id) {
	// Create a form
	var mapForm = document.createElement("form");
	mapForm.target = "_self";    
	mapForm.method = "POST";
	mapForm.action = "ristoccaggio.php";

	// Create an input
	var mapInput = document.createElement("input");
	mapInput.type = "number";
	mapInput.name = "id";
	mapInput.value = id;

	// Add the input to the form
	mapForm.appendChild(mapInput);

	// Add the form to dom
	document.body.appendChild(mapForm);

	// Just submit
	mapForm.submit();
}