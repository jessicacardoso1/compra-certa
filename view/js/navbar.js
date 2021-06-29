function check_string_busca(){
    var string = document.getElementById('string_busca').value
    var tam_string = string.length

    const caracteres_nao_permitidos = ['%', '_', '']
    
    var check = true
    for(i = 0; i < caracteres_nao_permitidos.length; i++)
        var double_check = caracteres_nao_permitidos[i].repeat(tam_string)
        console.log(double_check)
    
        if(string == caracteres_nao_permitidos[i] || string == double_check)
            check = false

    return check
}