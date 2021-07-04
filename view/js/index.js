function btnCounter(id, tipoOperacao){
    var campo = document.getElementById(id)
    
    if(campo.value < 1)
        setBtnMaisVendidos(id, 1)

    if(tipoOperacao == 'sum'){
        setBtnMaisVendidos(id, parseInt(campo.value) + 1)
    }

    else if(tipoOperacao == 'sub'){
        if(campo.value == 1){
            return
        }
        
        campo.value = parseInt(campo.value) - 1;
    }

}//FIM função

function setBtnMaisVendidos(id, valor){
    document.getElementById(id).value = valor;

    // setando o campo hidden do form da quantidade pro carrinho
    // document.getElementById('qnt').value = valor
}//FIM função

function update_value(id){
    var valor = document.getElementById('input-count').value

    if(valor < 1){
        document.getElementById('qnt').value = 1
        document.getElementById('input-count').value = 1
    }else
        document.getElementById('qnt').value = valor
}

function validar_form(lista_campos){
    var check = true

    console.log(lista_campos)

    lista_campos.forEach(campo => {
        if(document.getElementById(campo).value == '')
            check = false
    })

    if(!check){
        alert("Por favor, preencha todos os campos!")
        return false
    }

    return true
}

$(document).ready(function(){
    $(".dropdown").hover(function(){
        var dropdownMenu = $(this).children(".dropdown-menu");
        if(dropdownMenu.is(":visible")){
            dropdownMenu.parent().toggleClass("open");
        }
    });
});