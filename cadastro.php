<?php
    if (isset($_POST['submit']))
    {
        include_once('config.php');

        $nome = $_POST['nome'];
        $genero = $_POST['genero'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];

        $result = mysqli_query($conexao, "INSERT INTO cliente(nome, email, gênero, telefone)
        VALUES ('$nome', '$email','$genero', '$telefone')");
    }
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link rel="stylesheet" type="text/css" href="./style.css">
</head>

<body>
    <div class="cadastro-logo" >
        <img src="./images/logo-removebg-preview.png" alt="logo-small">
    </div>
    <div class= "formulario">
        <h1>CADASTRE-SE </h1>
   
        <form action="sucesso.php" method="POST" >
        <label>Nome:</label>
        <input type="text" name="nome" placeholder="Digite seu nome completo" size=40px required>
        <br>
        <br>
        <label> Gênero:</label>
        <input type ="text" name="genero" placeholder="feminino/ masculino/ não declarar" size=39px>
        <br>
        <br>
        <label>E-mail:</label>
        <input type="text" name="email" placeholder="Digite o seu melhor e-mail" size=40px required>
        <br>
        <br>
        <label>Telefone</label>
        <input type="text" name="telefone" placeholder="Digite o seu telefone" size=39px required>
        <br>
        <br>
        <input type="submit" name="submit" value="Cadastrar" >
        </form>
    </div>

</body>
</html>





