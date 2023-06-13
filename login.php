<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de login</title>
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
</head>
<body>
    
<div>   <h1>LOGIN</h1>
        <form name="login" action="logado.php" method="POST">
        Login: <input type="text" name="login" required placeholder="digite seu login">
        <br><br>
        Senha:<input type="password" name="senha" required placeholder="Digite sua senha">
        <br><br>
        <input type="submit" id="entrar" value="Entrar">
</div>
    <form>
    
</body>
</html>
