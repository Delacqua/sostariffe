class Ricerca {

	convertCase(text){
		let strUCase= text.toUpperCase();
		return strUCase;
	}

	compare(element, searchValue) {
		searchValue = this.convertCase(searchValue);

		let h5 = element.getElementsByTagName("h5")[0];
	   	let txtValue = element.innerText;
		txtValue= this.convertCase(txtValue);

	    if (txtValue.indexOf(searchValue) > -1) {
	    	
	    	return true;
	    }
	    else {
	    	
	    	return false;
	    }
	}

	search(input, element) {
	    let li, i;

	    li = element.getElementsByTagName("li");

	    for (i = 0; i < li.length; i++) {
	        if (this.compare(li[i],input.value)) {
	            li[i].style.display = "";
	        } else {
	            li[i].style.display = "none";
	        }
	    }

	}
    
}

