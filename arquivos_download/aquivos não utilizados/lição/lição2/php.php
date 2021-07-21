<?php
session_start();
$email = 'eduardogosik04@gmail.com';
$senha = '1';

$emailpost = $_POST['email'];
$senhapost = $_POST['senha'];
if ($emailpost == $email && $senhapost == $senha) {
    echo 'você fez login com sucesso';

}
else{
    echo 'falha no login e senha';
}
?>