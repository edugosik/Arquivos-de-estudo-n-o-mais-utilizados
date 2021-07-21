<?php


$nota = 7;

if($nota == 10){
    echo'aluno fou aprovado com louvor';
}

elseif($nota>= 5 && $nota < 7){
    echo'aluno em recuperação';
}

elseif($nota >= 7){
    echo'aluno aprovado';
}

else{
    echo'aluno reprovado';
}
