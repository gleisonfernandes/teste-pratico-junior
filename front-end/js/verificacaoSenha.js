function verificasenha()
{
  var senhaValida = document.getElementById('senha').value;

  if((senhaValida.length >= 7) && (senhaValida.length <= 20) && (senhaValida.match(/[a-z]+/) || (senhaValida.match(/[A-Z]+/))) && (senhaValida.match(/[0-9]+/)))
  {
    document.getElementById('passwordBlock').innerHTML = "<span style='color: #5b07d5'>Senha valida.</span>";
  }else if(senhaValida.length ==0){
    document.getElementById('passwordBlock').innerHTML = "";
  }else if(senhaValida.length >= 7){
    document.getElementById('passwordBlock').innerHTML = "<span style='color: #ff0000'>Sua senha é invalida, coloque letras e números.</span>";
  }else{
    document.getElementById('passwordBlock').innerHTML = "<span style='color: #ff0000'>Sua senha está fraca.</span>";
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