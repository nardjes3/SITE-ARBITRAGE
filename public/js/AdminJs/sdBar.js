    const sidebar = document.querySelector(".sidebar");
    const btn = document.querySelector("#btn");
    logo_img.onclick = function(){
      if (!x.matches){
        sidebar.classList.toggle('open');
      }
    }
    btn.onclick = function(){
      if (!x.matches){
        sidebar.classList.remove('open');
      }
    }

    function myFunction(x) {
      if (x.matches) { // If media query matches
        sidebar.classList.remove('open');
      } 
    }

    var x = window.matchMedia("(max-width: 700px)")
    myFunction(x) // Call listener function at run time
    x.addEventListener(myFunction) // Attach listener function on state changes