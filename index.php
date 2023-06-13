<?php
session_start();
?>
</html>
<style>
      body{
        font-family: Arial, Helvetica, sans-serif;
        background-image: linear-gradient(45deg,cyan, yellow);
      }
      div{
        background-color: rgba(0, 0, 0,0.9);
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
        padding: 80px;
        border-radius: 15px;
        color: white;
      }
       
      input{
        padding: 15px;
        border: none;
        outline: none;
        font-size: 15px;
      }
    </style>
  <body> 
    <div>
     olá, seja bem vindo <?php
     if (isset($_SESSION['nome']) == null){
        ?> visitante<br>
    Realize o <a href="login.php">login</a>
     <?php } else {
        echo $_SESSION['nome']; ?><br><br>
    para cadastrar um novo usuario clique em: <a href="cadastrar.php"><h3>cadastrar</h3></a>
    para finalizar sessão clique em: <a href="logout.php"><h3>sair</h3></a>
    <?php } ?>
     </div>

</body>
</html>
