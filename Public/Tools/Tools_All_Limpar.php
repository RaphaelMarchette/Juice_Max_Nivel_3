<?php

    include_once('../../config.php');

    $sqlDelete = "DELETE FROM create_juice_ativo ";
    $resultDelete = $conexao->query($sqlDelete);

    $sqlDelete = "DELETE FROM peso_ativo ";
    $resultDelete = $conexao->query($sqlDelete);

    $sqlDelete = "DELETE FROM view_liquido ";
    $resultDelete = $conexao->query($sqlDelete);
    
    $sqlDelete = "DELETE FROM ingredientes";
    $resultDelete = $conexao->query($sqlDelete);

    header('Location: ../Pedir.php');
   
?>