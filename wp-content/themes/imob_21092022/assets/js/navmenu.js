window.onscroll = function() {scrollFunction()};
window.onload = function() { menuMobile() };


//const nav = document.getElementById("nav");
var mMobile = document.getElementById("menuMobile").innerText;
var elNav = document.getElementById("nav");


function scrollFunction() {
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    //document.getElementById("nav").style.background = "#ffffff";
    //document.getElementById("nav").style.position = "fixed";
    //document.getElementById("nav").style.width = "100vw";

    elNav.classList.add("scrollnav");

  } else {
    //nav.style.removeProperty('background');
    //nav.style.removeProperty('position');
    //nav.style.removeProperty('width');
    //document.getElementById("nav").removeAttribute("style");
    elNav.classList.remove("scrollnav");
  }
}

function menuMobile(){

    document.getElementById("menuMobile").onclick = function(){

        var iValor = document.getElementById("menuMobile").innerText;
        var element = document.querySelector('.menu-list');

        if(iValor == 'menu'){
            document.getElementById("menuMobile").innerText = "close";
            element.style.setProperty('display','flex');
            console.log(iValor);
        }
        if(iValor == 'close'){
            document.getElementById("menuMobile").innerText = "menu";
            document.getElementById("mlist").removeAttribute("style");
            console.log(iValor);
        }


    }
}
