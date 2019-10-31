/*gérer affichage des oeuvres a visiter etc.*/ 

window.addEventListener("load", function(){
    let iconesAVisiter =document.querySelectorAll(".aVisiter");
    //console.log(iconesAVisiter);
    iconesAVisiter.forEach(function(aVisiter){
       // console.log(aVisiter.dataset.vis);
        if(aVisiter.dataset.vis !=""){
            aVisiter.innerHTML = "star";
            aVisiter.classList.add("focus");
        }
        aVisiter.addEventListener("click", function(evt){
            let icone =evt.target;
            let typeIconeTest;
            if(icone.classList.contains("text")){
                typeIconeTest="text";
            }else{
                typeIconeTest="photo";
            }

            if(icone.innerHTML == "star_border"){
                icone.innerHTML = "star";
                icone.classList.add("focus");
                //console.log(icone.dataset.id);
                //console.log(id);
            }else if(icone.innerHTML == "star"){
                icone.innerHTML = "star_border";
                icone.classList.remove("focus");
            }
            let id=icone.dataset.id;
            ajax(id);

            //Changer l'icone sur l'autre liste (texte ou photo)
            for(let i=0; i<iconesAVisiter.length; i++){
                if(id== iconesAVisiter[i].dataset.id){
                    if(!iconesAVisiter[i].classList.contains(typeIconeTest)){
                        console.log(iconesAVisiter[i]);
                        if(iconesAVisiter[i].innerHTML == "star_border"){
                            iconesAVisiter[i].innerHTML = "star";
                            iconesAVisiter[i].classList.add("focus");
            
                        }else if(iconesAVisiter[i].innerHTML == "star"){
                            iconesAVisiter[i].innerHTML = "star_border";
                            iconesAVisiter[i].classList.remove("focus");
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
        xhr.open('GET', "./aVisiter/"+data);
        xhr.onreadystatechange=function(){
            if(this.readyState == 4 && this.status == 200){
               
            }
        };    
        //récupérer l'id de l'oeuvre sur laquelle on a cliqué    
        //envoyer l'id et le username
        xhr.send();
    }

})