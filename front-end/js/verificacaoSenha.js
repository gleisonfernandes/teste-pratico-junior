
function calcular() {
  
  if(document.getElementById('senha').value == "" || document.getElementById('senha2').value == ""){
      alert('As senhas não podem ser vazias e são itens obrigatórios. Digitias!');
	  }
    if(document.getElementById('senha').value != document.getElementById('senha2').value){
      alert('As senhas digitadas não são iguais. Digitias novamente!!!');
	  } 
	}
	
	
function versenha()
{
    // Get the current type of the password field will be password or text
    var passwordFieldType = document.getElementById("senha").type;
 
    // Check to see if the type is a password field
    if(passwordFieldType == 'password')
    {
        // Change the password field to text
        //passwordField.attr('type', 'text');
        document.getElementById ("senha"). type = 'text';
 
        // Change the Text on the show password button to Hide
        //$(this).val('Hide');
    } else {
        // If the password field type is not a password field then set it to password
        //passwordField.attr('type', 'password');
        document.getElementById ("senha"). type = 'password';
 
        // Change the value of the show password button to Show
        //$(this).val('Show');
    }
}

function versenha2()
{
    // Get the current type of the password field will be password or text
    var passwordFieldType = document.getElementById("senha2").type;
 
    // Check to see if the type is a password field
    if(passwordFieldType == 'password')
    {
        // Change the password field to text
        //passwordField.attr('type', 'text');
        document.getElementById ("senha2"). type = 'text';
 
        // Change the Text on the show password button to Hide
        //$(this).val('Hide');
    } else {
        // If the password field type is not a password field then set it to password
        //passwordField.attr('type', 'password');
        document.getElementById ("senha2"). type = 'password';
 
        // Change the value of the show password button to Show
        //$(this).val('Show');
    }
}