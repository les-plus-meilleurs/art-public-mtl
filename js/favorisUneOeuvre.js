/*gérer affichage des favoris etc.*/ 
window.addEventListener("load", function(){
    let favori =document.querySelector(".favori");
    console.log(favori);

    if(favori.dataset.fav !=""){
        favori.innerHTML = "favorite";
        favori.classList.add("focus");
    }

        favori.addEventListener("click", function(evt){
            if(favori.innerHTML == "favorite_border"){
                favori.innerHTML = "favorite";
                favori.classList.add("focus");

            }else if(favori.innerHTML == "favorite"){
                favori.innerHTML = "favorite_border";
                favori.classList.remove("focus");
            }
            let id=favori.dataset.id;
            ajax(id);

            

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