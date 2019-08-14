function _(x){
	return document.getElementById(x);
}
// And all over the site from now on you can get html elements by their id by simply using
//_("div1").innerHTML = "Hello World";
function restrict(elem){
	var tf = _(elem);
	var rx = new RegExp;
	if(elem == "email"){
		rx = /[' "]/gi;
	}else if(elem == "e"){
		rx = /[' "]/gi;
	} else if(elem == "phone"){
		rx = /[^+0-9]/gi;
	} else if(elem == "uname"){
		rx = /[^a-z0-9]/gi;
	} else if(elem == "discount"){
		rx = /[^0-9]/gi;
	}
	tf.value = tf.value.replace(rx, "");
}
function emptyElement(x){
	_(x).innerHTML = "";
}
function showElement(x){
	var x = _(x);
	if(x.style.display == 'none'){
		x.style.display = 'block';
	}else{
		x.style.display = 'block';
	}
}
function hideElement(x){
	var x = _(x);
	if(x.style.display == 'block'){
		x.style.display = 'none';
	}else{
		x.style.display = 'none';
	}
}

//function toggleElement(x,a,b,c,d,e){
function toggleElement(x){
	var x = _(x);
	
	//find and hide others
	//hideElement(a); hideElement(b); hideElement(c); hideElement(d); hideElement(e); 
	//done*/
	
	if(x.style.display == 'block'){
		x.style.display = 'none';
	}else{
		x.style.display = 'block';
	}
}

function goTo(here){
 window.location.href=here;
}
function reloadPage(){
 window.location.reload();
}
//------------------------------------------------------------------------------------------
function signUpFromHome(){
	if(_('landlordBtn').classList.contains("active")){
		var to = _('homeEmail').value+'&who=landlord';
	} else if(_('renterBtn').classList.contains("active")){
		var to = _('homeEmail').value+'&who=tenant';
	}
	goTo('signup?e='+to);
}
//------------------------------------------------------------------------------------------
// Handle Accordions
//---------------------
var accordions = document.getElementsByClassName("accordion");
for(var i=0; i<accordions.length; i++){
	accordions[i].onclick = function(){
		this.classList.toggle('is-open');
		
		var content = this.nextElementSibling;
		if(content.style.display == 'none'){
			content.style.display = 'block'
		} else {
			content.style.display = 'none'
		}
	}
}
//------------------------------------------------------------------------------------------
function toggleWho(a,b){
	_(a).classList.add('active');
	_('who').value = a;
	if(_(b).classList.contains('active')){ _(b).classList.remove('active'); }
}
//------------------------------------------------------------------------------------------
function toggleCheck(x){
	if(_(x).classList.contains("is-checked")){
		_(x).classList.remove('is-checked');
	} else { _(x).classList.add('is-checked'); }
}
//------------------------------------------------------------------------------------------
function getRandomInt(min, max) {
    min = Math.ceil(min);
    max = Math.floor(max);
    return Math.floor(Math.random() * (max - min + 1)) + min;
}
//-------------------------------------------------------------------------------------------
function logcheck(){
	var un = _("un").value;
	var pw = _("pw").value;
	var k = document.querySelector('.keep').checked;

	if(un == "" || pw == ""){
		_("stat").innerHTML = "Fill out all of the form data";
		return false;
	} else {
		_("loginbtn").style.display = "none";
		_("stat").innerHTML = 'please wait... <img src="assets/img/fbk.gif" style="width:10%; height:10%"/>';
		var ajax = ajaxObj("POST", "login.php");
        ajax.onreadystatechange = function() {
	        if(ajaxReturn(ajax) == true) {
	            if(ajax.responseText == "login_failed"){
					_("stat").innerHTML = "Login unsuccessful, please try again.";
					_("loginbtn").style.display = "block";
				} else {
				   	window.location = "./?u="+ajax.responseText;
				}
	        }
        }
	ajax.send("u="+un+"&p="+pw+"&k="+k);
	return true;
	}
}
//---------------------------------------------------------------------------------------------	
