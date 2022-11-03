window.onload = function() { headerBackgroundColor() };

function headerBackgroundColor(){

    var header = document.querySelector("header");

    var onebg = setTimeout(function(){ header.className = 'corbgh-one'; }, 10000);
    var onebg = setTimeout(function(){ header.className = 'corbgh-two'; }, 20000);
    var onebg = setTimeout(function(){ header.className = 'corbgh-three'; }, 30000);
    var onebg = setTimeout(function(){ header.className = 'corbgh-four'; }, 40000);
    var onebgfive = setTimeout(function(){ header.className = 'corbgh-five'; }, 50000);

  

    //clearTimeout(onebgfive);

}