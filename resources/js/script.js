//welcoming page
window.onload = initALL;

function initALL() {
	document.getElementById("redirect").onclick = clickHandler;
}

function clickHandler(){
	alert("Ow, that hurt!");
	return true;
}

//higlight current page link
var current = document.getElementById('current');

  function highlight(el)
  {
     if (current != null)
     {
         current.className = "";
     }
     el.className = "highlight";
     current = el;
  }



