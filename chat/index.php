<?php require_once(__DIR__ . "/../classes/modelo/Usuario.class.php"); ?>
<?php require_once(__DIR__ . "/../classes/dao/UsuarioDAO.class.php"); ?>

<?php
session_start();


$usuario = new UsuarioDAO;

$dado = $usuario->dados_usuario($_SESSION['id']);



if(!isset($_SESSION['logado']) || $_SESSION['logado'] == false ){
    header("location: /rede-social/index.php");
}

$_SESSION['nome'] = $dado->getNome();

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=], initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../assents/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../assents/js/ajax.js"></script>
    <title>Chat</title>
</head>
<body>


<script>  setInterval(update ,1000);  </script> <!-- atualizar o chat -->



   
    

<div class="row" style= "width: 100%;
background-colo: red;"   >

<!-- div com a parte esquerda da pagina -->
    <div class="col-3" style= "background-color: yellow; 
        height: 632px;">
        
        <img src="../assents/img/imagem.png"  class="rounded-circle" alt="logo" 
        style = "  position: relative;
         top: 8px;
         left: 50px" > 
         <button  id="botao-cadastrar"onclick="setarchat()" type="button" class="btn btn-primary" data-toggle="collapse" data-target="#dados_usuario" style="position: relative;
         left: 40px;
         top: 20px;
         width: 250px;
         background-color: gray;
         border-color: black
         
         " >Buscar chat</button>
  
         
  <div id=""  style="position: relative;">

  <!-- coloca os dados do usuario em exibição -->
  <table id="usuario_dados" style="position: relative;
  top: 30px; 
  left: 40px;   
  ">

    <tr>
        <td>Nome de usuario: </td>  
        <td id="usuname">  <?=$dado->getNome() ; ?></td>
    </tr>
    <tr>
        <td>Avaliação:</td>  
        <td></td>
    </tr>
    <tr>
        <td>Descrição:</td>  
        <td><?=$dado->getDescricao(); ?></td>
    </tr>

</table>
  </div>
</div>
         

                   
         
  






       <!-- div com a parte direita da pagina -->  
    <div class="col-9" id= devao style="background-color: gray;
    width: 400px;">


<!--botao para deslogar -->
    <div>
        <form  action="/rede-social/deslogar.php">
        <button style="position: relative;
         top: 38px;
         left: 900px;
        
        " class="btn btn-outline-secondary" type = "submit">Deslogar </button>
        </form> 
    </div>

<button id="botao" type="button" style="position: relative;

" class="btn btn-outline-secondary">Perfil</button>

<!-- div do chat -->
    <div  style= "
    background:#fff;
    height:480px;
    width:1000px;
    border:4px solid black;
    overflow:auto;
    position: relative;
    top: 10px;
    
    " id="atualizar"  > 
    <div id="atualizado"   ></div></div> 

<!-- iserir parametros para enviar e colocar um usuario em um chat vazio -->
    <div id='cadastrar_chat'>   
        <input id="nome_do_chat" type="text">  
        <input id="descricao_do_chat" type="text">  
        <button onclick="setarchat()"> cadastrar tema </button>
    </div>


<!-- form enviar as mensagens -->


        <input name="usermsg" type="text" id="myInput" size="100" style="position: relative;
        top: 25px;
        wigth: 200px;
        border:2px solid black;
        "  placeholder="digite sua mensagem"/>
        <button onclick="mandar_msg()" type="submit" id="meuBotao" class="btn btn-primary" style ="background-color: white;
         color: black;
         position: relative;
         top: 22px;
         left: 20px;
         " 
         name="salvar" >enviar </button> 

<script

>$(document).ready(function(){
      $("#usuario_dados").hide();  
     $("#botao").click(function(){
        $("#usuario_dados").toggle();
        
    });
    });
      
    
    
</script>

<script>
$(document).ready(function(){
      $("#cadastrar_chat").hide();  
     $("#botao-cadastrar").click(function(){
        $("#atualizar").toggle();
        $("#meuBotao").toggle();
        $("#myInput").toggle();
        $("#cadastrar_chat").toggle();
        
    });
    });
</script>


<script>
$(document).keypress(function(e) {
    if(e.which == 13) $('#meuBotao').click();
});


</script>



</div>   
   

   
   </div>
</body>
</html>