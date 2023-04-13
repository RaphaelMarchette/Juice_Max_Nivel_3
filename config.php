<?php

    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'JuiceMax';
    
    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

    $lucro = 1.60;

    // if($conexao->connect_errno)
    // {
    //     echo "Erro";
    // }
    // else
    // {
    //     echo "Conexão efetuada com sucesso";
    // }

?>