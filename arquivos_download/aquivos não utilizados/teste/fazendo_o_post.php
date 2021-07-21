<?php

include_once('conexão.php');
	$obj = new bd();
    $link = $obj->conecta_bd();

    $titulo = $_POST['titulo'];
	$texto = $_POST['texto'];

    $sql = "INSERT into post(titulo, texto) values('$titulo','$texto')";
	if(mysqli_query($link, $sql)){
        echo'parabens você postou seu post.';
    }

    else{
        echo"erro na conexão";
    }