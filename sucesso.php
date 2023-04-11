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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Cadastro realizado com sucesso
</body>
</html>