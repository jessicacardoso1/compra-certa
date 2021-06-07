function Avaliar(estrela) {
    //alert("chegou")
   
    for(i=0; i<5; i++){
        document.getElementById("s" + (i+1)).src = "../img/star0.png";
        if(i < estrela){
            document.getElementById("s" + (i+1)).src = "../img/star1.png";
        }
    }

   document.getElementById("rating").value = estrela;
}