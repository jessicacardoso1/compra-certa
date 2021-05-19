function validarFormEditarCadastro(){

    var campos = [
                document.getElementById("text_cpf").value,
                document.getElementById("text_email").value
                
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

function validarSenha(){
    var senha = document.getElementById("text_password").value
    var text_password2 = document.getElementById("text_password2").value

    console.log("senha: " + senha)
    console.log("conf_senha: " + text_password2)

    if(senha !== text_password2){
        alert("As senhas são diferentes! Por favor, tente novamente.")
        document.getElementById("text_password2").value = "";
    }
}