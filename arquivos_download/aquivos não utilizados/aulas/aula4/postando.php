<?php

// var_dump($_POST);

session_start();

    include_once('conexão.php');
	$obj = new bd();
    $link = $obj->conecta_bd();
    
    $titulo = $_POST['titulo'];
    $texto = $_POST['texto'];
    $idusualrio = $_SESSION['id'];

    $sql = "INSERT into post(titulo, texto, idusuario) values('$titulo','$texto','$idusualrio')";

	if($usuario = mysqli_query($link, $sql)){
  
        header('location: gestor.php');
        exit();

      }
