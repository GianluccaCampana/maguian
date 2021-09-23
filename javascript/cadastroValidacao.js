var reNome = /^[A-z]{3,100}/;
var reSenha = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}/;
var reEmail = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

function validacao() {

  //Validação do nome
  if (!reNome.test(inputNome.value)) {
    alert("Nome inválido");
    inputNome.focus();
    return false
  }

  //Validação da senha
  if (!reSenha.test(inputSenha.value)) {
    alert("Senha deve conter pelo menos uma letra maipuscula e minúscula, númeors e no mínimo 8 carcteres");
    inputSenha.focus();
    return false;
  }

  //Validação da do confirma senha
  if (inputSenha.value != inputSenhaConfiirmacao.value) {
    alert("Senhas digitadas diferentes");
    inputSenhaConfiirmacao.focus();
    return false;
  }

  //validacao e-mail
  if (!reEmail.test(inputEmail.value)) {
    alert("E-mail não existe");
    inputEmail.focus();
    return false;
  }

  //validação CPF
  if (!isValidCPF(inputCPF.value)) {
    alert("CPF Inválido");
    inputCPF.focus();
    return false;
   
  }




}


// verificador CPF
function isValidCPF(cpf) {
  if (typeof cpf !== "string") return false
  cpf = cpf.replace(/[\s.-]*/igm, '')
  if (
    !cpf ||
    cpf.length != 11 ||
    cpf == "00000000000" ||
    cpf == "11111111111" ||
    cpf == "22222222222" ||
    cpf == "33333333333" ||
    cpf == "44444444444" ||
    cpf == "55555555555" ||
    cpf == "66666666666" ||
    cpf == "77777777777" ||
    cpf == "88888888888" ||
    cpf == "99999999999"
  ) {
    alert("CPF inválido");
    valuetEmail.focus();
    return false
  }
  var soma = 0
  var resto
  for (var i = 1; i <= 9; i++)
    soma = soma + parseInt(cpf.substring(i - 1, i)) * (11 - i)
  resto = (soma * 10) % 11
  if ((resto == 10) || (resto == 11)) resto = 0
  if (resto != parseInt(cpf.substring(9, 10))) {
    alert("CPF inválido");
    valuetEmail.focus();
    return false
  }
  soma = 0
  for (var i = 1; i <= 10; i++)
    soma = soma + parseInt(cpf.substring(i - 1, i)) * (12 - i)
  resto = (soma * 10) % 11
  if ((resto == 10) || (resto == 11)) resto = 0
  if (resto != parseInt(cpf.substring(10, 11))) return false
  return true
}