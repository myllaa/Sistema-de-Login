<?php 
session_start(); 
?>
<!DOCTYPE html>
<html  lang = "pt-br">
  <head>
  	<meta  charset = "UTF-8">
  	<title>Página de Login</title>
    <meta  name = "autor" content = "Mylla Rodrigues" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<link href="css/style.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <?php
      require_once"login.php"
    ?>
  <div>
    <h1>Faça login na sua conta</h1>
      <form  action=" <?php $_SERVER['PHP_SELF'];?>" method="post">
        <input pattern="^[a-zA-Z]+$" required="required" type="text" id="nome" name="nome" placeholder="Seu Usuário" />
        <input  pattern="^[a-zA-Z0-9]+$"  required="required" type="password" id="senha" name="senha" placeholder="Sua Senha" />
        <input type="submit" value="Enviar" name="enviar" id="enviar"/>
     </form>
  </div>

   <script>
    var login = document.getElementById("logado")
    var elogin = document.getElementById("nLogado")
         setTimeout(function(){
    if(login!=null){
      console.log("logado")
      login.style.color="#F08080"
      login.innerText="login autorizado, bem vindo!"
    }
    if(login==null){
      console.log("nLogado")
      elogin.innerText="sua senha ou e-mail estão incorretos!"
    }
  },3000) 

  </script>

  </body>

</html>