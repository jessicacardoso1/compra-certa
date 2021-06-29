function add_carrinho(item, tela, quantidade=1){

    var request = 'http://localhost/compracerta/carrinho/inserirItem/' + item + '/' + tela

    $.post(request, {quantidade: quantidade} );

    location.reload()
}

function atualiza_carrinho(item, qnt_antiga, index){
    var request = 'http://localhost/compracerta/carrinho/inserirItem/' + item + '/carrinho'

    var qnt = document.getElementById('input-count-' + index).value

    qnt -= qnt_antiga
    $.post(request, {quantidade: qnt} );
}