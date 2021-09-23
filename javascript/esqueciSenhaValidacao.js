var reEmail = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

function validacao(){
    if(!reEmail.test(inputEmail.value)){
        alert("E-mail digitado  não existe");
        inputEmail.focus();
        inputEmail.value = "";
        return false;
    }else{
        alert("Verifique seu E-mail");
        
    }
}