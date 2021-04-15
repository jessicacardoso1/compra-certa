function btnMaisVendidos(id, tipoOperacao){
    var campo = document.getElementById(id)

    if(campo.value == "")
        campo.value = 0

    if(tipoOperacao == 'sum'){
        setBtnMaisVendidos(id, parseInt(campo.value) + 1)
    }

    else if(tipoOperacao == 'sub'){
        if(campo.value == 1 || campo.value == 0)
        setBtnMaisVendidos(id, "")
        
        campo.value = parseInt(campo.value) - 1;
    }
}//FIM função

function setBtnMaisVendidos(id, valor){
    document.getElementById(id).value = valor;

}//FIM função