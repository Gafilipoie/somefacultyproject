window.onload = initALL;

function initALL() {
	document.getElementById("redirect").onclick = clickHandler;
}

function clickHandler(){
	alert("Ow, that hurt!");
	return true;
}
