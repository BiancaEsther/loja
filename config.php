<?php
    $dbhost = 'localhost';
    $dbUsername = 'root';
    $dbpasswoprd = 'senac@23';
    $dbname = 'cadastro';

    $conexao = new mysqli($dbhost, $dbUsername, $dbpasswoprd, $dbname);

if($conexao ->connect_errno)
{
    echo "Erro";
}
?>


