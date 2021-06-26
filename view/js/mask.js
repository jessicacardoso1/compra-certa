function telefone_mask(id){
    var campo_telefone = document.getElementById(id).value

    if(campo_telefone.length == 0)
        campo_telefone += "("
    else if(campo_telefone.length == 3)
        campo_telefone += ") "
    else if(campo_telefone.length == 10)
        campo_telefone += "-"
    
    document.getElementById(id).value = campo_telefone
}//FIM função

function cep_mask(id){
    var campo_cep = document.getElementById(id).value

    if(campo_cep.length == 5)
        campo_cep += "-"
    
    document.getElementById(id).value = campo_cep
}//FIM função