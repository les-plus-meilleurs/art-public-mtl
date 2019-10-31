/*gérer affichage des favoris etc.*/ 
window.addEventListener("load", function(){
    let iconesFavoris =document.querySelectorAll(".favori");
   // console.log(iconesFavoris);
    iconesFavoris.forEach(function(favori){
        //console.log(favori.dataset.fav);
        if(favori.dataset.fav !=""){
            favori.innerHTML = "favorite";
            favori.classList.add("focus");
        }
        favori.addEventListener("click", function(evt){
            let icone =evt.target;
           // let typeicone=icone.classList;
            let typeIconeTest;
            if(icone.classList.contains("text")){
                typeIconeTest="text";
            }else{
                typeIconeTest="photo";
            }

            if(icone.innerHTML == "favorite_border"){
                icone.innerHTML = "favorite";
                icone.classList.add("focus");

            }else if(icone.innerHTML == "favorite"){
                icone.innerHTML = "favorite_border";
                icone.classList.remove("focus");
            }
            let id=icone.dataset.id;
            ajax(id);

            //Changer l'icone sur l'autre liste (texte ou photo)
            for(let i=0; i<iconesFavoris.length; i++){
                if(id== iconesFavoris[i].dataset.id){
                    if(!iconesFavoris[i].classList.contains(typeIconeTest)){
                       // console.log(iconesFavoris[i]);
                        if(iconesFavoris[i].innerHTML == "favorite_border"){
                            iconesFavoris[i].innerHTML = "favorite";
                            iconesFavoris[i].classList.add("focus");
            
                        }else if(iconesFavoris[i].innerHTML == "favorite"){
                            iconesFavoris[i].innerHTML = "favorite_border";
                            iconesFavoris[i].classList.remove("focus");
                        }
                    }
                }
            }

        });
    });



    /*Fonction ajax à laquelle on envoi un tableau et qui le passe en paramètre au GET du ajax
    @param {array} data : un tableau près à être convertit en JSON
    */
    function ajax(data){
        let xhr = new XMLHttpRequest();
        xhr.open('GET', "./favoris/"+data);
        xhr.onreadystatechange=function(){
            if(this.readyState == 4 && this.status == 200){
                //mettre à jour l'autre liste
                let iconesFavoris =document.querySelectorAll(".favori");
                // iconesFavoris.forEach(function(favori){
                //     if(favori.dataset.id == data)
                // });

            }
        };    
        //récupérer l'id de l'oeuvre sur laquelle on a cliqué    
        //envoyer l'id et le username
        xhr.send();
    }


})