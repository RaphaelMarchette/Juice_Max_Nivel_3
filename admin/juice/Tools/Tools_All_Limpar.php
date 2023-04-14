<?php

    include_once('../../../config.php');

    $sqlDelete = "DELETE FROM create_juice_ativo ";
    $resultDelete = $conexao->query($sqlDelete);

    $sqlDelete = "DELETE FROM peso_ativo ";
    $resultDelete = $conexao->query($sqlDelete);

    $sqlDelete = "DELETE FROM batido_ativo ";
    $resultDelete = $conexao->query($sqlDelete);
    
    $sqlDelete = "DELETE FROM ingrediente";
    $resultDelete = $conexao->query($sqlDelete);

    header('Location: ../new.php');
   
?>