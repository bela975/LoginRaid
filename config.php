<?php

    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'raidhut';

    $conexao = new $mysqli($dbHost,$dbUsername,$dbPassword,$dbName)


    if($conexao->connect_errno){

        echo "ERRO!"
    }
    else{
        echo"conexão efetuada com sucesso"
    }
?>
