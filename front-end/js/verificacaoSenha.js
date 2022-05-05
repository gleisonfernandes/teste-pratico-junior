function verificasenha()
{
  
  if(document.getElementById('senha').value == "" || document.getElementById('senha2').value == "")
  {
    alert('As senhas não podem ser vazias e são itens obrigatórios. Digitias!');
  }
  if(document.getElementById('senha').value != document.getElementById('senha2').value)
  {
    alert('As senhas digitadas não são iguais. Digitias novamente!!!');
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

function versenha2()
{
    // Obtém o tipo atual do campo de senha será senha ou texto
    var passwordFieldType = document.getElementById("senha2").type;
 
    // Verifica se o tipo é um campo de senha
    if(passwordFieldType == 'password')
    {
        // Muda o campo de senha para texto
        document.getElementById ("senha2"). type = 'text';
    } else {
        // Se o tipo de campo de senha não for um campo de senha, defina-o como senha
        document.getElementById ("senha2"). type = 'password';
    }
}