<?php

include_once('conexão.php');
	$obj = new bd();
    $link = $obj->conecta_bd();

    $titulo = $_POST['titulo'];
	$texto = $_POST['texto'];
    $nome = $_POST['nome'];
    
    $sql = "INSERT into post(titulo, texto, nome) values('$titulo','$texto','$nome')";
	if(mysqli_query($link, $sql)){
        echo'<img src="download.png" alt="imagem html" title="imagem html" />';

    }
    else{
        echo"erro na coneção";
    }