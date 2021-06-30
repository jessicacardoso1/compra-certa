function Avaliar(estrela) {
    //alert("chegou")
   const star0 = "http://localhost/compracerta/view/img/star0.png";
   const star1 = "http://localhost/compracerta/view/img/star1.png";

    for(i=0; i<5; i++){
        document.getElementById("s" + (i+1)).src = star0;
        if(i < estrela){
            document.getElementById("s" + (i+1)).src = star1;
        }
    }

   document.getElementById("rating").value = estrela;
}