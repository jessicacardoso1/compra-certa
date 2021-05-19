function validarFormEndereco(){

    var campos = [
                document.getElementById("text_name").value,
                document.getElementById("text_phone").value,
                document.getElementById("text_cep").value,
                document.getElementById("text_bairro").value,
                document.getElementById("text_adress").value,
                document.getElementById("text_city").value,
                document.getElementById("text_uf").value,
                document.getElementById("text_numero").value,
                document.getElementById("text_cmp").value

            ]

    ehVazio = false
    for(i = 0; i < campos.length; i++){
        if(campos[i] == "")
           ehVazio = true
    }
        
     if(ehVazio){
        alert("Por favor, preencha todos os campos!")
        return false
    }
        
    return true
}