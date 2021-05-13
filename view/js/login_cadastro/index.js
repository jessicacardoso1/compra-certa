function validarFormLogin(){
    var campos = [
                document.getElementById("cpf_login").value,
                document.getElementById("senha_login").value
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

}//FIM função

function validarFormCadastro(){
    var campos = [
                document.getElementById("cpf_cadastro").value,
                document.getElementById("email_cadastro").value,
                document.getElementById("senha_cadastro").value,
                document.getElementById("confirmar_senha").value
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

}//FIM função

function validarSenha(){
    var senha = document.getElementById("senha_cadastro").value
    var confirmar_senha = document.getElementById("confirmar_senha").value

    if(senha !== confirmar_senha){
        alert("As senhas são diferentes! Por favor, tente novamente.")
        document.getElementById("confirmar_senha").value = ""
    }

}//FIM função

function cpf_mask(type){
    var campo = (type == 1) ? "cpf_login" : "cpf_cadastro"
    var campo_senha = document.getElementById(campo).value

    if(campo_senha.length == 3 || campo_senha.length == 7){
        campo_senha += "."
    }else if(campo_senha.length == 11){
        campo_senha += "-"
    }
    
    document.getElementById(campo).value = campo_senha

}//FIM função
