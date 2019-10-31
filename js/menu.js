window.addEventListener("load", function(){
    let appbar=document.querySelector(".appbar");
    let menu = document.querySelector(".menu");
    let iconeMenu=document.querySelector(".menuCubes");
    let iconeFermer=document.querySelector(".fermerMenu");

    iconeMenu.addEventListener("click", function(){
        appbar.classList.add("montre");
        iconeMenu.classList.add("hidden");
        iconeFermer.classList.remove("hidden");

    })
    iconeFermer.addEventListener("click", function(){
        appbar.classList.remove("montre");
        iconeMenu.classList.remove("hidden");
        iconeFermer.classList.add("hidden");

    })


});