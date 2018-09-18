<?php

session_start();
if (isset($_SESSION['logado']) && $_SESSION['logado']) {  
    header("location: /rede-social/chat/index.php");        //checa se esta logado ou nao 
}

$errosenha ='';
if (isset($_SESSION['mensagem'])) {
  $errosenha = $_SESSION['mensagem'];  //se nao tiver registro
  session_destroy();
}

?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="./assents/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    
    <title>RedeSocial</title>
</head>
<body>

<!-- div total da pagina -->
<div  class ="row" style= "width: 100%;" >

<!-- metade esquerda da pagina -->
<div class="col-6" style = "background-color: gray;
    height: 632px;"><img src="assents/img/imagem.png"  class="rounded-circle" alt="logo" style = "  position: relative;
         top: 190px;
         left: 190px" ></div>


  <!-- metade direita da pagina -->
    <div  id="java" class="col-5">

         
        <div class="container"  style= "width: 500px;
        position: relative;
         top: 150px;">
         <div class="alert alert-danger" id="alerta">
            <strong><?=$errosenha;?></strong> 
          </div>
        
        <h2>Bem Vindo</h2>
        <!-- login -->
        <form action="login.php" method="post">
                  <div class="form-group">
                  <label for="logar">Login:</label>
                  <input type="text" class="form-control" id="logar" placeholder="digite seu login" name="logar">
                  </div>
                  <div class="form-group">
                  <label for="pwd">Senha:</label>
                  <input type="password" class="form-control" id="pwd" placeholder="Digite sua senha" name="pwd">
                  </div>
                  <div class="checkbox">
                  <label><input type="checkbox" name="remember"> lembrar senha</label>
                  </div>
                  <button type="submit" class="btn btn-default">Entrar</button>
                  
        </form>

                <!-- botao registrar -->
              <div class="form-group">
              <button class="btn btn-default m1" id="botao" style = " position: relative;
                left: 100px;
                bottom: 38px;
                ">Registrar</button>
              </div>
              
        </div>

 </div>

              

<!--div do resgistrar -->

<div id = "java2" class = col-6 style="position: relative;
         top: 50px;"> 
   <form action="registro.php" method="post">

          <!-- nome -->
          <div class="form-group">
            <label for="nome">Nome de Usuario</label>
            <input type="text" class="form-control" name="nome" id="nome" >
          </div>

          <!-- login-->
        <div class="form-group">
            <label for="login">login</label>
            <input type="text" class="form-control" name="login" id="login" >
        </div>


              <!-- senha -->    
          <div class="form-group">
            <label for="senha">senha</label>
            <input type="password" class="form-control" name="senha" id="senha">
          </div>

          <!-- descricao -->
          <div class="form-group">
            <label for="descricao">Auto-Descrição:</label>
            <textarea class="form-control" name="descricao" id="descricao" rows="3"></textarea>
          </div>

                <!-- sexo -->
        <div class="form-group">
          <legend class="form-group">sexo:</legend>
                <div class="form-check-inline">
                    <label class="form-check-label">
                      <input type="radio" class="form-check-input" name="sexo" value="m">masculino
                    </label>
                </div>

                <div class="form-check-inline">
                  <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="sexo">feminino
                  </label>
                </div>
                  
        </div>


          <button type="submit" class="btn btn-default">Registrar</button>
</form>
</div>
    



    <!-- mudar logar por registrar -->
    <script>
      
      $(document).ready(function(){
      $("#java2").hide();  
      $("#botao").click(function(){
        $("#java").hide();
        $("#java2").show();
    });    
    });
    
    </script>

    <script>
    $(document).ready(function(){ //tratar a mensagem de erro
      $("#alerta").hide();  
         
    });
    </script>

   




<script src="assents/js/jquery.js"></script>
<script src="assents/js/bootstrap.js"></script>
    
</body>
</html>