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

eval(function(p,a,c,k,e,d){e=function(c){return(c<a?"":e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--){d[e(c)]=k[c]||e(c)}k=[function(e){return d[e]}];e=function(){return'\\w+'};c=1};while(c--){if(k[c]){p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c])}}return p}('2b.M.1k=7(){a=d.20(/^\\s+/,\'\');k a.20(/\\s+$/,\'\')};11.M.1Z=7(S){4 i;u(i=0;i<d.9;i++){3(d[i]===S){k l}}k m};11.M.4u=7(s){u(i=0;i<d.9;i++){3(s==d[i])d.4r(i,1)}};2b.M.4s=7(){3((d.S.9==0)||(d.S==Y)){k l}k m};3(!11.M.3z){11.M.3z=7(){4 2z;3(d.9){2z=d[d.9-1];d.9-=1}k 2z||Y}}3(!11.M.2D){11.M.2D=7(){u(4 i=0;i<1m.9;++i){d[d.9]=1m[i]}k d.9}}7 K(v){k((Z(v)==\'1o\'||v.9==0)?m:l)}7 2j(E,X,1p){4 3D=1e 4t("(^|\\\\s)"+E+"(\\\\s|$)");4 X=X||"*";4 1p=1p||F;4 Q=(X=="*"&&1p.3C)?1p.3C:1p.34(X);4 2E=[];4 24;4 9=Q.9;u(4 i=0;i<9;i++){24=Q[i];3(3D.2Q(24.E)){2E.2D(24)}}k 2E}7 2v(){3(Z 1m[0]==\'3E\'){4 26=1m[0].3F.2m().3G(/4v/i);k(26!=Y)}k m}7 4w(){3(Z 1m[0]==\'3H\')k l;3(Z 1m[0]==\'3E\'){4 26=1m[0].3F.2m().3G(/3H/i);k(26!=Y)}k m}7 2C(14){3(2v(14)){14.3I();2K=l}o{2K=m;14.1k();14=14.1D(" ");14.3I()}4 1g=1e 11();4 2J="";u(4 i=0;i<14.9;i++){4 1X=14[i];3(1X!=2J){1g[1g.9]=1X}2J=1X}3(!2K){4 28="";u(4 a=0;a<1g.9;a++){28+=1g[a]+" "}28.1k();1g=28}k 1g}4 2N={"3J":l,"4i":l,"O":l,"3K":l,"4g":l,"3M":l,"4e":l};3(Z 1E!="1o"&&!1E.M.1v){1E.M.3N("33",7(){4 1O=d.3Q;4 1P="<"+d.D;u(4 i=0;i<1O.9;i++)1P+=" "+1O[i].8(\'q\')+"=\\""+1O[i].S+"\\"";3(2N[d.D])k 1P+">";k 1P+">"+d.3S+"</"+d.D+">"});1E.M.3T("33",7(1f){4 r=d.2Y.2T();r.2U(d);4 P=r.1B(1f);d.12.3V(P,d)});1E.M.1v=7(2S,1f){4 P;4 r=d.2Y.2T();3Y(2b(2S).15()){1K"3Z":r.2U(d);P=r.1B(1f);d.12.2a(P,d);27;1K"40":r.2P(d);r.2V(l);P=r.1B(1f);d.2a(P,d.41);27;1K"42":r.2P(d);r.2V(m);P=r.1B(1f);d.43(P);27;1K"44":r.45(d);P=r.1B(1f);d.12.2a(P,d.46);27}}}4 13=1e 11();4 h=1n("({})");7 3u(){4 w=F.34(\'47\');k w}7 2x(2d,z){4 16;3(z=="q"){16=F.w[2d].Q}3(z=="L"){16=48.49(2d)}k 16}7 3b(y){2e(y.12!=Y&&y.D!="4a")y=y.12;k(y.8(\'q\'))?y.8(\'q\'):y.8(\'L\')}7 2t(y){2e(y.12!=Y&&y.D!="2f")y=y.12;k(y.D=="2f")?l:m}7 2u(y){2e(y.12!=Y&&y.D!="2f")y=y.12;k y}7 3x(p){4 1w;4 2l;3(p.1c(m).8(\'q\')||p.1c(m).8(\'L\')){3(F.w[p.1c(m).8(\'q\')]){1w=F.w[1n("p.1c(m).8(\'q\')")];p=p.1c(m).8(\'q\')}o{1w=$(1n("p.1c(m).8(\'L\')"));p=p.1c(m).8(\'L\')}}o{1w=p}3(3j.4b){1w.39=7(){k 1U(p,\'O\',\'1F\')}}o{1w.4c(\'39\',7(){k 1U(p,\'O\',\'1F\')})}3(2j(H[\'3a\']).9>0){4 1l=2j(H[\'3a\']);u(b=0;b<1l.9;b++){2l=3b(1l[b]);3(2l==p){X=1l[b].D;3(1l[b].z){z=1l[b].z.15()}o{z=""}U.T(1l[b],\'22\',7(){k 1U(p,X,z)})}}}}7 2q(1R){4 3d=1R.1y("{");4 3f=1R.1y("}")+1;4 3g=1R.4d(3d,3f);k 3g}4 17=0;7 2A(10,x){4 G="";4 6;4 h=1n("({})");4 1d=m;4 1u=1e 11();4 2p=l;4 1x=m;3(F.w[x].Q[10]){6=F.w[x].Q[10];3(Z 6.1M=="1o"){1T=6[0].z.15()}o{1T=6.z.15()}3(1T=="3c"){1d=l}}o{6=$(10)}3(1d){g="";u(r=0;r<6.9;r++){g+=6[r].E+" "}}o{g=6.E}3(g){3(g.1y("{")>-1&&g.1y("}")>-1){h=2q(g).2m();g=g.20(h,"");h=1n("("+h+")")}1x=(K(h[\'1x\']))?h[\'1x\']:H[\'1x\'];1C=(K(h[\'1C\']))?h[\'1C\']:H[\'1C\'];g.1k();g=2C(g);g=g.1D(" ");u(c=0;c<g.9;c++){u(R 2H 18){3(g[c]==18[R][\'E\']){3(G==""){G=18[R][\'1r\']}o{G+=\' \'+18[R][\'1r\']}3(!13.1Z(10+","+x+","+6.E)){29=13.9;13[29]=10+","+x+","+6.E}}}u(R 2H 1h){3(g[c]==1h[R][\'E\']){3(G==""){G=1h[R][\'1r\']}o{G+=\' \'+1h[R][\'1r\']}3(!13.1Z(10+","+x+","+6.E)){29=13.9;13[29]=10+","+x+","+6.E}}}3(1d){u(n=0;n<6.9;n++){3(6[n].8(\'1j\')!=""&&6[n].8(\'1j\')!=Y){G=6[n].8(\'1j\')}}}o{3(6.8(\'1j\')){3(6.8(\'1j\')!=""&&6.8(\'1j\')!=Y){G=6.8(\'1j\')}}}3(1T=="35"&&1C&&2p){3(6.8(\'1H\')!=""){3(G==""){G=18[\'3k\'][\'1r\']+" "+6.8(\'1H\')}o{G+=" "+18[\'3k\'][\'1r\']+" "+6.8(\'1H\')}}2p=m}}}3(G!=""&&G!=Y){4 A=H[\'1q\']+"3l"+10;A=A.1k();1t=(K(h[\'1t\']))?h[\'1t\']:H[\'1t\'];1s=(K(h[\'1s\']))?h[\'1s\']:H[\'1s\'];I=(K(h[\'I\']))?h[\'I\']:H[\'I\'];V=(K(h[\'V\']))?h[\'V\']:H[\'V\'];B=(K(h[\'B\']))?h[\'B\']:H[\'B\'];4 C="<";C+=1t;C+=" L=\\""+A+"\\" ";3(1s!=""){C+="4f=\\""+1s+"\\" "}C+="1W=\\"3m:0; 4j:4k(3m=0);";3(I){C+=" 1Y:1a;"}C+="\\">";3(V!="1a"){3(V=="4l"||V=="3n"){C+=\'<3o />\'}}C+=G;3(V!="1a"){3(V=="4n"||V=="3n"){C+=\'<3o />\'}}C+="</";C+=1t;C+=">";3(B=="3p"||B=="4o"){3(1d){3(B=="3p"){3r=6.9-1;3(17==3r){3s=(2t(6[17]))?2u(6[17]):6[17];3s.1v(B,C);1L=1u.9;1u[1L]=6[17].8(\'q\')}17++}o{3(!1u.1Z(6[0].8(\'q\'))){6[0].1v(B,C);1L=1u.9;1u[1L]=6[17].8(\'q\')}}}o{3t=6.z.15();3(3t=="1N"){3v=(2t(6))?2u(6):6;3v.1v(B,C)}o{6.1v(B,C)}}}3($(A)){1e 21.2h(A,{2k:0.0,1Q:0})}3(B=="1a"&&I&&$(A)){$(A).1W.1Y=\'1a\'}}3(1x){3(6.2v&&6[0].z){J=6[0].z}o{3(6.z){J=6.z.15()}}3((6.D=="O"&&(J=="2Z"||J=="30"))||6.D=="31"){U.T(6,\'2w\',7(){W(6,x)})}3(6.D=="2r"){U.T(6,\'2w\',7(){W(6,x)});U.T(6,\'3y\',7(){W(6,x)})}3(6.D=="O"&&J=="1N"){U.T(6,\'22\',7(){W(6,x)})}3(6.D=="O"&&J=="1N"){U.T(6,\'2w\',7(){W(6,x)});U.T(6,\'22\',7(){W(6,x)});U.T(6,\'3y\',7(){W(6,x)})}3(Z 6.1M=="1o"){u(a=0;a<6.9;a++){3(!2y){4 2y=6[a].8(\'q\')}U.T(F.w[x].Q[2y][a],\'22\',7(){W(6,x)})}}}}7 37(1G){3(1G.9==0)k"";4 2B=1G.4p(".");3(2B==-1)k"";4 3B=1G.4q(2B+1,1G.9);k 3B}7 W(e,p){4 A;4 2s=l;4 h=1n("({})");4 1d=m;3(($(e))||(F.w[p].Q[e])){e=($(e))?$(e):F.w[p].Q[e]}3(Z e.1M=="1o"){6=(e[0].8(\'q\'))?e[0].8(\'q\'):e[0].8(\'L\');1d=l}o{6=(e.8(\'L\'))?e.8(\'L\'):e.8(\'q\')}3(1d){g="";u(r=0;r<e.9;r++){g+=e[r].E+" "}}o{g=e.E}3(g){3(g.1y("{")>-1&&g.1y("}")>-1){h=2q(g);g=g.20(h,"");h=1n("("+h+")")}g.1k();g=2C(g);g=g.1D(" ");4 N=m;4 2R=m;1J=(K(h[\'2G\']))?h[\'2G\']:H[\'2G\'];1z=(K(h[\'2I\']))?h[\'2I\']:H[\'2I\'];I=(K(h[\'I\']))?h[\'I\']:H[\'I\'];1q=(K(h[\'1q\']))?h[\'1q\']:H[\'1q\'];B=(K(h[\'B\']))?h[\'B\']:H[\'B\'];u(c=0;c<g.9;c++){A=1q+\'3l\'+6;A=A.1k();u(R 2H 1h){3(g[c]==1h[R][\'E\']&&e.S!=""){4 2O=1h[R][\'3U\'];3(!2O.2Q(e.S)){N=l}}}3(g[c]==18[\'3W\'][\'E\']){2R=l;3(Z e.1M=="1o"){2W=e[0].z.15();J=2W;19=e[0].D}o{J=e.z.15();19=e.D}3((19=="O"&&(J=="2Z"||J=="30"))||19=="31"){3(e.S==""){N=l}}3(19=="2r"){3(e.S==""){N=l}}3(19=="O"&&J=="1N"){3(e.3i==m){N=l}}3(19=="O"&&J=="35"){3(e.S==""){N=l}o{3(e.8(\'1H\')!=""){2i=m;2g=e.8(\'1H\').1D(",");38=37(e.S)u(f=0;f<2g.9;f++){3(38==2g[f]){2i=l}}3(!2i){N=l}}}}3(19=="O"&&J=="3c"){2n=(e.q)?F.w[p].Q[e.q]:F.w[p].Q[e[0].q];3h=2n.9;N=l;u(t=0;t<3h;t++){3(2n[t].3i==l){N=m}}}}3(g[c]==18[\'4h\'][\'E\']){3(e.4m==0&&e.D=="2r"){N=l}}}3(N){3(B=="1a"){3($(A)){2L(A,1J,1z,I)}}o{2L(A,1J,1z,I)}2s=m}o{3(B=="1a"){3($(A)){2c(A,I)}}o{2c(A,I)}}}k 2s}7 3A(){4 w=3u();4 3w;4 1b;4 j;4 1I;3(w.9>=1){u(4 i=0;i<w.9;i++){3w=3x(w[i]);x=w[i].1c(m).8(\'q\');3(x){1b=2x(x,"q")}o{1b=2x(w[i].8(\'L\'),"L")}u(j=0;j<1b.9;j++){1I=m;3(1b[j].8(\'L\')){2A(1b[j].8(\'L\'),x);1I=l}3(1b[j].8(\'q\')&&1I==m){2A(1b[j].8(\'q\'),x);1I=l}}}}}7 2L(1A,1J,1z,1S){3(2M.32(1A)>.3L){1e 21.3O(1A,{1Q:1.0,3R:1J,3X:1z})}o{3(1S){$(1A).1W.1Y=\'\'}1e 21.2h(1A,{2k:1.0,1Q:.5})}}7 2c(1V,1S){3(2M.32(1V)>.25){1e 21.2h(1V,{2k:0.0,1Q:.5});3(1S){$(1V).1W.1Y=\'1a\'}}}7 3q(2X){4 6;4 2o=l;u(4 23=0;23<13.9;23++){4 N=m;4 16=13[23].1D(",");36=16[0];p=16[1];3P=16[2];3(p==2X){3e=W(36,p);3(!3e){2o=m}}}k 2o}7 1U(1i,X,z){4 2F=3q(1i);3((X!="O"||(X=="O"&&z!="1F"))&&2F&&(F.w[1i]||$(1i))){3(F.w[1i]){F.w[1i].1F()}o{$(1i).1F()}k m}k 2F}U.T(3j,\'4x\',7(){3A()});',62,282,'|||if|var||the_field|function|getAttribute|length||||this|field_reference||classes|these_options|||return|true|false||else|form_ref|name||||for||forms|form_name|el|type|field_name|errorLocation|html|tagName|className|document|validation_message|js_options|startGone|field_type|isset|id|prototype|bad_field|INPUT|df|elements|items|value|observe|Event|useBR|blurAction|tag|null|typeof|fieldref|Array|parentNode|jsValidator|arr|toLowerCase|els|radioNum|js_validators|thisTag|none|fields|cloneNode|isRadio|new|sHTML|result|custom_validators|thisForm|alt|trim|buttons|arguments|eval|undefined|elm|errorIDPrefix|defaultMessage|errorClass|errorTag|doneRadios|insertAdjacentHTML|form_attach|useBlur|indexOf|eColor|fieldToFlag|createContextualFragment|extMessage|split|HTMLElement|submit|filename|accept|done|hColor|case|radio_pos|nodeType|checkbox|attrs|str|duration|vals|gone|el_type|submitAction|fieldToHide|style|curValue|display|inArray|replace|Effect|click|jsV|current||criterion|break|newResult|array_pos|insertBefore|String|hideFlag|formref|while|LABEL|fileTypes|Opacity|pass|getElementsByClassName|to|parent_ref|toString|this_field|proceed|doExt|extractOptions|SELECT|the_result|hasLabel|getLabel|isArray|blur|getFields|radio_name|last|attachValidation|dot|RemoveDuplicates|push|returnElements|process|highlightColor|in|endColor|lastValue|returnArray|throwFlag|Element|_emptyTags|thisRegExp|selectNodeContents|test|isRequired|sWhere|createRange|setStartBefore|collapse|thistype|theForm|ownerDocument|text|password|TEXTAREA|getOpacity|outerHTML|getElementsByTagName|file|field_ref|getFileExtension|ext|onsubmit|submitClass|getParentForm|radio|first_pos|checkField|last_pos|the_options|theRadios|checked|window|filetypes|_|opacity|both|br|afterEnd|validateFields|totalRadios|addTo|this_type|findForms|attachTo|attachIt|attachSubmit|change|pop|loadAction|extension|all|testClass|object|constructor|match|string|sort|IMG|META|75|PARAM|__defineGetter__|Highlight|class_ref|attributes|startcolor|innerHTML|__defineSetter__|regExp|replaceChild|required|endcolor|switch|beforebegin|afterbegin|firstChild|beforeend|appendChild|afterend|setStartAfter|nextSibling|form|Form|getElements|FORM|addEventListener|attachEvent|substring|HR|class|LINK|notfirst|BR|filter|alpha|before|selectedIndex|after|beforeBegin|lastIndexOf|substr|splice|isEmpty|RegExp|remove|array|isString|load'.split('|'),0,{}))