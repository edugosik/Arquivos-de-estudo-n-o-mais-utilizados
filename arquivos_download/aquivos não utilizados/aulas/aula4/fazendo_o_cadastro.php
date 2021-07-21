<?php

// var_dump($_POST);


    include_once('conexão.php');
	$obj = new bd();
    $link = $obj->conecta_bd();
    
    $senha = $_POST['senha'];
    $email = $_POST['email'];
    $nome = $_POST['nome'];

    $sql = "INSERT into usuario(nome, senha, email) values('$nome','$senha','$email')";

	if($usuario = mysqli_query($link, $sql)){
  
        header('location: gestor.php');
        exit();

      }

