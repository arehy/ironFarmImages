function selectionCopy() {

	document.getElementById("resultContent").style.visibility = "visible";
	document.getElementById("resultContent").select();
	document.execCommand('copy');
	document.getElementById("resultContent").style.visibility = "hidden";

}
function resultWrite() {
  document.getElementById('resultContent').innerHTML = '';
  var elem = document.forms[0];
  var n = 1;
    for (i = 1; i < elem.elements.length; i++) {
      if (elem.elements[i].checked){
        document.getElementById('resultContent').innerHTML += n + elem.elements[i].name + ' ';
        n++;
      }
    }
}

function charactersResultWrite() {
  //document.getElementById('resultContent').innerHTML = '';
  var elem = document.forms[0];
  var n = 1;
    for (i = 1; i < elem.elements.length; i++) {
      if (elem.elements[i].checked){
        document.getElementById('resultContent').innerHTML += n + '.' + elem.elements[i].name + ' ';
        n++;
      }
    }
}

function checkAll() {
	if(document.getElementById('selectAll').checked) {
		document.getElementById('lab').innerHTML = 'Semmit';
	}
	else{
		document.getElementById('lab').innerHTML = 'Mindet';
	}

	elem = document.forms[0];
	merre = elem.elements[0].checked;

	for(i=0;i<elem.elements.length;i++) {
		if (elem.elements[i].type=="checkbox"){
			elem.elements[i].checked=merre // Ha a ki nem kell, akkor merre helyett true
		}
	}
	resultWrite();
}

function counter(name) {

	var counterId = 'counter'+name;
	// Set the date we're counting down to

	// Update the count down every 1 second

	var x = setInterval(function() {
		var countDownDate = splitCookie(name);
		// Get todays date and time
		var now = new Date().getTime();

		// Find the distance between now an the count down date
		var distance = countDownDate - now;

		// Time calculations for days, hours, minutes and seconds
		var days = Math.floor(distance / (1000 * 60 * 60 * 24));
		var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
		var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
		var seconds = Math.floor((distance % (1000 * 60)) / 1000);

		// Output the result in an element with id="demo"
		document.getElementById(name).checked = true;
		document.getElementById(counterId).innerHTML = days + "d " + hours + "h " + minutes + "m " + seconds + "s ";

		// If the count down is over, write some text
		if (distance < 0) {
			clearInterval(x);
			document.getElementById(name).checked = false;
			document.getElementById(counterId).innerHTML = "Mehetünk :)";
		}
	}, 1000);
}


// var dateNowPlusOneHour = new Date().getTime()+3600000*24;
//createCookie('brumika', dateNowPlusOneHour, 1);
function createCookie(name, value, hours) { //hours a lejárat
    var date, expires;
    if (hours) {
        date = new Date();
        date.setTime(date.getTime()+(hours*60*60*1000));
        expires = "; expires="+date.toGMTString();
    } else {
        expires = "";
    }
    document.cookie = name+"="+value+expires+"; path=/";
}

function splitCookie(name) { //ez adja a számot, amit a counter() függvénynek kell átadni (countDownDate változó)
	if(document.cookie.length != 0) {
		var nameValueArray = document.cookie.split(name+'=');
		if (typeof nameValueArray[1] != 'undefined') {
			var nameValueArray2 = nameValueArray[1].split(';');
			if (typeof nameValueArray2[0] != 'undefined') {
				return nameValueArray2[0];
			}
		}
	}
		return 0;
}

function counterWrite() {
	var elem = document.forms[1];
	for (i = 0; i < elem.elements.length; i++) {
		var name = elem.elements[i].id;
		counter(name);
	}
}

function onChangeCounter(id){
	if (document.getElementById(id).checked) {
		charactersResultWrite();
		createCookie(id, new Date().getTime()+24*60*60*1000, 24);
		counterWrite();
	}
	else {
		counterAlert(id);
	}
}
function counterAlert(id){
	var person = prompt("Add meg percben az új értéket, 0 a reset", 0);

	if (person == null || person == "") {
		txt = "User cancelled the prompt.";
	} else {
		//person = numberCheck(person);
		//Pattern.compile("[0-9]").matches(person);
		person = numberCheck(person);
		createCookie(id, new Date().getTime()+person*60*1000, person);
	}
}
function numberCheck(foo) {
	if (foo.match(/^[\d\/-]+$/)) {
		return foo;
	}
	else {
		return 0;
	}
}
function clearAllCookie() {
	var elem = document.forms[1];
	for (i = 0; i < elem.elements.length; i++) {
		var id = elem.elements[i].id;
		createCookie(id, new Date().getTime()+0, 0);
	}
}
