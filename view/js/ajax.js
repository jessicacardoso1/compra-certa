function add_carrinho(item, tela){

    var request = 'http://localhost/compracerta/carrinho/inserirItem/' + item + '/' + tela
    $.post(request)

    location.reload();
}

function rm_carrinho(item){
    
}