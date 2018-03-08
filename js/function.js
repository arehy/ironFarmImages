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
        document.getElementById('resultContent').innerHTML += n + '.' + elem.elements[i]['name'] + ' ';
        n++;
      }
    }
}
function checkAll() {
  if(document.getElementById('selectAll').checked) {
    document.getElementById('lab').innerHTML = 'Semmit';
  }
  else{
    //aaaaaa = '<p>Nincs kiválasztva semmi</p>';
    //document.getElementById('resultContent').innerHTML = '<p>Nincs kiválasztva semmi</p>';
    document.getElementById('lab').innerHTML = 'Mindet';
  }

  elem = document.forms[0];
  merre = elem.elements[0].checked;

  for(i=0;i<elem.elements.length;i++) {
    if (elem.elements[i].type=="checkbox"){
      elem.elements[i].checked=merre // Ha ki nem kell, akkor merre helyett true
    }
  }
  resultWrite();
}
