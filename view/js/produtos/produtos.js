function MostrarProdutosCategoria(categoria) {
      var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          document.getElementById("txtHint").innerHTML = this.responseText;
        }
      };
      xmlhttp.open("GET","getproduto.php?q="+categoria,true);
      xmlhttp.send();
    
  }