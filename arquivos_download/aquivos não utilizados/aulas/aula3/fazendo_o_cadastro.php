<?php

include_once('conecxão.php');
	$obj = new bd();
    $link = $obj->conecta_bd();
    
    $nome = $_POST['nome'];
	$senha = $_POST['senha'];
    $email = $_POST['email'];
    
    $sql = "INSERT into usuario(nome, email, senha) values('$nome','$email','$senha')";
	if(mysqli_query($link, $sql)){
        echo'usuário cadastrado com sucesso!';

    }