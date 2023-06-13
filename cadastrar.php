
<html>
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
        <h3>Digite as seguintes informações</h3>
<form id="cadastro" action="cadastro.php" method="post">
    nome: <input type="text" name="nome" required placeholder="Digite seu nome"><br><br>
    login : <input type="text" name="login" required placeholder="Digite seu login"><br><br>
    senha: <input type="password" name="senha" required placeholder="Digite sua senha"><br><br>
    <input type="submit" id="cadastrar" valve="cadastrar">

    </div>

<body>
    <html>
