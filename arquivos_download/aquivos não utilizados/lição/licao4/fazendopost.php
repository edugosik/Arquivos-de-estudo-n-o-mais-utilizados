<?php

include_once('conexão_post.php');
	$obj = new bd();
    $link = $obj->conecta_bd();

    $titulo = $_POST['titulo'];
	$texto = $_POST['texto'];
    $nome = $_POST['nome'];
    
    $sql = "INSERT into postl4(titulo, texto, nome) values('$titulo','$texto','$nome')";

    if(mysqli_connect_errno()){
        echo "Erro 1001";
        die();
    }