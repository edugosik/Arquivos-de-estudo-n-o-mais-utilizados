<?php

// var_dump($_POST);


    include_once('conexão.php');
	$obj = new bd();
    $link = $obj->conecta_bd();
    

    
    $senha = $_POST['senha'];
    // ech
    $email = $_POST['email'];
    
    $sql = "SELECT * from persons where email = '$email' and senha = '$senha'";
 
	if($usuario = mysqli_query($link, $sql)){
    
        $dados = mysqli_fetch_array($usuario);
		
		if (isset($dados['id'])) {
			session_start();
        $_SESSION['id'] = $dados['id'];
       
        header('location: gestor.php');
        exit();
      }

    }