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

