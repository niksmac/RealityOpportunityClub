	function clear_click(thisfield, defaulttext,image) {
	if (thisfield.value == defaulttext) {
	thisfield.value = "";
	thisfield.style.opacity="1";
	thisfield.style.filter="alpha(opacity=100)";
	thisfield.style.background="url("+image+") no-repeat right top";
	}
	}
	
	function recall_click(thisfield, defaulttext,image) {
	if (thisfield.value == "") {
	thisfield.value = defaulttext;
	thisfield.style.opacity="0.4";
	thisfield.style.filter="alpha(opacity=40)";
	thisfield.style.background="url("+image+") no-repeat right top";
	}
	}
//search	
	function clear_search(thisfield, defaulttext,image) {
	if (thisfield.value == defaulttext) {
	thisfield.value = "";
	thisfield.style.opacity="1";
	thisfield.style.filter="alpha(opacity=100)";
	thisfield.style.background="url("+image+") no-repeat left top";
	}
	}
	
	function recall_search(thisfield, defaulttext,image) {
	if (thisfield.value == "") {
	thisfield.value = defaulttext;
	thisfield.style.opacity="0.4";
	thisfield.style.filter="alpha(opacity=40)";
	thisfield.style.background="url("+image+") no-repeat left top";
	}
	}


		
