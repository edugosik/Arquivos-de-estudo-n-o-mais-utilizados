<?php

include_once('conexão.php');
	$obj = new bd();
    $link = $obj->conecta_bd();
    

	$senha = $_POST['senha'];
    $email = $_POST['email'];
    
    $sql = "SELECT *  from persons where email = '$email' and senha = '$senha'";
	if($usuario = mysqli_query($link, $sql)){
        var_dump($usuario);
    }
    