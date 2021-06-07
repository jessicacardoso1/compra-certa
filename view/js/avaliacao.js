function Avaliar(estrela) {
    var url = window.location;
    url = url.toString()
    url = url.split("avaliar_compras.php");
    url = url[0];
   
   for(i=0; i<5; i++){
       document.getElementById("s" + (i+1)).src = "<?php echo DIRIMG.'star1.png';?>";
       if(i < estrela){
           document.getElementById("s" + (i+1)).src = "img/star1.png";
       }
   }
    document.getElementById('rating').innerHTML = estrela;
    
   }