// JavaScript Document

/* JSValidate preferences */
var js_options = {
	errorTag: "span", // which tag do you want to use for error container. it must be one that opens and closes (div,span,p,b)
	errorClass: "jsvalidation", // this is the css class name given to the tag above
	errorLocation: "afterEnd", // only accepts beforeBegin or afterEnd (either before or after the input element)
	//note: if you choose "none" for the above attribute, you must create the error yourself and give the element an ID consisting of the option below + the name of the field to validate.
	errorIDPrefix: "jsvalidator", // prefix of the id of the element above that will attach to the name or id of the form element. don't use spaces or special characters.
	startGone: false, //couldn't think of another name for this, but if true, it will apply "display:none", otherwise, the element is just invisible.
	useBR: "none", // accepts before, after, both or none; This will add a new line (<br />) before and/or after the above element.
	useBlur: true, // this will attach an onBlur validator to each form element.
	submitClass: 'submit_action', // apply this class inside any form to let this element submit the form.
	highlightColor: '#FFFF99', //default color should be:  #FFFF99
	endColor: '#FFFFFF', //this is what you generally want to set to the background color behind the form elements.
	extMessage: true // if true, and you have accept value on file input, it tells user what extensions are accepted.
}
//note: can apply any of the custom options above by including {optionname: 'value'} in the element's class.

//setup validators like: name of validator, default message, /regular expression/ !don't forget the / in front and the / in back!!!!
var custom_validators = {
	number: {
		className: "jsvalidate_number",
		defaultMessage: "This field must have a numerical value.",
		regExp: /^[-]?\d+(\.\d+)?$/
	},
	digits: {
		className: "jsvalidate_digits",
		defaultMessage: "This field can only contain numbers.",
		regExp: /^[-]?\d+(\.\d+)?$/
	},
	email: {
		className: "jsvalidate_email",
		defaultMessage: "This field must contain a valid email address.",
		regExp: /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/
	},
	uscanzip: {
		className: "jsvalidate_uscanzip",
		defaultMessage: "This field must contain a valid US or Canada zip code.",
		regExp: /^((\d{5}([- ])\d{4})|(\d{5})|([AaBbCcEeGgHhJjKkLlMmNnPpRrSsTtVvXxYy]\d[A-Za-z]\s?\d[A-Za-z]\d))$/
	},
	usstate: {
		className: "jsvalidate_usstate",
		defaultMessage: "This field must contain a valid 2 letter US state code.",
		regExp: /^(A[LKSZRAEP]|C[AOT]|D[EC]|F[LM]|G[ANU]|HI|I[ADLN]|K[SY]|LA|M[ADEHINOPST]|N[CDEHJMVY]|O[HKR]|P[ARW]|RI|S[CD]|T[NX]|UT|V[AIT]|W[AIVY])$/
	},
	usphone: {
		className: "jsvalidate_usphone",
		defaultMessage: "This field must contain a valid US phone number with area code.",
		regExp: /^([0-9]( |-|.)?)?(\(?[0-9]{3}\)?|[0-9]{3})( |-|.)?([0-9]{3}( |-|.)?[0-9]{4}|[a-zA-Z0-9]{7})$/
	},
	creditcard: {
		className: "jsvalidate_creditcard",
		defaultMessage: "This field must contain a valid credit card number.",
		regExp: /^((4\d{3})|(5[1-5]\d{2})|(6011))([- ])?\d{4}([- ])?\d{4}([- ])?\d{4}|3[4,7]\d{13}$/
	},
	ssn: {
		className: "jsvalidate_ssn",
		defaultMessage: "This field must contain a valid social security number.",
		regExp: /(^|\s)(00[1-9]|0[1-9]0|0[1-9][1-9]|[1-6]\d{2}|7[0-6]\d|77[0-2])(-?|[\. ])([1-9]0|0[1-9]|[1-9][1-9])\3(\d{3}[1-9]|[1-9]\d{3}|\d[1-9]\d{2}|\d{2}[1-9]\d)($|\s|[;:,!\.\?])/
	},
	alpha: {
		className: "jsvalidate_alpha",
		defaultMessage: "This field must contain only letters.",
		regExp: /^[a-zA-z\s]+$/
	},
	alphanum: {
		className: "jsvalidate_alphanum",
		defaultMessage: "This field must contain only letters or numbers.",
		regExp: /^[a-zA-Z0-9]+$/
	}
};


/* only change the default message, do not change the className */
var js_validators = {
	required: {
		className: "jsrequired",
		defaultMessage: "This field is required."
	},
	notfirst: {
		className: "select-notfirst",
		defaultMessage: "Select something other than the first item."
	},
	filetypes: {
		defaultMessage: "This field accepts the following file types:"
	}
};


/* begin uneditable code ---- please don't touch */



String.prototype.trim = function() {
	a = this.replace(/^\s+/, '');
	return a.replace(/\s+$/, '');
};

Array.prototype.inArray = function (value){
    var i;
    for (i=0; i < this.length; i++) {
        // Matches identical (===), not just similar (==).
        if (this[i] === value) {
            return true;
        }
    }
    return false;
};

Array.prototype.remove=function(s){
	for(i=0;i<this.length;i++){
		if(s==this[i]) this.splice(i, 1);
	}
};

String.prototype.isEmpty = function() {
   if ((this.value.length == 0) || (this.value==null)) {
      return true;
   }
   return false;
};

// Removes the last element from an array
// and returns that element.
if (!Array.prototype.pop) {
	Array.prototype.pop = function() {
		var last;
		if (this.length) {
			last = this[this.length - 1];
			this.length -= 1;
		}
		return last||null;
	};
}

// Adds one or more elements to the end of an array and returns
// the new length of the array.
if (!Array.prototype.push) {
	Array.prototype.push = function() {
		for (var i = 0; i < arguments.length; ++i) {
			this[this.length] = arguments[i];
		}
		return this.length;
	};
}

function isset(v) {
	return((typeof(v)=='undefined' || v.length==0) ? false : true);
}

function getElementsByClassName(className, tag, elm){
	var testClass = new RegExp("(^|\\s)" + className + "(\\s|$)");
	var tag = tag || "*";
	var elm = elm || document;
	var elements = (tag == "*" && elm.all)? elm.all : elm.getElementsByTagName(tag);
	var returnElements = [];
	var current;
	var length = elements.length;
	for(var i=0; i<length; i++){
		current = elements[i];
		if(testClass.test(current.className)){
			returnElements.push(current);
		}
	}
	return returnElements;
}

function isArray() {
	if (typeof arguments[0] == 'object') { 
		var criterion = arguments[0].constructor.toString().match(/array/i); 
		return (criterion != null); 
	}
	return false;
}

function isString() {
	if (typeof arguments[0] == 'string') return true;
	if (typeof arguments[0] == 'object') {
		var criterion = arguments[0].constructor.toString().match(/string/i); 
		return (criterion != null);
	}
	return false;
}


function RemoveDuplicates(arr){
	if(isArray(arr)){
		arr.sort();
		returnArray = true;
	} else {
		returnArray = false;
		arr.trim();
		arr = arr.split(" ");
		arr.sort();
	}
	var result=new Array();
	var lastValue="";
	for (var i=0; i<arr.length; i++){
		var curValue=arr[i];
		if (curValue != lastValue){
			result[result.length] = curValue;
		}
		lastValue = curValue;
	}
	if(!returnArray){
		var newResult = "";
		for (var a=0; a < result.length; a++){
			newResult += result[a] + " ";
		}
		newResult.trim();
		result = newResult;
	}
	return result;
}



var _emptyTags = {
   "IMG":   true,
   "BR":    true,
   "INPUT": true,
   "META":  true,
   "LINK":  true,
   "PARAM": true,
   "HR":    true
};


if(typeof HTMLElement!="undefined" && !HTMLElement.prototype.insertAdjacentHTML){
	HTMLElement.prototype.__defineGetter__("outerHTML", function () {
		var attrs = this.attributes;
		var str = "<" + this.tagName;
		for (var i = 0; i < attrs.length; i++)
			str += " " + attrs[i].getAttribute('name') + "=\"" + attrs[i].value + "\"";
		
		if (_emptyTags[this.tagName])
			return str + ">";
		
		return str + ">" + this.innerHTML + "</" + this.tagName + ">";
	});
	
	HTMLElement.prototype.__defineSetter__("outerHTML", function (sHTML) {
		var r = this.ownerDocument.createRange();
		r.setStartBefore(this);
		var df = r.createContextualFragment(sHTML);
		this.parentNode.replaceChild(df, this);
	});
	
	
	HTMLElement.prototype.insertAdjacentHTML = function (sWhere, sHTML) {
	var df;   // : DocumentFragment
	var r = this.ownerDocument.createRange();
	
	switch (String(sWhere).toLowerCase()) {  // convert to string and unify case
	  case "beforebegin":
		 r.setStartBefore(this);
		 df = r.createContextualFragment(sHTML);
		 this.parentNode.insertBefore(df, this);
		 break;
		 
	  case "afterbegin":
		 r.selectNodeContents(this);
		 r.collapse(true);
		 df = r.createContextualFragment(sHTML);
		 this.insertBefore(df, this.firstChild);
		 break;
		 
	  case "beforeend":
		 r.selectNodeContents(this);
		 r.collapse(false);
		 df = r.createContextualFragment(sHTML);
		 this.appendChild(df);
		 break;
		 
	  case "afterend":
		 r.setStartAfter(this);
		 df = r.createContextualFragment(sHTML);
		 this.parentNode.insertBefore(df, this.nextSibling);
		 break;
	}   
	};
}

var jsValidator = new Array();
var these_options = eval("({})");


function findForms(){
	var forms = document.getElementsByTagName('form');
	return forms;
}

function getFields(formref,type){
	var els;
	if(type == "name"){
		els = document.forms[formref].elements;
	}
	if(type == "id"){
		els = Form.getElements(formref);
	}
	return els;	
}


function getParentForm(el){
  while(el.parentNode != null && el.tagName != "FORM") el = el.parentNode;
  return (el.getAttribute('name')) ? el.getAttribute('name') : el.getAttribute('id');
}

function hasLabel(el){
	while(el.parentNode != null && el.tagName != "LABEL") el = el.parentNode;
	return (el.tagName == "LABEL") ? true : false;
}

function getLabel(el){
	while(el.parentNode != null && el.tagName != "LABEL") el = el.parentNode;
	return el;
}


function attachSubmit(form_ref){
	var form_attach;
	var parent_ref;
	if(form_ref.cloneNode(false).getAttribute('name') || form_ref.cloneNode(false).getAttribute('id')){
		if(document.forms[form_ref.cloneNode(false).getAttribute('name')]){
			form_attach = document.forms[eval("form_ref.cloneNode(false).getAttribute('name')")];
			form_ref = form_ref.cloneNode(false).getAttribute('name');
		} else {
			form_attach = $(eval("form_ref.cloneNode(false).getAttribute('id')"));
			form_ref = form_ref.cloneNode(false).getAttribute('id');
		}
	} else {
		form_attach = form_ref;
	}
	if(window.addEventListener){ // Mozilla, Netscape, Firefox
		form_attach.onsubmit = function(){ return submitAction(form_ref,'INPUT','submit'); };
	} else { // IE
		form_attach.attachEvent('onsubmit', function(){ return submitAction(form_ref,'INPUT','submit'); });
	}
	
	if(getElementsByClassName(js_options['submitClass']).length > 0){
		var buttons = getElementsByClassName(js_options['submitClass']);
		for(b=0; b < buttons.length; b++){
			parent_ref = getParentForm(buttons[b]);
			if(parent_ref == form_ref){
				tag = buttons[b].tagName;
				if(buttons[b].type){
					type = buttons[b].type.toLowerCase();
				} else {
					type = "";
				}
				Event.observe(buttons[b], 'click', function(){ return submitAction(form_ref,tag,type); });
			}
		}
	}
}

function extractOptions(vals){
	var first_pos = vals.indexOf("{");
	var last_pos = vals.indexOf("}") + 1;
	var the_options = vals.substring(first_pos,last_pos);
	return the_options;
}

var radioNum = 0;
function attachValidation(fieldref,form_name){	
	var validation_message = "";
	var the_field;
	var these_options = eval("({})");
	var isRadio = false;
	var doneRadios = new Array();
	var doExt = true;
	var useBlur = false;
	
	if(document.forms[form_name].elements[fieldref]){
		the_field = document.forms[form_name].elements[fieldref];
		if(typeof the_field.nodeType == "undefined"){
			el_type = the_field[0].type.toLowerCase();
		} else {
			el_type = the_field.type.toLowerCase();
		}
		if(el_type == "radio"){
			isRadio = true;
		}
	} else {
		the_field = $(fieldref);
	}
	
	if(isRadio){
		classes = "";
		for(r=0; r < the_field.length; r++){
			classes += the_field[r].className + " ";
		}
	} else {
		classes = the_field.className;
	}
	if(classes){
		if(classes.indexOf("{") > -1 && classes.indexOf("}") > -1){
			these_options = extractOptions(classes).toString();
			classes = classes.replace(these_options,"");
			these_options = eval("(" + these_options + ")");
		}
		useBlur = (isset(these_options['useBlur'])) ? these_options['useBlur'] : js_options['useBlur'];
		extMessage = (isset(these_options['extMessage'])) ? these_options['extMessage'] : js_options['extMessage'];
		
		classes.trim();
		classes = RemoveDuplicates(classes);
		classes = classes.split(" ");
		
		for(c=0; c < classes.length; c++){
			for(items in js_validators){
				if(classes[c] == js_validators[items]['className']){
					if(validation_message == ""){
						validation_message = js_validators[items]['defaultMessage'];
					} else {
						validation_message += ' ' + js_validators[items]['defaultMessage'];
					}
					if(!jsValidator.inArray(fieldref + "," + form_name + "," + the_field.className)){
						array_pos = jsValidator.length;
						jsValidator[array_pos] = fieldref + "," + form_name + "," + the_field.className;
					}
				}
			}
			
			for(items in custom_validators){
				if(classes[c] == custom_validators[items]['className']){
					if(validation_message == ""){
						validation_message = custom_validators[items]['defaultMessage'];
					} else {
						validation_message += ' ' + custom_validators[items]['defaultMessage'];
					}
					if(!jsValidator.inArray(fieldref + "," + form_name + "," + the_field.className)){
						array_pos = jsValidator.length;
						jsValidator[array_pos] = fieldref + "," + form_name + "," + the_field.className;
					}
				}
			}
			
			if(isRadio){
				for(n=0; n < the_field.length; n++){
					if(the_field[n].getAttribute('alt') != "" && the_field[n].getAttribute('alt') != null){
						validation_message = the_field[n].getAttribute('alt');
					}
				}
			} else {
				if(the_field.getAttribute('alt')){
					if(the_field.getAttribute('alt') != "" && the_field.getAttribute('alt') != null){
						validation_message = the_field.getAttribute('alt');
					}
				}
			}
			
			if(el_type == "file" && extMessage && doExt){
				if(the_field.getAttribute('accept') != ""){
					if(validation_message == ""){
						validation_message = js_validators['filetypes']['defaultMessage'] + " " + the_field.getAttribute('accept');
					} else {
						validation_message += " " + js_validators['filetypes']['defaultMessage'] + " " + the_field.getAttribute('accept');
					}
				}
				doExt = false;
			}
		}
	}
	
	if(validation_message != "" && validation_message != null){
		var field_name = js_options['errorIDPrefix'] + "_" + fieldref;
		field_name = field_name.trim();
		
		errorTag = (isset(these_options['errorTag'])) ? these_options['errorTag'] : js_options['errorTag'];
		errorClass = (isset(these_options['errorClass'])) ? these_options['errorClass'] : js_options['errorClass'];
		startGone = (isset(these_options['startGone'])) ? these_options['startGone'] : js_options['startGone'];
		useBR = (isset(these_options['useBR'])) ? these_options['useBR'] : js_options['useBR'];
		errorLocation = (isset(these_options['errorLocation'])) ? these_options['errorLocation'] : js_options['errorLocation'];
		
		var html = "<";
		
		html += errorTag;
		html += " id=\"" + field_name + "\" ";
		if(errorClass != ""){
			html += "class=\"" + errorClass + "\" ";
		}
		html += "style=\"opacity:0; filter:alpha(opacity=0);";
		if(startGone){
			html +=	" display:none;";
		}
		html += "\">";
		if(useBR != "none"){
			if(useBR == "before" || useBR == "both"){
				html += '<br />';
			}
		}
		html += validation_message;
		if(useBR != "none"){
			if(useBR == "after" || useBR == "both"){
				html += '<br />';
			}
		}
		
		html += "</";
		html += errorTag;
		html += ">";
		
		if(errorLocation == "afterEnd" || errorLocation == "beforeBegin"){
			if(isRadio){
				if(errorLocation == "afterEnd"){
					totalRadios = the_field.length - 1;
					if(radioNum == totalRadios){
						addTo = (hasLabel(the_field[radioNum])) ? getLabel(the_field[radioNum]) : the_field[radioNum];
						addTo.insertAdjacentHTML(errorLocation,html);
						radio_pos = doneRadios.length;
						doneRadios[radio_pos] = the_field[radioNum].getAttribute('name');
					}
					radioNum++;
				} else {
					if(!doneRadios.inArray(the_field[0].getAttribute('name'))){
						the_field[0].insertAdjacentHTML(errorLocation,html);
						radio_pos = doneRadios.length;
						doneRadios[radio_pos] = the_field[radioNum].getAttribute('name');
					}
				}
			} else {
				this_type = the_field.type.toLowerCase();
				if(this_type == "checkbox"){
					attachTo = (hasLabel(the_field)) ? getLabel(the_field) : the_field;
					attachTo.insertAdjacentHTML(errorLocation,html);
				} else {
					the_field.insertAdjacentHTML(errorLocation,html);
				}
			}
		}
		if($(field_name)){
			new Effect.Opacity(field_name, {to:0.0, duration: 0 });
		}
		if(errorLocation == "none" && startGone && $(field_name)){
			$(field_name).style.display = 'none';
		}
	}
	
	if(useBlur){
		//setup onBlur feature;
		if(the_field.isArray && the_field[0].type){
			field_type = the_field[0].type;
		} else {
			if(the_field.type){
				field_type = the_field.type.toLowerCase();
			}
		}
		if((the_field.tagName == "INPUT" && (field_type == "text" || field_type == "password")) || the_field.tagName == "TEXTAREA"){
			Event.observe(the_field, 'blur', function(){ blurAction(the_field,form_name); });
		}
		if(the_field.tagName == "SELECT"){
			Event.observe(the_field, 'blur', function(){ blurAction(the_field,form_name); });
			Event.observe(the_field, 'change', function(){ blurAction(the_field,form_name); });
		}
		if(the_field.tagName == "INPUT" && field_type == "checkbox"){
			Event.observe(the_field, 'click', function(){ blurAction(the_field,form_name); });
		}
		if(the_field.tagName == "INPUT" && field_type == "checkbox"){
			Event.observe(the_field, 'blur', function(){ blurAction(the_field,form_name); });
			Event.observe(the_field, 'click', function(){ blurAction(the_field,form_name); });
			Event.observe(the_field, 'change', function(){ blurAction(the_field,form_name); });
		}		
		if(typeof the_field.nodeType == "undefined"){
			for(a=0; a < the_field.length; a++){
				if(!radio_name){
					var radio_name = the_field[a].getAttribute('name');
				}
				Event.observe(document.forms[form_name].elements[radio_name][a], 'click', function(){ blurAction(the_field,form_name); });
			}
		}
	}
}

function getFileExtension(filename){
	if( filename.length == 0 ) return "";
	var dot = filename.lastIndexOf(".");
	if( dot == -1 ) return ""; 
	var extension = filename.substr(dot + 1,filename.length); 
	return extension;
}

function blurAction(field_reference,form_ref){
	var field_name;
	var the_result = true;
	var these_options = eval("({})");
	var isRadio = false;
	
	if(($(field_reference)) || (document.forms[form_ref].elements[field_reference])){
		field_reference = ($(field_reference)) ? $(field_reference) : document.forms[form_ref].elements[field_reference];
	}
	
	if(typeof field_reference.nodeType == "undefined"){
		the_field = (field_reference[0].getAttribute('name')) ? field_reference[0].getAttribute('name') : field_reference[0].getAttribute('id');
		isRadio = true;
	} else {
		the_field = (field_reference.getAttribute('id')) ? field_reference.getAttribute('id') : field_reference.getAttribute('name');
	}
	
	if(isRadio){
		classes = "";
		for(r=0; r < field_reference.length; r++){
			classes += field_reference[r].className + " ";
		}
	} else {
		classes = field_reference.className;
	}
	if(classes){
		if(classes.indexOf("{") > -1 && classes.indexOf("}") > -1){
			these_options = extractOptions(classes);
			classes = classes.replace(these_options,"");
			these_options = eval("(" + these_options + ")");
		}
		classes.trim();
		classes = RemoveDuplicates(classes);
		classes = classes.split(" ");
		var bad_field = false;
		var isRequired = false;
		
		hColor = (isset(these_options['highlightColor'])) ? these_options['highlightColor'] : js_options['highlightColor'];
		eColor = (isset(these_options['endColor'])) ? these_options['endColor'] : js_options['endColor'];
		startGone = (isset(these_options['startGone'])) ? these_options['startGone'] : js_options['startGone'];
		errorIDPrefix = (isset(these_options['errorIDPrefix'])) ? these_options['errorIDPrefix'] : js_options['errorIDPrefix'];
		errorLocation = (isset(these_options['errorLocation'])) ? these_options['errorLocation'] : js_options['errorLocation'];
		
		for(c=0; c < classes.length; c++){
			field_name = errorIDPrefix + '_' + the_field;
			field_name = field_name.trim();
			
			for(items in custom_validators){
				if(classes[c] == custom_validators[items]['className'] && field_reference.value != ""){
					var thisRegExp = custom_validators[items]['regExp'];
					if(!thisRegExp.test(field_reference.value)){
						bad_field = true;
					}
				}
			}
			
			if(classes[c] == js_validators['required']['className']){
				isRequired = true;
				if(typeof field_reference.nodeType == "undefined"){
					thistype = field_reference[0].type.toLowerCase();
					field_type = thistype;
					thisTag = field_reference[0].tagName;
				} else {
					field_type = field_reference.type.toLowerCase();
					thisTag = field_reference.tagName;
				}
				if((thisTag == "INPUT" && (field_type == "text" || field_type == "password")) || thisTag == "TEXTAREA"){
					if(field_reference.value == ""){
						bad_field = true;
					}
				}
				if(thisTag == "SELECT"){
					if(field_reference.value == ""){
						bad_field = true;
					}
				}
				if(thisTag == "INPUT" && field_type == "checkbox"){
					if(field_reference.checked == false){
						bad_field = true;
					}
				}
				if(thisTag == "INPUT" && field_type == "file"){
					if(field_reference.value == ""){
						bad_field = true;
					} else {
						if(field_reference.getAttribute('accept') != ""){
							pass = false;
							fileTypes = field_reference.getAttribute('accept').split(",");
							ext = getFileExtension(field_reference.value)
							for(f=0; f < fileTypes.length; f++){
								if(ext == fileTypes[f]){
									pass = true;
								}
							}
							if(!pass){
								bad_field = true;
							}
						}
					}
				}
				
				if(thisTag == "INPUT" && field_type == "radio"){
					this_field = (field_reference.name) ? document.forms[form_ref].elements[field_reference.name] : document.forms[form_ref].elements[field_reference[0].name];
					theRadios = this_field.length;
					bad_field = true;
					for(t=0; t < theRadios; t++){
						if(this_field[t].checked == true){
							bad_field = false;
						}
					}
				}
			}
			
			if(classes[c] == js_validators['notfirst']['className']){
				if(field_reference.selectedIndex == 0 && field_reference.tagName == "SELECT"){
					bad_field = true;
				}
			}
		}
		
		
		if(bad_field){
			if(errorLocation == "none"){
				if($(field_name)){
					throwFlag(field_name, hColor, eColor,startGone);	
				}
			} else {
				throwFlag(field_name, hColor, eColor,startGone);
			}
			the_result = false;
		} else {
			if(errorLocation == "none"){
				if($(field_name)){
					hideFlag(field_name,startGone);
				}
			} else {
				hideFlag(field_name,startGone);
			}
		}
	}
	
	return the_result;
}


function loadAction(){
	var forms = findForms();
	var attachIt;
	var fields;
	var j;
	var done;
	if(forms.length >= 1){
		for(var i=0; i < forms.length; i++){
			attachIt = attachSubmit(forms[i]);
			form_name = forms[i].cloneNode(false).getAttribute('name');
			if(form_name){
				fields = getFields(form_name,"name");
			} else {
				fields = getFields(forms[i].getAttribute('id'),"id");
			}
			for(j=0; j < fields.length; j++){
				done = false;
				if(fields[j].getAttribute('id')){
					attachValidation(fields[j].getAttribute('id'),form_name);
					done = true;
				}
				if(fields[j].cloneNode(false).getAttribute('name') && done == false){
					attachValidation(fields[j].cloneNode(false).getAttribute('name'),form_name);
					done = true;
				}
			}
		}
	}
}


function throwFlag(fieldToFlag, hColor, eColor, gone){
	if(Element.getOpacity(fieldToFlag) > .75){
		new Effect.Highlight(fieldToFlag,{duration:1.0, startcolor:hColor, endcolor:eColor });
	} else {
		if(gone){
			$(fieldToFlag).style.display = '';
		}
		new Effect.Opacity(fieldToFlag, {to:1.0, duration: .5 });
	}
}

function hideFlag(fieldToHide, gone){
	if(Element.getOpacity(fieldToHide) > .25){
		new Effect.Opacity(fieldToHide, {to:0.0, duration: .5 });
		if(gone){
			$(fieldToHide).style.display = 'none';
		}
	}
}


function validateFields(theForm){
	var the_field;
	var proceed = true;
	
	for(var jsV=0; jsV < jsValidator.length; jsV++){
		var bad_field = false;
		
		var els = jsValidator[jsV].split(",");
		
		field_ref = els[0];
		form_ref = els[1];
		class_ref = els[2];
		
		if(form_ref == theForm){
			checkField = blurAction(field_ref,form_ref);
			if(!checkField){
				proceed = false;
			}
		}
	}
	
	return proceed;
}

function submitAction(thisForm,tag,type){
	var process = validateFields(thisForm);
	if((tag != "INPUT" || (tag == "INPUT" && type != "submit")) && process && (document.forms[thisForm] || $(thisForm))){
		if(document.forms[thisForm]){
			document.forms[thisForm].submit();
		} else {
			$(thisForm).submit();
		}
		return false;
	}
	return process;
}


Event.observe(window, 'load', function(){ loadAction(); });