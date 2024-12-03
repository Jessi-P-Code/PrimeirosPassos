<?php
    $nome = $_GET['nome'];
    $telefone = $_GET['telefone'];
    $email = $_GET['e-mail'];
    $novidades = $_GET['novidades'];
    $mensagem = $_GET['mensagem'];
    echo('Meu nome é: ' . $nome  . '</br>' . 'Meu telefone é: ' . $telefone . '</br>' . 'Meu e-mail é: ' . $email . '</br>' . 'Aceito novidades: ' . $novidades . '</br>' . 'Minha mensagem: ' . $mensagem);
?>