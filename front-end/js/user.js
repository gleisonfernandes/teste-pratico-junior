let button = document.querySelector(".btn");
button.disabled = true;
var nome = false;
var email = false;
var senha = false;
//Função que faz a verificação e validação do nome
function verificanome()
{
  var nomeValida = document.getElementById('nome').value;

  if(nomeValida.length >= 5)
  {
    document.getElementById('nomeBlock').innerHTML = "<span style='color: #5b07d5'>Nome valido.</span>";
    nome = true;
    habilitarBotton();
  }else if(nomeValida.length ==0){
    document.getElementById('nomeBlock').innerHTML = "";
    nome = false;
    habilitarBotton();
  }else{
    document.getElementById('nomeBlock').innerHTML = "<span style='color: #ff0000'>Seu nome é invalida escreva um nome maior.</span>";
    nome = false;
    habilitarBotton();
  }
}
//Função que faz a verificação e validação do email
function verificaemail()
{
  var emailValida = document.getElementById('email').value;

  if(emailValida.match(/[@]+/) && emailValida.match(/[.]+/))
  {
    document.getElementById('emailBlock').innerHTML = "<span style='color: #5b07d5'>E-mail valido.</span>";
    email = true;
    habilitarBotton();
  }else if(emailValida.length ==0){
    document.getElementById('emailBlock').innerHTML = "";
    email = false;
    habilitarBotton();
  }else{
    document.getElementById('emailBlock').innerHTML = "<span style='color: #ff0000'>Seu email é invalido, coloque @ e .com para validar.</span>";
    email = false;
    habilitarBotton();
  }
}
//Função que faz a verificação e validação da senha
function verificasenha()
{
  var senhaValida = document.getElementById('senha').value;

  if((senhaValida.length >= 7) && (senhaValida.length <= 20) && (senhaValida.match(/[a-z]+/) || (senhaValida.match(/[A-Z]+/))) && (senhaValida.match(/[0-9]+/)))
  {
    document.getElementById('passwordBlock').innerHTML = "<span style='color: #5b07d5'>Senha valida.</span>";
    senha = true;
    habilitarBotton();
  }else if(senhaValida.length ==0){
    document.getElementById('passwordBlock').innerHTML = "";
    senha = false;
    habilitarBotton();
  }else if(senhaValida.length >= 7){
    document.getElementById('passwordBlock').innerHTML = "<span style='color: #ff0000'>Sua senha é invalida, coloque letras e números.</span>";
    senha = false;
    habilitarBotton();
  }else{
    document.getElementById('passwordBlock').innerHTML = "<span style='color: #ff0000'>Sua senha está fraca.</span>";
    senha = false;
    habilitarBotton();
  }
}
//Habilita o botão de cadastro quando todos os campos estão preenchidos corretamente.
function habilitarBotton(){
  if(nome == true && email == true && senha == true){
    button.disabled = false;
  }else{
    button.disabled = true;
  }
}


function versenha()
{
    // Obtém o tipo atual do campo de senha será senha ou texto
    var passwordFieldType = document.getElementById("senha").type;
 
    // Verifica se o tipo é um campo de senha
    if(passwordFieldType == 'password')
    {
        // Muda o campo de senha para texto
        document.getElementById ("senha"). type = 'text';
    } else {
        // Se o tipo de campo de senha não for um campo de senha, defina-o como senha
        document.getElementById ("senha"). type = 'password';
    }
}